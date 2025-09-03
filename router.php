<?php



$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



// var_dump($uri);


include './routes/web.php';


function abort($code = 404)
{
    http_response_code($code);
    // echo 'Route not found';
    require "views/{$code}.php";
    die();
};


function routeToControllers($uri, $routes)
{

    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
};


routeToControllers($uri, $routes);




// if ($uri === '/website/') {
//     require 'controllers/index.php';
// } else if ($uri === '/website/contact.php') {
//     require 'controllers/contact.php';
// } else if ($uri === '/website/about.php') {
//     require 'controllers/about.php';
// };
