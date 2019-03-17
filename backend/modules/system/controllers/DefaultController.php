<?php

namespace backend\modules\system\controllers;

use backend\controllers\CommonController;
use Yii;

/**
 * Default controller for the `system` module
 */
class DefaultController extends CommonController
{
    public $layout = false;
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
