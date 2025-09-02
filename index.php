<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>

    <?php

    // variables and conditionals
$book = "The song of ice and fire";
$read = false;

if($read){
    $message = "You have read The song of ice and fire";
}else {
    $message = "You have not read The song of ice and fire";
}; 


    
// arrays

$books = [
    "The song of ice and fire", 
"The hobbit", 
"The northman"
];

// associative array 

$newBooks = [
[
    "name" => "The song of ice and fire", 
    "author"=> "G. R. R. Martin"
], 
[
    "name"=> "The hobbits", 
    "author"=> 'Tolkien'
]

]; 



//  functions and filter

function filterByAuthor ($bookList, $authorName){
$filteredBooks = []; 

foreach($bookList as $book){
    if($book['author'] === $authorName){
$filteredBooks[] = $book;  // pushing an element to the array
    }; 
};

return $filteredBooks;


};





    ?>



    </h1>

    <h2><?php echo $message; ?>  <br>


    <h3>Recommanded books</h3>

    <ul>
        <?php
        
        foreach(filterByAuthor($newBooks, 'Tolkien') as $book):
        
        ?>



<li><?= $book['name'] ?> </li>

<?php  endforeach; ?>



    </ul>



    <h3>
   
    </h3>
<ul>

</ul>







</h2>
</body>
</html>