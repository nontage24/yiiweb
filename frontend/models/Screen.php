<?php

namespace frontend\models;

use Yii;
use frontend\models\Patient;

/**
 * This is the model class for table "screen".
 *
 * @property integer $id
 * @property integer $patient_id
 * @property string $date_screen
 * @property integer $adl
 * @property string $adl_group
 * @property string $q2
 */
class Screen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'screen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'adl'], 'integer'],
            [['date_screen'], 'safe'],
            [['adl_group', 'q2'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'date_screen' => 'Date Screen',
            'adl' => 'Adl',
            'adl_group' => 'Adl Group',
            'q2' => 'Q2',
        ];
    }
    
    public function beforeSave($insert) { //update เข้าตารางpatient ด้วย เมื่อมีการประเมิน ก่อนการsave
        if (parent::beforeSave($insert)) {            
            $pt = Patient::findOne($this->patient_id);
            $pt->adl=  $this->adl;
            $pt->update();
            return true;
        } else {
            return false;
        }
    }
}
