<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $lastname;
    public $firstname;
    public $middlename;
    public $age;
    public $gender;
    public $contactNumber;
    public $homeAddress;
    public $school;
    public $guardianName;
    public $guardianRelation;
    public $guardianContactNumber;
    public $guardianEmailAddress;
    public $learnedLSC;
    public $retypePassword;
    public $terms;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['retypePassword', 'required'],
            ['password', 'compare', 'compareAttribute' => 'retypePassword', 'message' => 'Password do not much, please retype.'],


            ['firstname', 'required'],
            ['lastname', 'required'],
            ['middlename', 'required'],
            ['age', 'required'],
            ['gender', 'required'],
            ['contactNumber', 'required'],
            ['homeAddress', 'required'],
            ['school', 'required'],
            ['guardianName', 'required'],
            ['guardianRelation', 'required'],
            ['guardianContactNumber', 'required'],
            ['guardianEmailAddress', 'required'],
            ['learnedLSC', 'required'],
            ['terms','compare','operator' => '==','compareValue' => true,
            'message' => 'You have to agree to Terms and Conditions'
],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->lastname = $this->lastname;
        $user->firstname = $this->firstname;
        $user->middlename = $this->middlename;
        $user->age = $this->age;
        $user->gender = $this->gender;
        $user->contact_number = $this->contactNumber;
        $user->home_address = $this->homeAddress;
        $user->school = $this->school;
        $user->guardian_name = $this->guardianName;
        $user->relation = $this->guardianRelation;
        $user->guardian_email_address = $this->guardianEmailAddress;
        $user->guardian_contact_number = $this->guardianContactNumber;
        $user->learned_lsc = $this->learnedLSC;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}

