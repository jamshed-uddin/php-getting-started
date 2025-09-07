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
$router->get('/website/public/note', 'controllers/notes/show.php');
$router->delete('/website/public/note', 'controllers/notes/destroy.php');
$router->get('/website/public/notes/create', 'controllers/notes/create.php');
$router->post('/website/public/notes', 'controllers/notes/store.php');
