<?php

use http\Forms\Authenticator;
use http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();
if ($form->validate($email, $password)) {
    $auth = new Authenticator();

    if ($auth->attempt($email, $password)) {
        redirect('/website/public');
    }
    $form->error('email', 'No account found');
};

return view('login/create.view.php', [
    'errors' => [
        'email' => 'Something went wrong'
    ],
    'heading' => 'Login'
]);
