<?php


use  core\Database;



$config = require base_path('config.php');

$db = new Database($config['database']);
$currentUserId = 1;




// dd($db);

$id = $_GET['id'];
// dd($id);
var_dump($id);



$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();



authorize($note['user_id'] === $currentUserId);





view('notes/show.view.php', [
    'heading' => 'Note',
    'note' => $note
]);
