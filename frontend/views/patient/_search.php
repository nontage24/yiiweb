<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PatientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cid') ?>

    <?= $form->field($model, 'prename') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'lname') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'birth') ?>

    <?php // echo $form->field($model, 'age_y') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'district') ?>

    <?php // echo $form->field($model, 'subdistrict') ?>

    <?php // echo $form->field($model, 'village_no') ?>

    <?php // echo $form->field($model, 'village_name') ?>

    <?php // echo $form->field($model, 'house_no') ?>

    <?php // echo $form->field($model, 'lat') ?>

    <?php // echo $form->field($model, 'lon') ?>

    <?php // echo $form->field($model, 'typearea') ?>

    <?php // echo $form->field($model, 'nation') ?>

    <?php // echo $form->field($model, 'race') ?>

    <?php // echo $form->field($model, 'religion') ?>

    <?php // echo $form->field($model, 'mstatus') ?>

    <?php // echo $form->field($model, 'hospcode') ?>

    <?php // echo $form->field($model, 'pid') ?>

    <?php // echo $form->field($model, 'refer_from') ?>

    <?php // echo $form->field($model, 'disease') ?>

    <?php // echo $form->field($model, 'discharge') ?>

    <?php // echo $form->field($model, 'cm_id') ?>

    <?php // echo $form->field($model, 'cg_id') ?>

    <?php // echo $form->field($model, 'adl') ?>

    <?php // echo $form->field($model, 'tai') ?>

    <?php // echo $form->field($model, 'class_id') ?>

    <?php // echo $form->field($model, 'class_name') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'cousin') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'dupdate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
