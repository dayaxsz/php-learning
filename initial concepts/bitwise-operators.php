<?php

/* 

E = &
OU = |
OU exclusivo = ^
NÃO = ~
DESLOCAR À ESQUERDA = <<
DESLOCAR À DIREITA = >>

*/

/*

Os operadores bitwise: & , | , ^ comparam dois valores inteiros utilizando suas representações binárias, e retornam um novo valor. Cada bit será comparado e a formação desse novo valor depende do operador que você usar.

*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// EXEMPLO 1

echo 9 & 7;

// 9 em binário é: 00001001
// 7 em binário é: 00000111
// resultado:      00000001

//Retorna: "1" que é o binário 00000001

echo "\n";
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Operador OU |
// Retorna 1 se um dos bits comparados for igual a 1, caso contrário, retorna 0.

echo 9 | 7;

// 9 em binário é: 00001001
// 7 em binário é: 00000111
// resultado:      00001111

//Retorna: "15" que é o binário 00001111 



?>