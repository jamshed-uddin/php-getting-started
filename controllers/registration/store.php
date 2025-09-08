<?php


// dd([$_POST['email'],  $_POST['password']]);

use core\App;
use core\Validator;

$db = App::resolve('core\Database');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// dd([$name, $email, $password]); 

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email';
};

if (!Validator::string($password)) {
    $errors['password'] = 'Password must be character of min 6 and max 32';
};


if (!empty($errors)) {
    dd('error');
    return view('registration/create.view.php', [
        'errors' => $errors,
        'heading' => 'Registration'
    ]);
};

// check if user already exits

// dd('error before db');

$user = $db->query('SELECT * FROM users WHERE email=:email', ['email' => $email])->find();


// dd($user); 

if ($user) {
    // dd('failed');
    header('location: /website/public');
    exit();
} else {
    // dd('done');

    $db->query('INSERT INTO users (name, email, password) VALUES (:name , :email, :password)', [
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]);
};


// store user in session

$_SESSION['user'] = [
    'email' => $email
];


header('location: /website/public');
exit();
