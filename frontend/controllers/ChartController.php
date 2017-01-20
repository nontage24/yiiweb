<?php

namespace frontend\controllers;

class ChartController extends \yii\web\Controller {

    public function actionIndex() {
        $mon = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $mon = json_encode($mon);
        $data_2560 = [];
        for ($i = 1; $i < 12; $i++) {
            $data_2560[] = $i;
        }

        $data_2560 = json_encode($data_2560);
        $data_2559 = [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5];
        $data_2559 = json_encode($data_2559);
        $data_2558 = [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0];
        $data_2558 = json_encode($data_2558);

        return $this->render('index', [
                    'mon' => $mon,
                    'data_2560' => $data_2560,
                    'data_2559' => $data_2559,
                    'data_2558' => $data_2558
        ]);
    }

    public function actionPie() {
        $data = [];
        $data[] = [
            'name' => 'รพ.ก',
            'y' => 56
        ];
        $data[] = [
            'name' => 'รพ.ข',
            'y' => 20
        ];
        $data = json_encode($data);
        return $this->render('pie',[
            'data'=>$data
        ]);
    }

}
