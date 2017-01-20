<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "c_prename".
 *
 * @property string $id_prename
 * @property string $prename
 * @property string $detail
 */
class CPrename extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_prename';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prename', 'prename'], 'required'],
            [['id_prename'], 'string', 'max' => 3],
            [['prename', 'detail'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_prename' => 'Id Prename',
            'prename' => 'Prename',
            'detail' => 'Detail',
        ];
    }
}
