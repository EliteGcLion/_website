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
        'label' => '分类管理',
        'url' => ['/category/manage/index'],
    ],
    ['label' => '分类列表'],
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
        <div class="row">
            <div class="col-xs-12">
                <div>
                    <button class="btn btn-primary">
                        <i class="ace-icon fa fa-plus bigger-120"></i>
                        <span>新增分类</span>
                    </button>
                </div>
                <div class="space-6"></div>
                <div>
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <colgroup>
                            <col width="50">
                            <col width="200">
                            <col width="450">
                            <col width="220">
                            <col width="100">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="center">序号</th>
                                <th>分类名称</th>
                                <th>子分类</th>
                                <th class="hidden-480">备注说明</th>
                                <th>操作</th>
                            </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="center">1</td>

                            <td>
                                <a href="#">app.com</a>
                            </td>
                            <td>$45</td>
                            <td class="hidden-480">3,330</td>
                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a class="green" href="#">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <a class="red" href="#">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

</div>
