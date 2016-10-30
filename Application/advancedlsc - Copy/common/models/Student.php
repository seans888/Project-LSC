<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $lastname
 * @property string $firstname
 * @property string $middlename
 * @property integer $age
 * @property string $gender
 * @property string $contact_number
 * @property string $email_address
 * @property string $home_address
 * @property string $school
 * @property string $guardian_name
 * @property string $relation
 * @property string $guardian_contact_number
 * @property string $guardian_email_address
 * @property string $selected_school
 * @property string $learned_lsc
 * @property integer $review_class_id
 * @property integer $schedule_id
 * @property string $transaction_type
 * @property string $date_of_registration
 * @property string $status
 * @property integer $user_id
 *
 * @property Account[] $accounts
 * @property ClassList[] $classLists
 * @property ReviewClass[] $reviewClasses
 * @property Payment[] $payments
 * @property ReviewClass[] $reviewClasses0
 * @property ReviewClass $reviewClass
 * @property Schedule $schedule
 * @property User $user
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
            [['lastname', 'firstname', 'age', 'gender', 'email_address', 'home_address', 'school', 'guardian_name', 'relation', 'guardian_contact_number', 'learned_lsc', 'review_class_id', 'schedule_id', 'user_id'], 'required'],
            [['age', 'review_class_id', 'schedule_id', 'user_id'], 'integer'],
            [['gender', 'relation', 'learned_lsc', 'transaction_type', 'status'], 'string'],
            [['date_of_registration'], 'safe'],
            [['lastname', 'firstname', 'middlename', 'guardian_name', 'selected_school'], 'string', 'max' => 100],
            [['contact_number', 'guardian_contact_number'], 'string', 'max' => 12],
			[['email_address', 'guardian_email_address'], 'string', 'max' => 150],
            [['home_address', 'school'], 'string', 'max' => 200],
            //the email attribute should be a valid email address
            ['email_address', 'email'], 
            ['guardian_email_address', 'email'],
            ['email', 'unique','message'=>'Email already exists!'],
            //
            [['review_class_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReviewClass::className(), 'targetAttribute' => ['review_class_id' => 'id']],
            [['schedule_id'], 'exist', 'skipOnError' => true, 'targetClass' => Schedule::className(), 'targetAttribute' => ['schedule_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],

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
            'age' => 'Age',
            'gender' => 'Gender',
            'contact_number' => 'Contact Number',
            'email_address' => 'Email Address',
            'home_address' => 'Home Address',
            'school' => 'School',
            'guardian_name' => 'Guardian Name',
            'relation' => 'Relation',
            'guardian_contact_number' => 'Guardian Contact Number',
            'guardian_email_address' => 'Guardian Email Address',
            'selected_school' => 'Selected School',
            'learned_lsc' => 'Learned LSC',
            'review_class_id' => 'Review Class Name',
            'schedule_id' => 'Schedule',
            'transaction_type' => 'Transaction Type',
            'date_of_registration' => 'Date Of Registration',
            'status' => 'Status',
            'user_id' => 'User ID',
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
    public function getReviewClasses()
    {
        return $this->hasMany(ReviewClass::className(), ['id' => 'review_class_id'])->viaTable('class_list', ['student_id' => 'id']);
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
    public function getReviewClasses0()
    {
        return $this->hasMany(ReviewClass::className(), ['id' => 'review_class_id'])->viaTable('payment', ['student_id' => 'id']);
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
    public function getSchedule()
    {
        return $this->hasOne(Schedule::className(), ['id' => 'schedule_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
         //return $this->hasOne(\Yii::$app->user->identity->id;
        return $this->hasOne(User::className(), ['id' => 'user_id'])->inverseOf('student');
    }
}
//Yii::$app->user->getId();