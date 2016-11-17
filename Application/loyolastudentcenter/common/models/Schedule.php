<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property integer $id
 * @property integer $duration_of_hours
 * @property string $start_time
 * @property string $end_time
 * @property string $start_date
 * @property string $end_date
 * @property string $days
 * @property string $location
 * @property string $room
 *
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
            [['duration_of_hours', 'start_time', 'end_time', 'start_date', 'end_date', 'days', 'location', 'room'], 'required'],
            [['duration_of_hours'], 'integer'],
            [['start_time', 'end_time', 'start_date', 'end_date'], 'safe'],
            [['days'], 'string', 'max' => 250],
            [['location', 'room'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'duration_of_hours' => 'Duration Of Hours',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'days' => 'Days',
            'location' => 'Location',
            'room' => 'Room',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransactions()
    {
        return $this->hasMany(Transaction::className(), ['schedule_id' => 'id']);
    }
}
