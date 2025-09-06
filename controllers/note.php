<?php

$heading = 'Note';
$config = require('config.php');

$db = new Database($config['database']);



// dd($db);

$id = $_GET['id'];
// dd($id);


$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->fetch();

// dd($notes);

require 'views/note.view.php';
