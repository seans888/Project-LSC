<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Transaction;

/**
 * TransactionSearch represents the model behind the search form about `common\models\Transaction`.
 */
class TransactionSearch extends Transaction
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'review_class_id', 'schedule_id'], 'integer'],
            [['transaction_type', 'selected_school', 'status', 'date'], 'safe'],
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
        $query = Transaction::find();

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
            'user_id' => $this->user_id,
            'review_class_id' => $this->review_class_id,
            'schedule_id' => $this->schedule_id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'transaction_type', $this->transaction_type])
            ->andFilterWhere(['like', 'selected_school', $this->selected_school])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
