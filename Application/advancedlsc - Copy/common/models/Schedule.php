<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property integer $id
 * @property integer $review_class_id
 * @property integer $duration_of_hours
 * @property string $start_time
 * @property string $end_time
 * @property string $location
 * @property string $room
 *
 * @property ReviewClass $reviewClass
 * @property Student[] $students
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
            [['review_class_id'], 'required'],
            [['review_class_id', 'duration_of_hours'], 'integer'],
            [['start_time', 'end_time'], 'safe'],
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
            'review_class_id' => 'Review Class ID',
            'duration_of_hours' => 'Duration Of Hours',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
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
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['schedule_id' => 'id']);
    }
}
