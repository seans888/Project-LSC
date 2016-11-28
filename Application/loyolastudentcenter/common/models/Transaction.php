<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transaction".
 *
 * @property integer $user_id
 * @property string $selected_school
 * @property integer $review_class_id
 * @property string $transaction_type
 * @property string $status
 * @property integer $schedule_id
 *
 * @property Payment[] $payments
 * @property Schedule $schedule
 * @property ReviewClass $reviewClass
 * @property User $user
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
            [['user_id', 'review_class_id', 'transaction_type', 'schedule_id'], 'required'],
            [['user_id', 'review_class_id', 'schedule_id'], 'integer'],
            [['transaction_type', 'status'], 'string'],
            [['selected_school'], 'string', 'max' => 100],
            [['schedule_id'], 'exist', 'skipOnError' => true, 'targetClass' => Schedule::className(), 'targetAttribute' => ['schedule_id' => 'id']],
            [['review_class_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReviewClass::className(), 'targetAttribute' => ['review_class_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User Name',
            'selected_school' => 'Selected School',
            'review_class_id' => 'Review Class Name',
            'transaction_type' => 'Transaction Type',
            'status' => 'Status',
            'schedule_id' => 'Schedule',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['transaction_user_id' => 'user_id', 'transaction_review_class_id' => 'review_class_id', 'transaction_schedule_id' => 'schedule_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedule()
    {
        return $this->hasOne(Schedule::className(), ['id' => 'schedule_id']);
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
}
