<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/common/css/bootstrap.min.css',
        'static/common/css/font-awesome/4.5.0/css/font-awesome.min.css',
        'static/common/css/fonts.googleapis.com.css',
        'static/common/css/ace.min.css',


    ];

    public $js = [
        'static/common/js/jquery-2.1.4.min.js',
        'static/common/js/bootstrap.min.js',
        'static/common/js/jquery-ui.custom.min.js',
        'static/common/js/jquery.ui.touch-punch.min.js',
        'static/common/js/ace-elements.min.js',
        'static/common/js/ace.min.js',
        'static/common/common.js'
    ];

    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

    // 定义按需加载js方法，注意加载顺序
    public static function addJs($view,$jsfile){
        if(is_array($jsfile)){
            foreach ($jsfile as $v){
                $view->registerJsFile($v,['depends'=>'backend\assets\AppAsset','position'=>View::POS_END]);
            }
        }

    }

    //定义按需加载css方法，注意加载顺序在最后
    public static function addCss($view, $cssfile)
    {
        $view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'backend\assets\AppAsset']);
    }

    // 编辑器
    public static function addEdit($view)
    {
        $soure = array(
            'static/common/plugin/ueditor/ueditor.config.js',
            'static/common/plugin/ueditor/ueditor.all.min.js',
        );
        self::addJs($view,$soure);
    }

}
