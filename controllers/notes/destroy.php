<?php


use  core\Database;





$config = require base_path('config.php');

$db = new Database($config['database']);
$currentUserId = 1;

var_dump('hello there');

$id = $_POST['id'];

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();



authorize($note['user_id'] === $currentUserId);
// dd($_POST['id']);
$db->query(
    "DELETE FROM notes WHERE id =:id",
    ['id' =>   $id]
);


// redirect to notes 
header('location: /website/public/notes');
exit();
