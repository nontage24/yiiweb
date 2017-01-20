<?php

namespace frontend\modules\line\controllers;

use yii\web\Controller;
use common\components\Line;

/**
 * Default controller for the `line` module
 */
class DefaultController extends Controller {

    public function actionIndex() {
        $msg = "ทดสอบ ส่ง ไลน์ จากการอบรม Yii2 โดย อ.อุเทน  " . date('Y-m-d H:i:s');
        //$this->sendLineNotify($msg);
        // return $this->render('index');
        //Line::sendLineNotify($msg);
       //echo Line::sendLineNotify($msg);
        $aa =Line::sendLineNotify($msg);
        \Yii::$app->session->setFlash('success', 'ข้อความถูกส่งไปยัง Applcation Line - '.'สถานะการส่ง : '.$aa);
        return \Yii::$app->response->redirect(['patient/index']);
    }

}
