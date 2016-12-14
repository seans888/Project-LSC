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
    public $contact_number;
    public $username;
    public $email;
    public $password;
    public $retypePassword;


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

            ['retypePassword', 'required'],
             ['password', 'compare', 'compareAttribute' => 'retypePassword', 'message' => 'Password do not match, please retype.'],
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
            return null;
        }  

        $user = new Admin();
        $user->lastname = $this->lastname;
        $user->firstname = $this->firstname;
        $user->middlename = $this->middlename;
        $user->username = $this->username;
        $user->contact_number = $this->contact_number;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
         return $user->save() ? $user : null; 
    }
}
