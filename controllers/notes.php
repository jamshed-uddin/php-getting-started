<?php

$heading = 'Notes';
$config = require('config.php');

$db = new Database($config['database']);



// dd($db);

$notes = $db->query("SELECT * FROM notes")->findAll();

// dd($notes);

require 'views/notes.view.php';
