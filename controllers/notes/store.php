<?php

use core\App;
use core\Validator;


$db = App::container()->resolve('core\Database');

$errors = [];

$body = $_POST['body'];


if (!Validator::string($body)) {
    $errors['body'] = 'A body no more than 1000 character is required!';
};


if (!empty($errors)) {
    // dasf
    view(
        'notes/create.view.php',
        ['heading' => 'Create note', 'errors' => $errors]
    );
}


$db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', ['body' => $_POST['body'], 'user_id' => 1]);

header('location: /website/public/notes');
exit();
