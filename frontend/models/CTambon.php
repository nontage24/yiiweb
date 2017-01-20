<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "c_tambon".
 *
 * @property string $tamboncode
 * @property string $tambonname
 * @property string $tamboncodefull
 * @property string $ampurcode
 * @property string $changwatcode
 * @property string $flag_status
 * @property string $amp_name
 * @property string $prov_name
 */
class CTambon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_tambon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tamboncode', 'tamboncodefull', 'ampurcode', 'changwatcode'], 'required'],
            [['tamboncode', 'changwatcode'], 'string', 'max' => 2],
            [['tambonname', 'amp_name', 'prov_name'], 'string', 'max' => 255],
            [['tamboncodefull'], 'string', 'max' => 6],
            [['ampurcode'], 'string', 'max' => 4],
            [['flag_status'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tamboncode' => 'Tamboncode',
            'tambonname' => 'Tambonname',
            'tamboncodefull' => 'Tamboncodefull',
            'ampurcode' => 'Ampurcode',
            'changwatcode' => 'Changwatcode',
            'flag_status' => 'Flag Status',
            'amp_name' => 'Amp Name',
            'prov_name' => 'Prov Name',
        ];
    }
}
