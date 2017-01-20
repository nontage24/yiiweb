<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "c_ampur".
 *
 * @property string $ampurcode
 * @property string $ampurname
 * @property string $ampurcodefull
 * @property string $changwatcode
 * @property string $flag_status
 * @property string $prov_name
 */
class CAmpur extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_ampur';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ampurcode', 'ampurcodefull', 'changwatcode'], 'required'],
            [['ampurcode', 'changwatcode'], 'string', 'max' => 2],
            [['ampurname', 'prov_name'], 'string', 'max' => 255],
            [['ampurcodefull'], 'string', 'max' => 4],
            [['flag_status'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ampurcode' => 'Ampurcode',
            'ampurname' => 'Ampurname',
            'ampurcodefull' => 'Ampurcodefull',
            'changwatcode' => 'Changwatcode',
            'flag_status' => 'Flag Status',
            'prov_name' => 'Prov Name',
        ];
    }
}
