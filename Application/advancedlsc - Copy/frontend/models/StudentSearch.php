<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Student;

/**
 * StudentSearch represents the model behind the search form about `frontend\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'number_of_hours', 'age'], 'integer'],
            [['type', 'review_class', 'lastname', 'firstname', 'middlename', 'nickname', 'gender', 'email_address', 'contact_number', 'address', 'school', 'school_address', 'guardian_name', 'relation', 'guardian_contact_number', 'guardian_email_address', 'date_of_registration', 'status'], 'safe'],
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
        $query = Student::find();

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
            'number_of_hours' => $this->number_of_hours,
            'age' => $this->age,
            'date_of_registration' => $this->date_of_registration,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'review_class', $this->review_class])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'middlename', $this->middlename])
            ->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'email_address', $this->email_address])
            ->andFilterWhere(['like', 'contact_number', $this->contact_number])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'school', $this->school])
            ->andFilterWhere(['like', 'school_address', $this->school_address])
            ->andFilterWhere(['like', 'guardian_name', $this->guardian_name])
            ->andFilterWhere(['like', 'relation', $this->relation])
            ->andFilterWhere(['like', 'guardian_contact_number', $this->guardian_contact_number])
            ->andFilterWhere(['like', 'guardian_email_address', $this->guardian_email_address])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
