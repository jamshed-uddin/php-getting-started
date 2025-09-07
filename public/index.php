<?php

use core\Routers;

const BASE_PATH = __DIR__ . '/../';

// var_dump(BASE_PATH);


require BASE_PATH . 'core/functions.php';

spl_autoload_register(function ($class) {


    $class = str_replace('\\', '/', $class);
    require base_path("{$class}.php");
});



// require base_path('core/router.php');

$router = new Routers();

require BASE_PATH . 'routes/web.php';



$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$method  =  $_POST['method'] ?? $_SERVER['REQUEST_METHOD'];

// echo "<pre>";
// var_dump( $method);
// echo "</pre>";

$router->route($uri, $method);
