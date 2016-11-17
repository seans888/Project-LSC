<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property integer $id
 * @property integer $transaction_user_id
 * @property integer $transaction_review_class_id
 * @property integer $transaction_schedule_id
 * @property string $payment_slip
 * @property string $date
 *
 * @property Transaction $transactionUser
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
            [['transaction_user_id', 'transaction_review_class_id', 'transaction_schedule_id', 'date'], 'required'],
            [['transaction_user_id', 'transaction_review_class_id', 'transaction_schedule_id'], 'integer'],
            [['date'], 'safe'],
            [['payment_slip'], 'string', 'max' => 250],
            [['transaction_user_id', 'transaction_review_class_id', 'transaction_schedule_id'], 'exist', 'skipOnError' => true, 'targetClass' => Transaction::className(), 'targetAttribute' => ['transaction_user_id' => 'user_id', 'transaction_review_class_id' => 'review_class_id', 'transaction_schedule_id' => 'schedule_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transaction_user_id' => 'Transaction User ID',
            'transaction_review_class_id' => 'Transaction Review Class ID',
            'transaction_schedule_id' => 'Transaction Schedule ID',
            'payment_slip' => 'Payment Slip',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransactionUser()
    {
        return $this->hasOne(Transaction::className(), ['user_id' => 'transaction_user_id', 'review_class_id' => 'transaction_review_class_id', 'schedule_id' => 'transaction_schedule_id']);
    }
}
