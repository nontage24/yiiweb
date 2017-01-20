<?php
$this->title = "ประเมินผู้สูงอายุ";

use frontend\models\Patient;
use kartik\tabs\TabsX;

$ptModel = Patient::findOne($id);
//echo $ptModel->name;
?>

<h4>
    ชื่อ : <?= $ptModel->name ?> <br> นามสกุล : <?= $ptModel->lname ?>

</h4>

<?php
echo TabsX::widget([
    'items' =>[
        [
            'label'=>'แบบประเมิน ADL',
            'content'=>$this->render('adl',['id'=>$id])
        ],
        [
            'label'=>'ประเมิน2Q',
            'content'=>$this->render('q2',['id'=>$id])
        ]
    ]
]);

?>
