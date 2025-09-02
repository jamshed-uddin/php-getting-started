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

// lambda function -- anonymous function assigned to a variable 

$filter = function  ($items,$fn){
$filteredItems = []; 

foreach($items as $item){
    if($fn($item)){
$filteredItems[] = $item;  // pushing an element to the array
    }; 
};

return $filteredItems;
};













    ?>



    </h1>

    <h2><?php echo $message; ?>  <br>


    <h3>Recommanded books</h3>

    <ul>
        <?php

        $filteredBooks =array_filter($newBooks, function($book){
return $book['author']==='G. R. R. Martin';
        }) ;
        
        foreach($filteredBooks as $book):
        
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