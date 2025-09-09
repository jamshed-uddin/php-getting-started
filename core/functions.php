<?php

use core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}


// dd($_SERVER);


function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
};




function abort($code = 404)
{
    http_response_code($code);
    // echo 'Route not found';
    require base_path("views/{$code}.php");
    die();
};
function authorize($condition, $statusCode = Response::FORBIDDEN)
{

    if (!$condition) {
        abort($statusCode);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}


function view($path, $attribute = [])
{
    extract($attribute);

    require base_path('views/' . $path);
}


function matchPassword($inputPassword, $storedPassword)
{
    return password_verify($inputPassword, $storedPassword);
}



function redirect($redirectTo)
{
    header("location: {$redirectTo}");
    exit();
}
