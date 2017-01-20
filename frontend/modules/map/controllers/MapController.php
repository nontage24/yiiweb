<?php
namespace frontend\modules\map\controllers;

use yii\web\Controller;


class MapController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $sql = "select concat(name,' ',lname) name,lat,lon from patient";
        $raw = \Yii::$app->db->createCommand($sql)->queryAll();
        $json_patint =[];
        
        foreach ($raw as $value) {
            $json_patint[]=[
                'type'=>'Feature',
                'properties'=>[
                    'NAME'=>$value['name'],                    
                    'SEARCH_TEXT' =>$value['name']
                ],
                'geometry'=>[
                    'type' => 'Point',
                    'coordinates' => [$value['lon']*1, $value['lat']*1],
                ]
                
            ];
        }
        
        $json_patint = json_encode($json_patint); 
        
        return $this->render('index',[
            'json_patient'=>$json_patint
        ]);
    }
}