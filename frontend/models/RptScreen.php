<?php

namespace frontend\models;

use yii\base\Model;
use yii2mod\query\ArrayQuery;
use yii\data\ArrayDataProvider;

class RptScreen extends Model { //Class สืบทอดจากคลาส Model

    public $cid, $name, $lname, $q2, $d_screen, $province; //Attribute Model

    public function rules() {
        return [
            [['cid', 'name', 'lname', 'q2', 'd_screen', 'province'], 'safe'] //ให้สอดคล้องด้านบน
        ];
    }

    public function search($params = null) { //parameter Search
        $sql = "SELECT t.cid,t.`name`,t.lname,s.q2,max(s.date_screen) 
            d_screen,c.changwatname province from patient t
LEFT JOIN screen s on t.id = s.patient_id
LEFT JOIN c_changwat c on c.changwatcode = t.province
GROUP BY t.cid "; //ใส่SQL
        $models = \Yii::$app->db->createCommand($sql)->queryAll(); //Return ค่า
        $query = new ArrayQuery(); //
        $query->from($models); //หุ้มข้อมูลArray
        if ($this->load($params) && $this->validate()) {
            $query->andFilterWhere(['like', 'cid', $this->cid]); //ใส่ฟิลเตอร์ โดย andFilterWhere
            $query->andFilterWhere(['like', 'name', $this->name]);
            $query->andFilterWhere(['like', 'lname', $this->lname]);
            $query->andFilterWhere(['like', 'q2', $this->q2]);
            $query->andFilterWhere(['like', 'd_screen', $this->d_screen]);
            $query->andFilterWhere(['like', 'province', $this->province]);
        }
        $all_models = $query->all();
        if (!empty($all_models[0])) {   //เงื่อนไข
            $cols = array_keys($all_models[0]); //ดึงคีย์ของข้อมูล เพื่อให้ sortได้
        }
        return new ArrayDataProvider([
            'allModels' => $all_models,
            //'totalItems'=>100,
            'sort' => !empty($cols) ? ['attributes' => $cols] : FALSE,
            'pagination' => [
                'pageSize' => 100 //หน้าละ 100
            ]
        ]);
    }

//search

    public function attributeLabels() {//เมนูภาษไทย
        return [
            'cid' => 'เลขบัตร',
            'name' => 'ชื่อ'
        ];
    }

}

//class 