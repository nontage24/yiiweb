<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        
        <?= Html::a('ประเมิน', ['screen/index', 'id' => $model->id], ['class' => 'btn btn-info']) ?> 
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cid',
            'prename',
            'name',
            'lname',
            'sex',
            'birth',
            'age_y',
            'province',
            'district',
            'subdistrict',
            'village_no',
            'village_name',
            'house_no',
            'lat',
            'lon',
            'typearea',
            'nation',
            'race',
            'religion',
            'mstatus',
            'hospcode',
            'pid',
            'refer_from',
            'disease',
            'discharge',
            'cm_id',
            'cg_id',
            'adl',
            'tai',
            'class_id',
            'class_name',
            'color',
            'cousin:ntext',
            'tel',
            'dupdate',
        ],
    ]) ?>

</div>
