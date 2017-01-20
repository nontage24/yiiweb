<?php
namespace frontend\modules\map\controllers;

use yii\web\Controller;


class MapController extends \yii\web\Controller {

    public function actionIndex() {
        $sql = "select concat(name,' ',lname) as name ,lat,lon from patient";
        $raw = \yii::$app->db->createCommand($sql)->queryAll();
        $json_patient = []; //เปิดตัวแปร json
        foreach ($raw as $value) {
            $json_patient[] = [
                'type' => 'Feature',
                'properties' => [
                    'NAME' => $value['name'],
                    'SEARCH_TEXT' => $value['name'],
                ],
                'geometry' => [
                    'type' => 'point',
                    'coordinates' => [$value['lon'] * 1, $value['lat'] * 1], // *1 เพื่อเป็นตัวเลข
                ]
            ];
        };


        $json_patient = json_encode($json_patient); //encode เป็น json


        return $this->render('index', [
                    'json_patient' => $json_patient
        ]);
    }

}
