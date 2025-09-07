<?php

use core\App;

$id = $_GET['id'];

echo $id;


$db = App::container()->resolve('core\Database');
$currentUserId = 1;
// dd($db);

$id = $_GET['id'];
// dd($id);
var_dump($id);
$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();
authorize($note['user_id'] === $currentUserId);



view(
    'notes/edit.view.php',
    [
        'heading' => 'Edit note',
        'errors' => [],
        'note' => $note
    ]
);
