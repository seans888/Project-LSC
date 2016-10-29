<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "class_list".
 *
 * @property integer $review_class_id
 * @property integer $student_id
 *
 * @property ReviewClass $reviewClass
 * @property Student $student
 */
class ClassList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['review_class_id', 'student_id'], 'required'],
            [['review_class_id', 'student_id'], 'integer'],
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
            'review_class_id' => 'Review Class Name',
            'student_id' => 'Student Name',
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
