<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//ทำ Auto Select
use yii\helpers\ArrayHelper;
use frontend\models\CPrename;
use kartik\select2\Select2;
use frontend\models\CChangwat;
use frontend\models\CAmpur;
use frontend\models\CTambon;
//ทำ Date Picker
use kartik\date\DatePicker;
use yii\helpers\Url;
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">
        <div class="col-md-2">
            <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2"> 
            <!--ทำ Auto Select-->
            <!-----------------------Prename Selector---------------------------------->
            <?php
            //$items = ['1' => 'นาย', '2' => 'นาง']; //ตัวเลือกแบบ static
            $mPrename = CPrename::find()->all(); //เหมือนกันกับการ select * from c_prename
            //$items = ArrayHelper::map($mPrename, 'id_prename' ,'prename');  //หรือ 
            $items = ArrayHelper::map($mPrename, 'prename', 'prename');
            ?>
            <!--?= $form->field($model, 'prename')->dropDownList($items, ['prompt' => '..กรุณเลือก..']) ?--> <!-- แบบ dropdown-->
            <?=
            $form->field($model, 'prename')->widget(Select2::className(), [
                'data' => $items,
                'options' => ['placeholder' => 'เลือก'],
                'pluginOptions' => [
                    'allowClear' => TRUE
                ],
            ])
            ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <!----------------------------Sex DropdownList--------------------------------->
        <div class="col-md-3">
            <?php
            $sexs = ['ชาย' => 'ชาย', 'หญิง' => 'หญิง'];
            ?>
            <?= $form->field($model, 'sex')->dropDownList($sexs, ['prompt' => '..เลือก..']) ?>
        </div>
        <!------------------------Birth DatePicker-------------------------------->
        <div class="col-md-3">
            <?=
            $form->field($model, 'birth')->widget(\kartik\widgets\DatePicker::className(), [
                'options' => ['placeholder' => '..เลือก..'],
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'pluginOptions' => [
                    'format' => 'dd-M-yyyy',
                    'todayHighlight' => true,
                    'autoclose' => true,],
                'language' => 'th'
            ])
            ?>
        </div>
        <!------------------------Province Selector--------------------------------->
        <div class="col-md-3">
            <?php
            $mChangwat = CChangwat::find()->all();
            $changwat = ArrayHelper::map($mChangwat, 'changwatcode', 'changwatname')
            ?>
            <!--?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?--> <!-- Old Code -->
            <?=
            $form->field($model, 'province')->widget(Select2::className(), [
                'data' => $changwat,
                'options' => ['placeholder' => 'เลือก'],
                'pluginOptions' => [
                    'allowClear' => TRUE
                ],
            ])
            ?>
        </div>
        <!--------------------------------------------------------------------->
        <div class="col-md-3">
            <?php
            $mDistrict = CAmpur::find()->where(['changwatcode' => $model->province])->all();
            $items = ArrayHelper::map($mDistrict, 'ampurcodefull', 'ampurname');
            ?>
            <!--?= $form->field($model, 'district')->textInput(['maxlength' => true]) ?-->
<?= $form->field($model, 'district')->dropDownList($items) ?>
        </div>

    </div>

    <div class="form-group">
        <div class="col-md-3">
            <?php
            $mSubDistrict = CTambon::find()->where(['ampurcode' => $model->district])->all();
            $items = ArrayHelper::map($mSubDistrict, 'tamboncodefull', 'tambonname');
            ?>
            <?= $form->field($model, 'subdistrict')->dropDownList($items); ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'village_no')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'village_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
<?= $form->field($model, 'house_no')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
<?= $form->field($model, 'lon')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="form-group">
        <!---------------------------typearea DropdownList------------------------------>
        <div class="col-md-4">
            <?php
            $typearea = ['1' => '1.มีชื่ออยู่ตามทะเบียนบ้านในเขตรับผิดชอบและอยู่จริง',
                '2' => '2.มีชื่ออยู่ตามทะเบีบนบ้านในเขตรับผิดชอบแต่ตัวไม่อยู่จริง',
                '3' => '3.มาอาศัยอยู่ในเขตรับผิดชอบ(ตามทะเบียนบ้านในเขตรับผิดชอบ)แต่ทะเบียนบ้านอยู่นอกเขตรับผิดชอบ',
                '4' => '4.ที่อาศัยอยู่นอกเขตรับผิดชอบและทะเบียนบ้านไม่อยู่ในเขตรับผิดชอบ เข้ามารับบริการหรือเคยอยู่ในเขตรับผิดชอบ',
                '5' => '5.มาอาศัยในเขตรับผิดชอบแต่ไม่ได้อยู่ตามทะเบียนบ้านในเขตรับผิดชอบ เช่น คนเร่ร่อน ไม่มีที่พักอาศัย เป็นต้น',
            ];
            ?>
<?= $form->field($model, 'typearea')->dropDownList($typearea, ['prompt' => '..เลือก..']) ?>
        </div>
        <!--------------------------------------------------------------------->
        <div class="col-md-2">
            <?= $form->field($model, 'nation')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'race')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
<?= $form->field($model, 'mstatus')->textInput(['maxlength' => true]) ?>
        </div>
    </div>



    <div class="form-group">
        <div class="col-md-6">
<?= Html::submitButton($model->isNewRecord ? 'เพิ่ม' : 'บันทึก', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>

</div>




<!--------------------------------------------------------------------->

<?php
$route_get_amp = Url::toRoute(['ajax/getamp']);
$route_get_tmb = Url::toRoute('ajax/gettmb');
$js = <<<JS
 
//ดึงอำเภอ
$('#patient-province').change(function(){
   $('#patient-district').empty()
   $('#patient-district').append($('<option>').text('เลือก').attr('value',''));
    var q=$(this).val();
    $.ajax({
        url:'$route_get_amp',
        type:'POST',
        data: 'q=' + q,
        dataType: 'json',
        success: function( json ) {
            $.each(json, function(code, value) {
                $('#patient-district').append($('<option>').text(value).attr('value', code));
            });
        }
    });   
  
});
//ดึงตำบล
$('#patient-district').change(function(){
   $('#patient-subdistrict').empty()
   $('#patient-subdistrict').append($('<option>').text('เลือก').attr('value',''));
   var q=$(this).val();
   $.ajax({
        url:'$route_get_tmb',
        type:'POST',
        data: 'q=' + q,
        dataType: 'json',
        success: function( json ) {
            $.each(json, function(code, value) {
                $('#patient-subdistrict').append($('<option>').text(value).attr('value', code));
            });
        }
    });   
    
});  
 
JS;
$this->registerJs($js);
?>