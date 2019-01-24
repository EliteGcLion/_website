<?php
/**
 * Created by PhpStorm.
 * User: GCLion
 * Date: 2019/1/21
 * Time: 22:18
 */

namespace frontend\modules\blog\controllers;


use frontend\controllers\CommonController;

class IndexController extends CommonController
{
    # 首页
    public function actionIndex()
    {
        return $this->render('index');
    }

    # 详情
    public function actionDetail()
    {
        return $this->render('detail');
    }

    # 列表
    public function actionList()
    {
        $this->data['js'][] = 'http://code.jquery.com/ui/1.11.4/jquery-ui.js';
        $this->data['js'][] = '/static/js/jquery.ias.js';
        $this->data['js'][] = '/static/js/scripts.js';

        return $this->render('list',$this->data);
    }
}