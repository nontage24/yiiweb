<?php

use miloschuman\highcharts\HighchartsAsset;

HighchartsAsset::register($this)->withScripts(['modules/exporting', 'modules/drilldown']);
?>
<div id="container">

</div>

<?php
/*
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
*/
$js = <<<JS
        $(function () {
    Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'ชุดข้อมูล'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data : $data
            /*data: [{
                name: 'Microsoft Internet Explorer',
                y: 56.33
            }, {
                name: 'Chrome',
                y: 24.03,
                sliced: true,
                selected: true
            }, {
                name: 'Firefox',
                y: 10.38
            }, {
                name: 'Safari',
                y: 4.77
            }, {
                name: 'Opera',
                y: 0.91
            }, {
                name: 'Proprietary or Undetectable',
                y: 0.2
            }]*/
        }]
    });
});    
JS;
$this->registerJs($js);
