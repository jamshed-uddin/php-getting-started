<?php




use core\App;
use core\Validator;


$db = App::resolve('core\Database');

$errors = [];


$body = $_POST['body'];

if (!Validator::string($body)) {
    $errors['body'] = 'A body no more than 1000 character is required!';
};



$noteId = $_POST['id'];


$currentUserId = 1;
// dd($db);

$id = $_POST['id'];
// dd($id);
var_dump($id);
$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();
authorize($note['user_id'] === $currentUserId);



if (!empty($errors)) {
    // dasf
  return view(
        'notes/edit.view.php',
        ['heading' => 'Edit note', 'errors' => $errors, 'note' => $note]

    );
}

$db->query('UPDATE notes SET body=:body WHERE id=:id', ['body' => $body, 'id' => $noteId]);

header("location: /website/public/notes");
exit();
