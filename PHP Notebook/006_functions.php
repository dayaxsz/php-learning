<?php

//use the word function to initialize

function hello_world(){
    echo "Hello World!\n";
}

hello_world();

// We can set up parameters to functions 

/*

function greet($firstname, $lastname){
    echo "Hello $firstname $lastname \n";
}

$firstname = readline("Enter first name: ");

$lastname = readline("Enter last name: ");

greet($firstname, $lastname);
*/

// 

function capitalize($value) {
    return mb_strtoupper($value);
}

$animal = capitalize("cat\n");

echo $animal;

// You can also create nameless functions called closures. Closures can be stored in variables or passed into other functions.

$sum = function($a, $b){
    return $a + $b;
};

var_dump($sum(10,7));

echo $sum(5,7);
