<?php

// Arrays

$ex001 = [
    "name" => "Carol",
    "age" => 19,
    "ocupation" => "Apple Advisor"
];

var_dump($ex001);

$ex002 = [     // se não declararmos chaves, ele utilizará o index [0,1,2,3,4,5,...] como abaixo:
    "carol",
    19,
    "apple advisor"
];

var_dump($ex002);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ex003 = [
    "name" => "Carol",
    "Fandom" => "EXO"
];

$ex004 = [
    "Tsuuki",
    "NCT"
];

echo $ex003["name"] . PHP_EOL;
echo $ex003["Fandom"] . PHP_EOL;

echo $ex004[0] . PHP_EOL;
echo $ex004[1];


?>