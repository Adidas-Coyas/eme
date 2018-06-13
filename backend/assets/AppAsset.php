<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/imedia.css',
        //'css/bootstrap.min.css',//meu bootstrap
        'https://use.fontawesome.com/releases/v5.0.13/css/all.css',
    ];
    public $js = [
        'js/imedia.js',
        'js/bootstrap.min.js',
        'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',
        //'http://cdn.ckeditor.com/4.9.2/standard/ckeditor.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        //'fedemotta\datatables\DataTablesAsset',
    ];
}
