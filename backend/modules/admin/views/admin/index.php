<?php
/**
 * Created by PhpStorm.
 * User: GCLion
 * Date: 2019/1/27
 * Time: 0:08
 */
use backend\assets\AppAsset;
use yii\widgets\Breadcrumbs;


$this->params['breadcrumbs']=[
    [
        'label' => '首页',
        'url' => ['/'],
    ],
    ['label' => 'Sample Post'],
];

AppAsset::addJs($this,$js);
?>
<div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <?= Breadcrumbs::widget([
            'homeLink'=>false,
            'itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'options'=>['class'=>'breadcrumb']
        ])?>
    </div>
    <div class="page-content">
        <!-- 主要内容-->


    </div>

</div>
