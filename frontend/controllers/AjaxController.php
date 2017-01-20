<?php
namespace frontend\controllers;
use frontend\models\CAmpur;
use frontend\models\CTambon;
use yii\helpers\ArrayHelper;
class AjaxController extends \yii\web\Controller
{
    public function actionGetamp()
    {
        //$q=$_POST['q'];
        $q = \Yii::$app->request->post('q');
        $array = CAmpur::find()->where(['changwatcode'=>$q])->all();
        $items = ArrayHelper::map($array, 'ampurcodefull', 'ampurname');
        return json_encode($items);
    }
    
      public function actionGettmb()
    {
        $q = \Yii::$app->request->post('q');
        $array = CTambon::find()->where(['ampurcode'=>$q])->all();
        $items = ArrayHelper::map($array, 'tamboncodefull', 'tambonname');
        return json_encode($items);
    }
}