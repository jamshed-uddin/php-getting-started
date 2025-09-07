<?php




use core\App;
use core\Validator;


$db = App::resolve('core\Database');

$errors = [];


$body = $_POST['body'];

if (!Validator::string($body)) {
    $errors['body'] = 'A body no more than 1000 character is required!';
};


if (!empty($errors)) {
    // dasf
    view(
        'notes/edit.view.php',
        ['heading' => 'Edit note', 'errors' => $errors]
    );
}

$noteId = $_POST['id'];

$db->query('UPDATE notes SET body=:body WHERE id=:id', ['body' => $body, 'id' => $noteId]);

header("location: /website/public/notes");
exit();
