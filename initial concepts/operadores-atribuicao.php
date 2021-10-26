<?php

// temos algumas formas simplificar a atribuição de valores

echo "ADIÇÃO" . PHP_EOL;
$itemA = 50;
$itemA = $itemA + 25;

echo $itemA . PHP_EOL;

echo "ADIÇÃO SIMPLIFICADA" . PHP_EOL;
$itemA = 50;
$itemA += 25; // forma muito mais simplificada

echo $itemA . PHP_EOL;
////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "SUBTRAÇÃO" . PHP_EOL;
$itemA = 50;
$itemA = $itemA - 25;

echo $itemA . PHP_EOL;

echo "SUBTRAÇÃO SIMPLIFICADA" . PHP_EOL;
$itemA = 50;
$itemA -= 25;
echo $itemA . PHP_EOL;

// SERVE PARA OS OUTROS OPERADORES.

?>