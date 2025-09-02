<?php
require 'functions.php';


$uri = $_SERVER['REQUEST_URI'];



var_dump($uri);





if ($uri === '/website/') {
    require 'controllers/index.php';
} else if ($uri === '/website/contact') {
    require 'controllers/contact.php';
} else if ($uri === '/website/about') {
    require 'controllers/about.php';
}
