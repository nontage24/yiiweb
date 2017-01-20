<?php

namespace frontend\controllers;
use frontend\models\Screen;
use common\components\AppController;// ใช้ Controller ที่มีความสามารถในการจำกัด
use yii\data\ArrayDataProvider;//เพื่อquery
use frontend\models\RptScreen; //เรียกใช้ Model ที่เราสร้างเองไม่ผ่าน Gii


class ScreenController extends AppController // ใช้ Controller ที่มีความสามารถในการจำกัด
{
    public $enableCsrfValidation = false;
    
    public function actionIndex($id)
    {
        $this->permitRole([1,2,3]); //ระบุการเข้าถึง routing
        if(\Yii::$app->request->isPost){
            $adl= \Yii::$app->request->post('adl');
            $q2= \Yii::$app->request->post('q2');
            $model =new Screen();
            $model -> patient_id= $id;
            $model -> date_screen = date('Y-m-d');
            $model -> adl =$adl;
            $model -> q2 = $q2;
            
            if($model->save()){
             \Yii::$app->session->setFlash('success','บันทึกสำเร็จ');
             return $this->redirect(['patient/index']);   
            }
        }
        return $this->render('index',[
            'id'=>$id
        ]);
    }
    public function actionEvent($id){
        return $this->render('event',[
            'id'=>$id
        ]);
    }
    
    public function actionReport() {
        //คิวรี่
        $sql ="select * from screen";
        $raw = \Yii::$app->db->createCommand($sql)->queryAll();
        
        if (!empty($raw[0])) {
            $cols = array_keys($raw[0]);
        }
        //หุ้มข้อมูลดิบก่อนส่งให้กริดวิว
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$raw,
            'sort' => !empty($cols) ? ['attributes' => $cols] : FALSE,
        ]);
        //โยนข้อมูลให้วิว
        return $this->render('report',[
            'dataProvider'=>$dataProvider
        ]);
    }
    
    public function actionReport2() {
        $searchModel = new RptScreen();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);
        return $this->render('report2', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

}
