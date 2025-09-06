<?php

$heading = 'Create note';
$config = require('config.php');

$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];


    if (strlen(trim($_POST['body'])) === 0) {
        $errors['body'] = 'Body is required';
    }

    if (strlen(trim($_POST['body'])) > 500) {

        $errors['body'] = 'Body can not be bigger than 1000 character';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', ['body' => $_POST['body'], 'user_id' => 1]);
    }
}





require 'views/note-create.view.php';
