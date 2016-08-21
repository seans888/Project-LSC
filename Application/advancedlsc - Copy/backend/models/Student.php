<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $Status
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
 *
 * @property Account[] $accounts
 * @property ClassList[] $classLists
 * @property Enrollment[] $enrollments
 * @property Payment[] $payments
 * @property Reservation[] $reservations
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
            [['Status', 'review_class', 'lastname', 'firstname', 'nickname', 'gender', 'age', 'email_address', 'contact_number', 'address', 'school', 'school_address'], 'required'],
            [['Status', 'review_class', 'gender'], 'string'],
            [['number_of_hours', 'age', 'contact_number', 'guardian_contact_number'], 'integer'],
            [['date_of_registration'], 'safe'],
            [['lastname', 'firstname', 'middlename'], 'string', 'max' => 30],
            [['nickname'], 'string', 'max' => 15],
            [['email_address', 'address', 'school', 'relation', 'guardian_email_address'], 'string', 'max' => 45],
            [['school_address'], 'string', 'max' => 50],
            [['guardian_name'], 'string', 'max' => 40],
            [['email_address'], 'unique'],
            [['contact_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Status' => 'Status',
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccounts()
    {
        return $this->hasMany(Account::className(), ['student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassLists()
    {
        return $this->hasMany(ClassList::className(), ['student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnrollments()
    {
        return $this->hasMany(Enrollment::className(), ['student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservations()
    {
        return $this->hasMany(Reservation::className(), ['student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentsHasSubjects()
    {
        return $this->hasMany(StudentsHasSubject::className(), ['Students_Stud_ID' => 'id']);
    }
}
