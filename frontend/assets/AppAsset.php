<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/css/bootstrap.min.css',
        'static/css/nprogress.css',
        'static/css/style.css',
        'static/css/font-awesome.min.css',
        'static/css/common.css'
    ];
    public $js = [
        'static/js/jquery-2.1.4.min.js',
        'static/js/bootstrap.min.js',
        'static/js/nprogress.js',
        'static/js/jquery.lazyload.min.js',

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

    // 定义按需加载js方法，注意加载顺序
    public static function addJs($view,$jsfile){
        foreach ($jsfile as $v){
            $view->registerJsFile($v,['depends'=>'frontend\assets\AppAsset','position'=>View::POS_END]);
        }
    }

    //定义按需加载css方法，注意加载顺序在最后
    public static function addCss($view, $cssfile)
    {
        $view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'frontend\assets\AppAsset']);
    }





}
