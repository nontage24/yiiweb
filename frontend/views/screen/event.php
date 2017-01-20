<?php

/*
  $events =[];

  $evt1 = new \yii2fullcalendar\models\Event();
  $evt1->id = 1;
  $evt1->title = 'dddd';
  $evt1->start = '2017-01-01 08:00';
  $evt1->end = '2017-01-01 12:00';
  $events[] = $evt1;

  $evt2 = new \yii2fullcalendar\models\Event();
  $evt2->id = 1;
  $evt2->title = 'nnnn';
  $evt2->start = '2017-01-02 09:00';
  $events[] = $evt2;
 */
$sql = "Select id,date_screen,q2 from screen where patient_id=$id";
$raw = \Yii::$app->db->createCommand($sql)->queryAll();

foreach ($raw as $value) {
    $evt = new \yii2fullcalendar\models\Event();
    $evt->id = $value['id'];
    $evt->title = $value['q2'];
    $evt->start = $value['date_screen'];
    $events[] = $evt;
}


echo \yii2fullcalendar\yii2fullcalendar::widget(array(
    'events' => $events,
    'options' => [
        'lang' => 'th',
        //'locale'=>'en',
        'id' => 'calendar',
    ],
    'header' => [
        'center' => 'title',
        'right' => 'month,agendaWeek,listWeek,listDay',
        'left' => 'prev,next today'
    ],
    'clientOptions' => [
        'firstDay' => '0',
        //'height' => new JsExpression('function(e){return $(window).height() - 100;}'),
        'defaultView' => 'month',
        //'eventClick' => new JsExpression($event_click),
        'timeFormat' => 'H:mm',
        'eventLimit' => true,
        'dayNamesShort' => ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
        'slotLabelFormat' => 'H:mm',
        'minTime' => '06:00',
    //'maxTime'=>'06:00'
    ]
));
