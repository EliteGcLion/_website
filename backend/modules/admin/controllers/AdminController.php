<?php
/**
 * Created by PhpStorm.
 * User: GCLion
 * Date: 2019/1/26
 * Time: 23:54
 */

namespace backend\modules\admin\controllers;


use backend\controllers\CommonController;

class AdminController extends CommonController
{
    # 首页
    public function actionIndex()
    {
        $this->data['js'] = array(
            'static/js/admin/index.js'
        );

        return $this->render('index',$this->data);
    }
}