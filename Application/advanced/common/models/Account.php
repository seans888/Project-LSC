<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property integer $id
 * @property string $email_address
 * @property string $user_name
 * @property string $password
 *
 * @property Employee $employee
 * @property Student $student
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_address', 'user_name', 'password'], 'required'],
            [['email_address', 'user_name', 'password'], 'string', 'max' => 45],
            [['user_name'], 'unique'],
            [['email_address'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email_address' => 'Email Address',
            'user_name' => 'User Name',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['Account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['Account_id' => 'id']);
    }
}
