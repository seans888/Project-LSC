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
        'css/site.css',
        'theme/css/bootstrap.css',
        'theme/css/flexslider.css',
        'theme/css/font-awesome.min.css',
        'theme/css/style.css',
        'slideshow/css/bootstrap.css',
        'slideshow/css/bootstrap.min.css',
        'slideshow/css/half-slider.css',
    ];
    public $js = [
        'theme/js/bootstrap.js',
        'theme/js/custom.js',
        'theme/js/jquery.easing.min.js',
        'theme/js/jquery.flexslider.js',
        'theme/js/jquery-1.10.2.js',
        'theme/js/scrollReveal.js',
        'slideshow/js/bootstrap.js',
        'slideshow/js/bootstrap.min.js',
        'slideshow/js/jquery.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
