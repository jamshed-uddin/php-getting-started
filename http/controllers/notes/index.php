<?php

use core\App;
use core\Database;


$heading = 'Notes';
// $config = require base_path('config.php');

// $db = new Database($config['database']);

$db = App::resolve('core\Database');

// dd($db);

// dd($db);

$notes = $db->query("SELECT * FROM notes")->findAll();

// dd($notes);

view('notes/index.view.php', [
    'heading' => 'Notes',
    'notes' => $notes
]);
