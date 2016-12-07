<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property integer $id
 * @property string $payment_slip
 * @property string $date
 * @property integer $transaction_id
 *
 * @property Transaction $transaction
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['transaction_id'], 'required'],
            [['transaction_id'], 'integer'],
            [['payment_slip'], 'file'],
            [['transaction_id'], 'exist', 'skipOnError' => true, 'targetClass' => Transaction::className(), 'targetAttribute' => ['transaction_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'payment_slip' => 'Attach your Payment Slip',
            'date' => 'Date',
            'transaction_id' => 'Transaction ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaction()
    {
        return $this->hasOne(Transaction::className(), ['id' => 'transaction_id']);
    }
}
