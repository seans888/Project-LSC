<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\User;

/**
 * UserSearch represents the model behind the search form about `common\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at', 'age'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'lastname', 'firstname', 'middlename', 'gender', 'contact_number', 'home_address', 'school', 'guardian_name', 'relation', 'guardian_contact_number', 'guardian_email_address', 'selected_school', 'learned_lsc'], 'safe'],
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
        $query = User::find();

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
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'age' => $this->age,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'middlename', $this->middlename])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'contact_number', $this->contact_number])
            ->andFilterWhere(['like', 'home_address', $this->home_address])
            ->andFilterWhere(['like', 'school', $this->school])
            ->andFilterWhere(['like', 'guardian_name', $this->guardian_name])
            ->andFilterWhere(['like', 'relation', $this->relation])
            ->andFilterWhere(['like', 'guardian_contact_number', $this->guardian_contact_number])
            ->andFilterWhere(['like', 'guardian_email_address', $this->guardian_email_address])
            ->andFilterWhere(['like', 'selected_school', $this->selected_school])
            ->andFilterWhere(['like', 'learned_lsc', $this->learned_lsc]);

        return $dataProvider;
    }
}
