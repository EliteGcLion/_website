<?php
/**
 * Created by PhpStorm.
 * User: GCLion
 * Date: 2019/2/19
 * Time: 0:04
 */

namespace backend\modules\article\controllers;


use backend\controllers\CommonController;

class ManageController extends CommonController
{
    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionAdd()
    {
        $this->data['js'] = array(
            'static/js/article/index.js'
        );
        return $this->render('add',$this->data);
    }
}