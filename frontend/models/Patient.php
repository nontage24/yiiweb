<?php

namespace frontend\models;

use Yii;
use frontend\models\CChangwat;

/**
 * This is the model class for table "patient".
 *
 * @property integer $id
 * @property string $cid
 * @property string $prename
 * @property string $name
 * @property string $lname
 * @property string $sex
 * @property string $birth
 * @property integer $age_y
 * @property string $province
 * @property string $district
 * @property string $subdistrict
 * @property string $village_no
 * @property string $village_name
 * @property string $house_no
 * @property string $lat
 * @property string $lon
 * @property integer $typearea
 * @property string $nation
 * @property string $race
 * @property string $religion
 * @property string $mstatus
 * @property string $hospcode
 * @property string $pid
 * @property string $refer_from
 * @property string $disease
 * @property string $discharge
 * @property integer $cm_id
 * @property integer $cg_id
 * @property integer $adl
 * @property string $tai
 * @property integer $class_id
 * @property string $class_name
 * @property string $color
 * @property string $cousin
 * @property string $tel
 * @property string $dupdate
 */
class Patient extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['birth', 'dupdate'], 'safe'],
            [['age_y', 'typearea', 'cm_id', 'cg_id', 'adl', 'class_id'], 'integer'],
            [['cousin'], 'string'],
            [['cid'], 'string', 'max' => 13, 'min' => 13, 'message' => ''],
            [['prename', 'name', 'lname', 'province', 'district', 'subdistrict', 'village_no', 'village_name', 'house_no', 'lat', 'lon', 'nation', 'race', 'religion', 'mstatus', 'pid', 'refer_from', 'disease', 'discharge', 'tai', 'class_name', 'color', 'tel'], 'string', 'max' => 255],
            [['sex'], 'string', 'max' => 4],
            [['hospcode'], 'string', 'max' => 5],
            [['cid', 'name', 'lname', 'birth'], 'required', 'message' => ''],
            [['cid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'cid' => 'เลข13หลัก',
            'prename' => 'คำนำหน้า',
            'name' => 'ชื่อ',
            'lname' => 'สกุล',
            'sex' => 'เพศ',
            'birth' => 'เกิด',
            'age_y' => 'Age Y',
            'province' => 'จังหวัด',
            'district' => 'อำเภอ',
            'subdistrict' => 'ตำบล',
            'village_no' => 'หมู่ที่',
            'village_name' => 'หมู่บ้าน',
            'house_no' => 'บ้านเลขที่',
            'lat' => 'Latitude',
            'lon' => 'Lontitude',
            'typearea' => 'ประเภทอยู่อาศัย',
            'nation' => 'สัญชาติ',
            'race' => 'เชื้อชาติ',
            'religion' => 'ศาสนา',
            'mstatus' => 'สถานะ',
            'hospcode' => 'พืนที่ของหน่วยบริการ',
            'pid' => 'Pid',
            'refer_from' => 'Refer From',
            'disease' => 'Disease',
            'discharge' => 'การจำหน่าย',
            'cm_id' => 'Cm ID',
            'cg_id' => 'Cg ID',
            'adl' => 'Adl',
            'tai' => 'Tai',
            'class_id' => 'จำแนกกลุ่ม',
            'class_name' => 'Class Name',
            'color' => 'Color',
            'cousin' => 'Cousin',
            'tel' => 'Tel',
            'dupdate' => 'Dupdate',
        ];
    }
//join จังหวัด
    public function getCchangwat() {
        return $this->hasOne(CChangwat::className(), ['changwatcode' => 'province']);
    }

}
