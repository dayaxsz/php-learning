<?php

/* ORDEM DE PRECEDENCIA

1 **
2 * / %
3 + -

*/

//ADIÇÃO
$a = 10;
$b = 20;
$sum = $a + $b;
echo "O resultado da soma é " . $sum . PHP_EOL; // = 30

//SUBTRAÇÃO
$a = 100;
$b = 50;
$sub = $a - $b;
echo "O resultado da subtração é " . $sub . PHP_EOL; // = 50

//MULTIPLICAÇÃO
$a = 500;
$b = 50;
$mult = $a * $b;
echo "O resultado da multiplicação " . $mult . PHP_EOL;// = 25000

//DIVISÃO
$a = 100;
$b = 2;
$divisão = $a / $b;
echo "O resultado da divisão é " . $divisão . PHP_EOL; // = 50

//MODULAR
$a = 3;
$b = 2;
$modular = $a % $b;
echo "O resultado do módulo é " . $modular . PHP_EOL; // = 1

//Exemplo em que utilizamos várias operações matemáticas na mesma linha
echo "O resultado da expressão é " . (50 + 10 - 30) * (5.2 / 2) . PHP_EOL; // = 78

//É possivel também criar variáveis dentro de parênteses e fazer operações com a mesma
$a = 2;
echo "Usamos variáveis na conta e o resultado é " . $a * ($b = 3) . PHP_EOL ; // = 6

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// PODEMOS TORNAR UM NÚMERO EM NEGATIVO APENAS COLOCANDO - NA FRENTE DELE
$n1 = 100 . PHP_EOL;
$n2 = -$n1;
echo $n1;
echo $n2;








?>