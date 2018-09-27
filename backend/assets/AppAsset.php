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
        'css/site.css',
        'css/bootstrap.css',
        'css/font-awesome.css',
        'js/morris/morris-0.4.3.min.css',
        'css/custom-styles.css',

    ];
    public $js = [
       // 'js/jquery-1.10.2.js',
        //'jquery-3.3.1.min.js',
        'js/jquery.metisMenu.js',
        'js/bootstrap.min.js',
        'js/current-menu.js',
        '/js/web/common.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
