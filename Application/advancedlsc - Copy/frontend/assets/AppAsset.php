<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      //  'css/site.css',
        'css/form.css',
        'css/bootstrap.css',
        'css/flexslider.css',
        'css/font-awesome.min.css',
        'css/style.css',
    ];
    public $js = [
        'js/main.js',
        'js/bootsrap.js',
        'js/custom.js',
        'js/jquery.easing.min.js',
        'js/jquery.flexslider.js',
        'js/jquery-1.10.2.js',
        'js/scrollReveal.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
