<?php
/**
 * Created by PhpStorm.
 * User: kozhevnikov
 * Date: 31.03.2016
 * Time: 14:44
 */

namespace onmotion\helpers;

class Image
{
   static function resize($file, $w, $h, $crop=FALSE) {
       list($width, $height) = getimagesize($file);
       $r = $width / $height;
       if ($crop) {
           if ($width > $height) {
               $width = ceil($width-($width*abs($r-$w/$h)));
           } else {
               $height = ceil($height-($height*abs($r-$w/$h)));
           }
           $newwidth = $w;
           $newheight = $h;
       } else {
           if ($w/$h > $r) {
               $newwidth = $h*$r;
               $newheight = $h;
           } else {
               $newheight = $w/$r;
               $newwidth = $w;
           }
       }
       $src = imagecreatefromjpeg($file);
       $dst = imagecreatetruecolor($newwidth, $newheight);
       imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

       return $dst;
   }

    static function fix_orientation(&$image, $filename) {
        $exif = exif_read_data($filename);
        
        if (!empty($exif['Orientation'])) {
            switch ($exif['Orientation']) {
                case 3:
                    $image = imagerotate($image, 180, 0);
                    break;

                case 6:
                    $image = imagerotate($image, -90, 0);
                    break;

                case 8:
                    $image = imagerotate($image, 90, 0);
                    break;
            }
        }
    }
}
