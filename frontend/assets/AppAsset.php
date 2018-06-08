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
        'css/imedia.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/animate.css',
        'css/prettyPhoto.css',
        'css/style.css',
        'css/prettyPhoto.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/jquery-2.1.1.min.js',
        'js/jquery.prettyPhoto.js',
        'js/jquery.isotope.min.js',
        'js/wow.min.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyB0JvqTAm3aIKPNMhsklm6P6ZFUbBdzcO0&callback=initMap',
        'js/functions.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
