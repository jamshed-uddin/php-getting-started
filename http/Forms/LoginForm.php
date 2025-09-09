<?php


namespace http\Forms;

use core\Validator;

class LoginForm
{

    protected $errors = [];
    public function validate($email, $password)
    {



        if (!Validator::email($email)) {
            $this->errors['email'] = 'Please provide a valid email';
            return false;
        };

        if (!Validator::string($password)) {
            $this->errors['password'] = 'Enter a valid password';
            return false;
        };

        return true;
    }


    public function errors()
    {
        return $this->errors;
    }


    public function error($errorField, $errorMessage)
    {
        $this->errors[$errorField] = $errorMessage;
    }
}
