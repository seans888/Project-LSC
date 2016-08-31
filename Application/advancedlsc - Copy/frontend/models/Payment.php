<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property integer $id
 * @property string $date
 * @property string $reciept_number
 * @property integer $amount
 * @property integer $balance
 * @property integer $student_id
 *
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
            [['date', 'reciept_number', 'amount', 'student_id'], 'required'],
            [['date'], 'safe'],
            [['amount', 'balance', 'student_id'], 'integer'],
            [['reciept_number'], 'string', 'max' => 45],
            [['reciept_number'], 'unique'],
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
            'reciept_number' => 'Reciept Number',
            'amount' => 'Amount',
            'balance' => 'Balance',
            'student_id' => 'Student ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}
