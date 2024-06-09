<?php

// Array

// 1) Create with array()
/*
$form1 = array('a', 'b', 'c');

$form2 = ['d', 'e', 'f'];

echo $form1[0] . " ";
echo $form1[1] . " ";
echo $form1[2] . " ";
*/

$f1 = [
    'Brand' =>  
    ['Ferrari', 'Redbull', 'Mercedes'],
    'Pilot' => 
    ['Leclerc', 'Verstappen', 'Hamilton']
];

// echo $f1['Brand'][0];
// echo $f1['Pilot'][1];

function GetArrayElement($array, $key, $index){
    if (isset($array[$key]) && isset($array[$key][$index])) { // isset() verifica se a variável tem valor ou está setada/declarada. Ele retorna true 
        return $array[$key][$index];
    } else {
        return 'Index ou chave inválida';
    }
}



// echo GetArrayElement($f1, 'Brand', 2); Output: Mercedes
// echo GetArrayElement($f1, 'Brand', 1); Output: Redbull
// echo GetArrayElement($f1, 'Brand', 3); Output: Index ou chave inválida

foreach ($f1 as $key => $value) {
    echo "Chave: $key\n";
    foreach ($value as $item) {
        echo "Valor: $item \n";
    }
}

