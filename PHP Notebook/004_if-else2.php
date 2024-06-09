<?php

/* 

$user_input = readline("bota um numero: ");

if ($user_input >= 5 && $user_input <= 10) {
    echo "funfou entre 5 e 10" ;
} elseif ($user_input > 10){
    echo "funfou maior q 10";
} else {
    echo "funfou menos";
} 
    
*/

/*
$user_input = readline("Valor: ");

if ($user_input > 0) {
    echo "valid value";
} else {
    echo "invalid value";
}
    */

$user_input = readline("Valor 1: ");

if ($user_input > 5 && $user_input == 10) {
    echo "É 10\n";
} else {
    echo "error\n";
}

$user_input = readline("Valor 2: ");

if ($user_input > 5 || $user_input == 10) {
    echo "É 10\n";
} else {
    echo "error\n";
}


$user_input = readline("Valor 3: ");

if ($user_input > 5 && $user_input !=10) {
    echo "É 10\n";
} else {
    echo "error\n";
}
