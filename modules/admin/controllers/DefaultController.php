<?php

namespace app\modules\admin\controllers;

use app\core\backend\BaseBackendController;


class DefaultController extends BaseBackendController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
