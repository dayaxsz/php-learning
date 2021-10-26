<?php

echo "o == nos diz se o valor é igual" . PHP_EOL;
echo "ele retorna 1 se for true e retorna () se for false" . PHP_EOL;

echo "usaremos o ==" . PHP_EOL;

echo (1 == true) . PHP_EOL;
echo (0 == false) . PHP_EOL;
echo (1 == false) . PHP_EOL;
echo (0 == true) . PHP_EOL;

echo "o != nos diz se o valor NÃO é igual" . PHP_EOL;
echo "usaremos o != agora!" . PHP_EOL;

echo (1 != true) . PHP_EOL; // = (1 = false)
echo (0 != false) . PHP_EOL; // = (0 = true)
echo (1 != false) . PHP_EOL; // = (1 = true)
echo (0 != true) . PHP_EOL; // = (0 = false)

echo "o === nos diz se o valor E o tipo são identicos" . PHP_EOL;

echo (1 === true) . PHP_EOL; // false
echo (0 === false) . PHP_EOL; // false
echo (1 === "1") . PHP_EOL; // false
echo ("1" === 1) . PHP_EOL; // false
echo (1 === 1.0) . PHP_EOL; // false

echo "o !== nos diz que NÃO é identico" . PHP_EOL;

echo (1 !== true) . PHP_EOL; // true
echo (0 !== false) . PHP_EOL; // true
echo (1 !== "1") . PHP_EOL; // true
echo ("1" !== 1) . PHP_EOL; // true
echo (1 !== 1.0) . PHP_EOL; // true

echo "O > nos diz que o valor é MAIOR que" . PHP_EOL;

echo (10 > 1) . PHP_EOL; // true
echo (1 > 10) . PHP_EOL; // false

echo "O < nos diz que o valor é MAIOR que" . PHP_EOL;

echo (10 < 1) . PHP_EOL;
echo (1 < 10) . PHP_EOL;

echo "O >= nos diz que o valor é MAIOR ou IGUAL que" . PHP_EOL;

echo (10 >= 10) . PHP_EOL;
echo (10 >= 1) . PHP_EOL;
echo (1 >= 10) . PHP_EOL;

echo "O <= nos diz que o valor é MENOR ou IGUAL que" . PHP_EOL;

echo (10 <= 10) . PHP_EOL;
echo (1 <= 10) . PHP_EOL;
echo (10 <= 1) . PHP_EOL;


?>