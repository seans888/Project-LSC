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
            [['payment_slip'], 'file'],

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
            'transaction_user_id' => 'User Name',
            'transaction_review_class_id' => 'Transaction Review Class Name',
            'transaction_schedule_id' => 'Schedule',
             'payment_slip'=>'Attach your Payment Slip',
            'date' => 'Date Submitted',
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
