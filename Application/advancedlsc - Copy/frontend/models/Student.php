<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $type
 * @property integer $number_of_hours
 * @property string $review_class
 * @property string $lastname
 * @property string $firstname
 * @property string $middlename
 * @property string $nickname
 * @property string $gender
 * @property integer $age
 * @property string $email_address
 * @property string $contact_number
 * @property string $address
 * @property string $school
 * @property string $school_address
 * @property string $guardian_name
 * @property string $relation
 * @property string $guardian_contact_number
 * @property string $guardian_email_address
 * @property string $date_of_registration
 * @property string $status
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

    public $file; //file for upload image

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
            [['type', 'review_class', 'lastname', 'firstname', 'nickname', 'gender', 'age', 'email_address', 'contact_number', 'address', 'school', 'school_address'], 'required'],
            [['type', 'review_class', 'gender', 'status'], 'string'],
            [['file'],'file'],
            [['number_of_hours', 'age'], 'integer'],
            [['date_of_registration'], 'safe'],
            [['lastname', 'firstname', 'middlename'], 'string', 'max' => 30],
            [['nickname'], 'string', 'max' => 15],
            [['email_address', 'address', 'school', 'relation', 'guardian_email_address'], 'string', 'max' => 45],
            [['contact_number', 'guardian_contact_number'], 'string', 'max' => 11],
            [['school_address','image'], 'string', 'max' => 50],
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
            'type' => 'Type',
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
            'status' => 'Status',
            'file'=>'Image',
        ];
    }

    //comment

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
