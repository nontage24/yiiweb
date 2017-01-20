<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "file_specialpp".
 *
 * @property string $HOSPCODE
 * @property string $PID
 * @property string $SEQ
 * @property string $DATE_SERV
 * @property string $SERVPLACE
 * @property string $PPSPECIAL
 * @property string $PPSPLACE
 * @property string $PROVIDER
 * @property string $D_UPDATE
 */
class FileSpecialpp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'file_specialpp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HOSPCODE', 'PID', 'DATE_SERV', 'SERVPLACE', 'PPSPECIAL', 'D_UPDATE'], 'required'],
            [['DATE_SERV', 'D_UPDATE'], 'safe'],
            [['HOSPCODE', 'PPSPLACE'], 'string', 'max' => 5],
            [['PID', 'PROVIDER'], 'string', 'max' => 15],
            [['SEQ'], 'string', 'max' => 16],
            [['SERVPLACE'], 'string', 'max' => 1],
            [['PPSPECIAL'], 'string', 'max' => 6],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HOSPCODE' => 'Hospcode',
            'PID' => 'Pid',
            'SEQ' => 'Seq',
            'DATE_SERV' => 'Date  Serv',
            'SERVPLACE' => 'Servplace',
            'PPSPECIAL' => 'Ppspecial',
            'PPSPLACE' => 'Ppsplace',
            'PROVIDER' => 'Provider',
            'D_UPDATE' => 'D  Update',
        ];
    }
}
