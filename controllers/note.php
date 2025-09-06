<?php

$heading = 'Note';
$config = require('config.php');

$db = new Database($config['database']);



// dd($db);

$id = $_GET['id'];
// dd($id);


$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();

$currentUserId = 1;

authorize($note['user_id'] === $currentUserId);





require 'views/note.view.php';
