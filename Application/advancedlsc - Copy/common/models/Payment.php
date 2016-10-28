<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property integer $student_id
 * @property integer $review_class_id
 * @property string $deposit_slip
 * @property string $date
 *
 * @property ReviewClass $reviewClass
 * @property Student $student
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
            [['student_id', 'review_class_id'], 'required'],
            [['student_id', 'review_class_id'], 'integer'],
            [['date'], 'safe'],
            [['deposit_slip'], 'string', 'max' => 250],
            [['review_class_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReviewClass::className(), 'targetAttribute' => ['review_class_id' => 'id']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'review_class_id' => 'Review Class ID',
            'deposit_slip' => 'Deposit Slip',
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
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}
