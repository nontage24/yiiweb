<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module' //ใช้ kartik view
        ],
        'map' => [//เรียกใช้Module ที่ใช้ Gii
            'class' => 'frontend\modules\map\Map',
        ],
        'line' => [
            'class' => 'frontend\modules\line\Line',
        ],
        
        'calendar' => [
            'class' => 'frontend\modules\calendar\calendar',
        ],
        
        
    ],
    'language' => 'th',
    'timeZone' => 'Asia/Bangkok',
    
];
