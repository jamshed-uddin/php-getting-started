<?php

namespace http\Forms;

use core\App;

class Authenticator
{

    public function attempt($email, $password)
    {
        
        $db = App::resolve('core\Database');
      
        $user = $db->query('SELECT * FROM users WHERE email=:email', ['email' => $email])->find();



        if ($user && password_verify($password, $user['password'])) {
            // store user in session

            $this->login(['name' => $user['name'], 'email' => $user['email']]);
            // dd('failed');

            return true;
        }

        return false;
    }


    public function login($user)
    {

        $_SESSION['user'] = [
            'name' => $user['name'],
            'email' => $user['email']
        ];
        session_regenerate_id(true);
    }


    public function logout()
    {
        $_SESSION = [];


        session_destroy();
        session_unset();

        $params = session_get_cookie_params();

        setcookie('PHPSESSID', '', time() - 36000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }
}
