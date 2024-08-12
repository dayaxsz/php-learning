<?php

echo "Hello World!\nquebra de linha\n";
echo "teste\n"; echo "teste2";

// how to set var

$greeting = "Hello World!".PHP_EOL;

echo $greeting;

$_var;
$Var;
$var;

// types
$int = 1;
$float = 1.1;
$bool = true;
$string = "it's a string";

// math

$a = 1;
$b = 2;

echo $a + $b.PHP_EOL;

echo $a - $b.PHP_EOL;

echo $a * $b.PHP_EOL;

echo $a / $b.PHP_EOL;

echo $a % $b.PHP_EOL;

echo $a ** $b.PHP_EOL;

// String

echo "Hey $string\n";

$name = "John";
$lastname = "Doe";
$fullname = $name . $lastname;

echo $fullname.PHP_EOL;

// Comparison

$a = 1;
$b = 2;


var_dump($a == $b).PHP_EOL; //values are equal
var_dump($a != $b).PHP_EOL; // values are not equal
var_dump($a > $b).PHP_EOL; // $a is greater than $b
var_dump($a < $b).PHP_EOL; // $a is smaller than $b
var_dump($a >= $b).PHP_EOL; // $a is equal or greater to $b
var_dump($a <= $b).PHP_EOL; // $a is equal or less than $b


// Logic Operators

$a = true;
$b = false;

var_dump($a && $b).PHP_EOL; // checks if both are true = AND
var_dump($a || $b).PHP_EOL; // checks if one is true = OR
var_dump(!$a).PHP_EOL; // checks if is false = NOT