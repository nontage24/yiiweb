<?php
$this->title = "MAP";
$this->registerCssFile('https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.css', ['async' => false, 'defer' => true]);
$this->registerCssFile('./lib-gis/leaflet-search.min.css',['async' => false, 'defer' => true]);
$this->registerCssFile('./lib-gis/leaflet.label.css',['async' => false, 'defer' => true]);
$this->registerJsFile('https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.js', ['position' => $this::POS_HEAD]);
$this->registerJsFile('./lib-gis/leaflet-search.min.js',['position' => $this::POS_HEAD]);
$this->registerJsFile('./lib-gis/leaflet.label.js',['position' => $this::POS_HEAD]);
?>


<h1>map/index</h1>

<?php
echo $json_patient;
?>
<div id="map" style="height: 600px">
    
</div>

<?php
$js = <<<JS
        
L.mapbox.accessToken = 'pk.eyJ1IjoidGVobm5uIiwiYSI6ImNpZzF4bHV4NDE0dTZ1M200YWxweHR0ZzcifQ.lpRRelYpT0ucv1NN08KUWQ';
var map = L.mapbox.map('map').setView([7.9085887,99.0645051], 9); 
        
        
var baseLayers = {
	"แผนที่ถนน": L.mapbox.tileLayer('mapbox.streets').addTo(map),        
        "แผนที่ดาวเทียม": L.mapbox.tileLayer('mapbox.satellite'),
        
    };
  
var group1 = L.layerGroup().addTo(map);
var pt_layer =L.geoJson($json_patient).addTo(group1);
var overlay ={
        "ผู้ป่วย":group1
        };
        
L.control.layers(baseLayers,overlay).addTo(map);
JS;
$this->registerJs($js);
?>