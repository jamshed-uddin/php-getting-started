<?php


// $routes = [
//     '/website/public/contact' => 'controllers/contact.php',
//     '/website/public/about' => 'controllers/about.php',
//     '/website/public/notes' => 'controllers/notes/index.php',
//     '/website/public/note' => 'controllers/notes/show.php',
//     '/website/public/notes/create' => 'controllers/notes/create.php',
//     '/website/public/' => 'controllers/index.php'
// ];


$router->get('/website/public/', 'controllers/index.php');
$router->get('/website/public/about', 'controllers/about.php');
$router->get('/website/public/contact', 'controllers/contact.php');


// notes routes
$router->get('/website/public/notes', 'controllers/notes/index.php');

// individual notes
$router->get('/website/public/note', 'controllers/notes/show.php');

// delete notes
$router->delete('/website/public/note', 'controllers/notes/destroy.php');
$router->get('/website/public/notes/create', 'controllers/notes/create.php');
$router->post('/website/public/notes/create', 'controllers/notes/store.php');
$router->get('/website/public/notes/edit', 'controllers/notes/edit.php');
$router->patch('/website/public/notes/edit', 'controllers/notes/update.php');
