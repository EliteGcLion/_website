<?php
/**
 * Created by PhpStorm.
 * User: GCLion
 * Date: 2019/1/29
 * Time: 23:24
 */

namespace backend\modules\category\controllers;


use backend\controllers\CommonController;

class ManageController extends CommonController
{
    # 分类列表
    public function actionIndex()
    {
        $this->data['js'] = [
            'static/common/js/jquery.nestable.min.js',
            'static/js/category/index.js'
        ];

        return $this->render('index',$this->data);
    }

    # 新增分类
    public function actionAdd(){

        return $this->render('add');
    }

    public function actionEdit(){
        return $this->render('edit');
    }


}