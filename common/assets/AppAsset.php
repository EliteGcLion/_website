<?php
namespace common\assets;
/**
 * Created by PhpStorm.
 * User: GCLion
 * Date: 2019/1/26
 * Time: 22:42
 */
use \yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}