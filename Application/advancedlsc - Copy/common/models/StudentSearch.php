<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Student;

/**
 * StudentSearch represents the model behind the search form about `common\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'age', 'review_class_id', 'schedule_id', 'user_id'], 'integer'],
            [['lastname', 'firstname', 'middlename', 'gender', 'contact_number', 'email_address', 'home_address', 'school', 'guardian_name', 'relation', 'guardian_contact_number', 'guardian_email_address', 'selected_school', 'learned_lsc', 'transaction_type', 'date_of_registration', 'status'], 'safe'],
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
            'age' => $this->age,
            'review_class_id' => $this->review_class_id,
            'schedule_id' => $this->schedule_id,
            'date_of_registration' => $this->date_of_registration,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'middlename', $this->middlename])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'contact_number', $this->contact_number])
            ->andFilterWhere(['like', 'email_address', $this->email_address])
            ->andFilterWhere(['like', 'home_address', $this->home_address])
            ->andFilterWhere(['like', 'school', $this->school])
            ->andFilterWhere(['like', 'guardian_name', $this->guardian_name])
            ->andFilterWhere(['like', 'relation', $this->relation])
            ->andFilterWhere(['like', 'guardian_contact_number', $this->guardian_contact_number])
            ->andFilterWhere(['like', 'guardian_email_address', $this->guardian_email_address])
            ->andFilterWhere(['like', 'selected_school', $this->selected_school])
            ->andFilterWhere(['like', 'learned_lsc', $this->learned_lsc])
            ->andFilterWhere(['like', 'transaction_type', $this->transaction_type])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
