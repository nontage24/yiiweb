<?php

use kartik\grid\GridView;
use frontend\models\CChangwat;
use yii\helpers\ArrayHelper;

echo GridView::widget([
'dataProvider' => $dataProvider,
 'filterModel' => $searchModel,
 'panel' => [//ทำให้มีปุ่ม Exel Export
'before' => ''
],
'columns'=>[
        'cid',
        'name',
        'lname',
        'q2',
        'd_screen',
        [
            'attribute'=>'province',
            'filter'=>  ArrayHelper::map(CChangwat::find()->all(),'changwatname','changwatname')
        ]
    ]
]);
