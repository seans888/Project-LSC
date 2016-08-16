<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ClassList;

/**
 * ClassListSearch represents the model behind the search form about `backend\models\ClassList`.
 */
class ClassListSearch extends ClassList
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id', 'review_Class_id', 'employee_id'], 'integer'],
            [['atendance', 'missed_class', 'date'], 'safe'],
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
        $query = ClassList::find();

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
            'student_id' => $this->student_id,
            'review_Class_id' => $this->review_Class_id,
            'employee_id' => $this->employee_id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'atendance', $this->atendance])
            ->andFilterWhere(['like', 'missed_class', $this->missed_class]);

        return $dataProvider;
    }
}
