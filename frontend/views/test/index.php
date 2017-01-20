<?php 
use yii\helpers\Html;

?>

<h3>ทดสอบlayout</h3>

<?php
echo date('Y-m-d H:i:s');
?>

<hr>

<?php 
echo Html::a('Link to test1', ['test/test1']);
echo "<br>";
echo Html::a('Link to test2', ['test/test2','param'=>'มาจาก index นี่คือparam1','param2'=>'นี่คือ param2']);
?>
<br>
<a href="index.php?r=test/test1">Link to test1 with html old code</a>