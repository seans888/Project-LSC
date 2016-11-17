<?php
namespace backend\models;

use yii\base\Model;
use common\models\Admin;

/**
 * Signup form
 */
class AdminSignupForm extends Model
{
    public $lastname;
    public $firstname;
    public $middlename;
    public $age;
    public $gender;
    public $contact_number;
    public $username;
    public $email;
    public $password;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['lastname', 'required'],
            ['firstname', 'required'],
            ['age', 'required'],
            ['gender', 'required'],
            ['contact_number', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\Admin', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\Admin', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return Admin
     */
    public function signup()
    {
        if (!$this->validate()) {        
        $user = new Admin();
        $user->lastname = $this->lastname;
        $user->firstname = $this->firstname;
        $user->middlename = $this->middlename;
        $user->username = $this->username;
        $user->age = $this->age;
        $user->gender = $this->gender;
        $user->contact_number = $this->contact_number;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->save();
        return $user;
        }
        return null;
    }
}
