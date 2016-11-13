<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transaction".
 *
 * @property string $transaction_type
 * @property integer $user_id
 * @property integer $review_class_id
 * @property integer $schedule_id
 * @property string $payment_slip
 * @property string $status
 * @property string $date
 *
 * @property ReviewClass $reviewClass
 * @property User $user
 * @property Schedule $schedule
 */
class Transaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transaction';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['transaction_type', 'status'], 'string'],
            [['user_id', 'review_class_id', 'schedule_id'], 'required'],
            [['user_id', 'review_class_id', 'schedule_id'], 'integer'],
            [['date'], 'safe'],
            [['payment_slip'], 'string', 'max' => 250],
            [['review_class_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReviewClass::className(), 'targetAttribute' => ['review_class_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['schedule_id'], 'exist', 'skipOnError' => true, 'targetClass' => Schedule::className(), 'targetAttribute' => ['schedule_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'transaction_type' => 'Transaction Type',
            'user_id' => 'User ID',
            'review_class_id' => 'Review Class ID',
            'schedule_id' => 'Schedule ID',
            'payment_slip' => 'Payment Slip',
            'status' => 'Status',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviewClass()
    {
        return $this->hasOne(ReviewClass::className(), ['id' => 'review_class_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedule()
    {
        return $this->hasOne(Schedule::className(), ['id' => 'schedule_id']);
    }
}
