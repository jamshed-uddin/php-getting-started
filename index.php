<?php 

$heading = 'Home';

require 'functions.php';





$business= [
    "name"=> "Laracasts", 
    "cost"=> 15, 
    "categories"=>['Php', 'testing', 'javascript']

]; 


require "views/index.view.php";


