<?php
/**
 * Created by PhpStorm.
 * User: GCLion
 * Date: 2019/1/27
 * Time: 21:32
 */

namespace backend\modules\admin\controllers;


use backend\controllers\CommonController;

class UserController extends CommonController
{
    # 用户列表
    public function actionIndex()
    {
        return $this->render('index');

    }
    # 新增
    public function actionAdd()
    {
        return $this->render('add');
    }

    # 编辑
    public function actionEdit(){
        return $this->render('add');
    }

    # 详情
    public function actionDetail()
    {
        return $this->render('detail');
    }
}