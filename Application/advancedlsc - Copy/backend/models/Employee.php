<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $lastname
 * @property string $firstname
 * @property string $middlename
 * @property string $gender
 * @property integer $age
 * @property string $position
 * @property integer $contact_Number
 * @property string $email_address
 *
 * @property Account[] $accounts
 * @property ClassList[] $classLists
 * @property Enrollment[] $enrollments
 * @property Reservation[] $reservations
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lastname', 'firstname', 'gender', 'age', 'position', 'contact_Number', 'email_address'], 'required'],
            [['age', 'contact_Number'], 'integer'],
            [['position'], 'string'],
            [['lastname', 'firstname', 'middlename', 'email_address'], 'string', 'max' => 30],
            [['gender'], 'string', 'max' => 10],
            [['email_address'], 'unique'],
            [['contact_Number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'gender' => 'Gender',
            'age' => 'Age',
            'position' => 'Position',
            'contact_Number' => 'Contact  Number',
            'email_address' => 'Email Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccounts()
    {
        return $this->hasMany(Account::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassLists()
    {
        return $this->hasMany(ClassList::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnrollments()
    {
        return $this->hasMany(Enrollment::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservations()
    {
        return $this->hasMany(Reservation::className(), ['employee_id' => 'id']);
    }
}
