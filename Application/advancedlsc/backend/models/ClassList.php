<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "class_list".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $review_Class_id
 * @property integer $employee_id
 *
 * @property Student $student
 * @property ReviewClass $reviewClass
 * @property Employee $employee
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
            [['student_id', 'review_Class_id', 'employee_id'], 'required'],
            [['student_id', 'review_Class_id', 'employee_id'], 'integer'],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'id']],
            [['review_Class_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReviewClass::className(), 'targetAttribute' => ['review_Class_id' => 'id']],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student ID',
            'review_Class_id' => 'Review  Class ID',
            'employee_id' => 'Employee ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviewClass()
    {
        return $this->hasOne(ReviewClass::className(), ['id' => 'review_Class_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }
}
