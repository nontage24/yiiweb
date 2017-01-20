<?php
///การสร้างcomponent
namespace common\components;
use yii\base\Component;

class Line extends Component{
    
    public static function sendLineNotify($message = NULL) { //
        $LINE_API = 'https://notify-api.line.me/api/notify';
        $LINE_TOKEN = 'sVO6mP3I29MtG4dAMP3TBAOro1IIWdnHvPKIpKAnryT';
        $queryData = ['message' => $message];
        $queryData = http_build_query($queryData, '', '&');
        $headerOptions = [
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                . "Authorization: Bearer " . $LINE_TOKEN . "\r\n"
                . "Content-Length: " . strlen($queryData) . "\r\n",
                'content' => $queryData
            ]
        ];
        $context = stream_context_create($headerOptions);
        $result = file_get_contents($LINE_API, FALSE, $context);
        //$res = json_decode($result);
        return $result;
    }
}
