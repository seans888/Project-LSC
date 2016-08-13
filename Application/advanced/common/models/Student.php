<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property integer $number_of_hours
 * @property string $review_class
 * @property string $lastname
 * @property string $firstname
 * @property string $middlename
 * @property string $nickname
 * @property string $gender
 * @property integer $age
 * @property string $email_address
 * @property integer $contact_number
 * @property string $address
 * @property string $school
 * @property string $school_address
 * @property string $guardian_name
 * @property string $relation
 * @property integer $guardian_contact_number
 * @property string $guardian_email_address
 * @property string $date_of_registration
 * @property integer $Employee_id
 * @property integer $Account_id
 *
 * @property Enrollment[] $enrollments
 * @property Payment[] $payments
 * @property Reservation[] $reservations
 * @property Account $account
 * @property StudentsHasSubject[] $studentsHasSubjects
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number_of_hours', 'age', 'contact_number', 'guardian_contact_number', 'Employee_id', 'Account_id'], 'integer'],
            [['review_class', 'lastname', 'firstname', 'nickname', 'gender', 'age', 'email_address', 'contact_number', 'address', 'school', 'school_address', 'date_of_registration', 'Account_id'], 'required'],
            [['date_of_registration'], 'safe'],
            [['review_class', 'email_address', 'address', 'school', 'relation', 'guardian_email_address'], 'string', 'max' => 45],
            [['lastname', 'firstname', 'middlename'], 'string', 'max' => 30],
            [['nickname'], 'string', 'max' => 15],
            [['gender'], 'string', 'max' => 7],
            [['school_address'], 'string', 'max' => 50],
            [['guardian_name'], 'string', 'max' => 40],
            [['email_address'], 'unique'],
            [['contact_number'], 'unique'],
            [['Account_id'], 'unique'],
            [['Account_id'], 'exist', 'skipOnError' => true, 'targetClass' => Account::className(), 'targetAttribute' => ['Account_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number_of_hours' => 'Number Of Hours',
            'review_class' => 'Review Class',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'nickname' => 'Nickname',
            'gender' => 'Gender',
            'age' => 'Age',
            'email_address' => 'Email Address',
            'contact_number' => 'Contact Number',
            'address' => 'Address',
            'school' => 'School',
            'school_address' => 'School Address',
            'guardian_name' => 'Guardian Name',
            'relation' => 'Relation',
            'guardian_contact_number' => 'Guardian Contact Number',
            'guardian_email_address' => 'Guardian Email Address',
            'date_of_registration' => 'Date Of Registration',
            'Employee_id' => 'Employee ID',
            'Account_id' => 'Account ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnrollments()
    {
        return $this->hasMany(Enrollment::className(), ['Student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['Student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservations()
    {
        return $this->hasMany(Reservation::className(), ['Student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(Account::className(), ['id' => 'Account_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentsHasSubjects()
    {
        return $this->hasMany(StudentsHasSubject::className(), ['Students_Stud_ID' => 'id']);
    }
}
