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
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'css/fonts.css',
        'css/animate.min.css',
        'css/magnific-popup.css',
        'stylesheets/screen.css',
//        'stylesheets/ie.css',
//        'stylesheets/print.css',
//        'fonts/stylesheet.css',


    ];
    public $js = [
        'js/index.js',
        'js/smartscroll.js',
        'js/jquery.magnific-popup.min.js',
        'js/wow.min.js',
        'js/script.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
