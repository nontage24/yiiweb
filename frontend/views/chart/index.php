<?php

use miloschuman\highcharts\HighchartsAsset;

HighchartsAsset::register($this)->withScripts(['modules/exporting', 'modules/drilldown']);
?>
<div id="container">

</div>

<?php
/*
$mon = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
$mon = json_encode($mon);
$data_2560 = [];
    for($i=1;$i<12;$i++){
        $data_2560[]=$i;
    }

$data_2560 = json_encode($data_2560);
$data_2559 = [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5];
$data_2559 = json_encode($data_2559);
$data_2558 = [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0];
$data_2558 = json_encode($data_2558);
*/
$js = <<<JS
        $(function () {
    Highcharts.chart('container', {
        title: {
            text: 'กราฟ ทดสอบ',
            x: -20 //center
        },
        subtitle: {
            text: 'KLongthom Hospital', //ลบได้
            x: -20
        },
        xAxis: {
            //categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
               // 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            categories:$mon
        },
        yAxis: {
            title: {
                text: 'หน่วย'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [
        {
            name: '2560',
            data: $data_2560
        }, 
        {
            name: '2559',
            //data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
            data: $data_2559
        }, 
        {
            name: '2558',
            //data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
            data: $data_2558
        }]
    });
});
        
JS;
$this->registerJs($js);
