<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "review_class".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $schedule
 * @property string $start_date
 * @property string $end_date
 *
 * @property ClassList[] $classLists
 */
class ReviewClass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'review_class';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['start_date', 'end_date'], 'safe'],
            [['name', 'schedule'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'schedule' => 'Schedule',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassLists()
    {
        return $this->hasMany(ClassList::className(), ['review_Class_id' => 'id']);
    }
}
