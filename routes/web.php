<?php


// $routes = [
//     '/website/public/contact' => 'controllers/contact.php',
//     '/website/public/about' => 'controllers/about.php',
//     '/website/public/notes' => 'controllers/notes/index.php',
//     '/website/public/note' => 'controllers/notes/show.php',
//     '/website/public/notes/create' => 'controllers/notes/create.php',
//     '/website/public/' => 'controllers/index.php'
// ];


$router->get('/website/public/', 'index.php');
$router->get('/website/public/about', 'about.php');
$router->get('/website/public/contact', 'contact.php');

// user 
$router->get('/website/public/register', 'registration/create.php')->only('guest');
$router->post('/website/public/register', 'registration/store.php');
$router->get('/website/public/login', 'login/create.php')->only('guest');
$router->post('/website/public/login', 'login/authenticate.php');
$router->delete('/website/public/login', 'login/destroy.php')->only('auth');


// notes routes
$router->get('/website/public/notes', 'notes/index.php')->only('auth');

// individual notes
$router->get('/website/public/note', 'notes/show.php');

// delete notes
$router->delete('/website/public/note', 'notes/destroy.php');
$router->get('/website/public/notes/create', 'notes/create.php');
$router->post('/website/public/notes/create', 'notes/store.php');
$router->get('/website/public/notes/edit', 'notes/edit.php');
$router->patch('/website/public/notes/edit', 'notes/update.php');
//$router->patch('/website/public/notes/edit', [Home:class, 'create']);
