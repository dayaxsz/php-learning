<?php

echo "HOW TO PRINT DATA" . PHP_EOL;

echo "\n" . PHP_EOL;

$user2 = [
    "Carol",
    20,
    "Developer"
];

echo "O var_dump imprime de uma forma tosca mas ele é mt util" . PHP_EOL;
var_dump($user2);
echo "\n";
echo "O gettype() imprime o tipo do dado" . PHP_EOL;
echo "aqui vemos que o user2 é do tipo " . gettype($user2) . PHP_EOL;
echo "\n";
echo "O print_r imprime de uma forma legível para o ser humano" . PHP_EOL;
print_r($user2);