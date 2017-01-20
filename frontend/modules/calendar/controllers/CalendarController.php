<?php

namespace frontend\modules\calendar\controllers;

use yii\web\Controller;


class CalendarController extends Controller {
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    
}
