<?php
namespace backend\models;

use yii\base\Model;
use backend\models\Adminuser;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\backend\models\Adminuser', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\backend\models\Adminuser', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
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

        $adminuser = new Adminuser();
        $adminuser->username = $this->username;
        $adminuser->email = $this->email;

        $adminuser->setPassword($this->password);
        $adminuser->generateAuthKey();

       //  if($adminuser->save()){
       //
       //  }else{
       //      var_dump($adminuser->getErrors());
       //  }
       //  die;
       // $res =  $adminuser->save(0);
       // var_dump($res);die;
        return $adminuser->save() ? $adminuser : null;
    }
}
