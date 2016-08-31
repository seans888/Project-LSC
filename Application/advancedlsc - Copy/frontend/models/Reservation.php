<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "reservation".
 *
 * @property integer $id
 * @property string $date
 * @property string $schedule
 * @property integer $student_id
 * @property integer $employee_id
 *
 * @property Employee $employee
 * @property Student $student
 */
class Reservation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reservation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'schedule', 'student_id', 'employee_id'], 'required'],
            [['date'], 'safe'],
            [['student_id', 'employee_id'], 'integer'],
            [['schedule'], 'string', 'max' => 100],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'schedule' => 'Schedule',
            'student_id' => 'Student ID',
            'employee_id' => 'Employee ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}
