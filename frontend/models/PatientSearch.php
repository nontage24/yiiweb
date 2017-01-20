<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Patient;

/**
 * PatientSearch represents the model behind the search form about `frontend\models\Patient`.
 */
class PatientSearch extends Patient
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'age_y', 'typearea', 'cm_id', 'cg_id', 'adl', 'class_id'], 'integer'],
            [['cid', 'prename', 'name', 'lname', 'sex', 'birth', 'province', 'district', 'subdistrict', 'village_no', 'village_name', 'house_no', 'lat', 'lon', 'nation', 'race', 'religion', 'mstatus', 'hospcode', 'pid', 'refer_from', 'disease', 'discharge', 'tai', 'class_name', 'color', 'cousin', 'tel', 'dupdate'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Patient::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'birth' => $this->birth,
            'age_y' => $this->age_y,
            'typearea' => $this->typearea,
            'cm_id' => $this->cm_id,
            'cg_id' => $this->cg_id,
            'adl' => $this->adl,
            'class_id' => $this->class_id,
            'dupdate' => $this->dupdate,
        ]);

        $query->andFilterWhere(['like', 'cid', $this->cid])
            ->andFilterWhere(['like', 'prename', $this->prename])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'district', $this->district])
            ->andFilterWhere(['like', 'subdistrict', $this->subdistrict])
            ->andFilterWhere(['like', 'village_no', $this->village_no])
            ->andFilterWhere(['like', 'village_name', $this->village_name])
            ->andFilterWhere(['like', 'house_no', $this->house_no])
            ->andFilterWhere(['like', 'lat', $this->lat])
            ->andFilterWhere(['like', 'lon', $this->lon])
            ->andFilterWhere(['like', 'nation', $this->nation])
            ->andFilterWhere(['like', 'race', $this->race])
            ->andFilterWhere(['like', 'religion', $this->religion])
            ->andFilterWhere(['like', 'mstatus', $this->mstatus])
            ->andFilterWhere(['like', 'hospcode', $this->hospcode])
            ->andFilterWhere(['like', 'pid', $this->pid])
            ->andFilterWhere(['like', 'refer_from', $this->refer_from])
            ->andFilterWhere(['like', 'disease', $this->disease])
            ->andFilterWhere(['like', 'discharge', $this->discharge])
            ->andFilterWhere(['like', 'tai', $this->tai])
            ->andFilterWhere(['like', 'class_name', $this->class_name])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'cousin', $this->cousin])
            ->andFilterWhere(['like', 'tel', $this->tel]);

        return $dataProvider;
    }
}
