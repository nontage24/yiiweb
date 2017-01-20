<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
       return $this->render('index');
        //return $this->render('test1');
    }
    public function  actionTest1(){
        return $this->render('test1');
    }
    
    public function  actionTest2($param,$param2){
        return $this->render('test2',[
                    'param'=>$param,
                    'param2'=>$param2
                ]);
    }

}
