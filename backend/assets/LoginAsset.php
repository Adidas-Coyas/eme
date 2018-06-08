<?php
/**
 * Created by PhpStorm.
 * User: coyas
 * Date: 5/23/18
 * Time: 8:17 PM
 */

namespace backend\assets;


use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/login.css',
    ];

    public $js = [
      '',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
