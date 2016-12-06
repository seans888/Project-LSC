<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property integer $id
 * @property integer $review_class_id
 * @property string $batch
 * @property integer $duration_of_hours
 * @property string $start_date
 * @property string $end_date
 * @property string $start_time
 * @property string $end_time
 * @property string $days
 * @property string $location
 * @property string $room
 *
 * @property ReviewClass $reviewClass
 * @property Transaction[] $transactions
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['review_class_id', 'batch', 'duration_of_hours', 'location', 'room'], 'required'],
            [['review_class_id', 'duration_of_hours'], 'integer'],
            [['start_date', 'end_date', 'start_time', 'end_time'], 'safe'],
            [['batch'], 'string', 'max' => 100],
            [['days'], 'string', 'max' => 250],
            [['location', 'room'], 'string', 'max' => 150],
            [['review_class_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReviewClass::className(), 'targetAttribute' => ['review_class_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'review_class_id' => 'Review Class Name',
            'batch' => 'Batch',
            'duration_of_hours' => 'Duration Of Hours',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'days' => 'Days',
            'location' => 'Location',
            'room' => 'Room',
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
    public function getTransactions()
    {
        return $this->hasMany(Transaction::className(), ['schedule_id' => 'id']);
    }
}
