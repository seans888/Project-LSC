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
        'css/style1.css',
        'theme/css/bootstrap.css',
        'theme/css/flexslider.css',
        'theme/css/font-awesome.min.css',
        'theme/css/style.css',
    ];
    public $js = [
        'theme/js/bootstrap.js',
        'theme/js/custom.js',
        'theme/js/jquery.easing.min.js',
        'theme/js/jquery.flexslider.js',
        'theme/js/jquery-1.10.2.js',
        'theme/js/scrollReveal.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
