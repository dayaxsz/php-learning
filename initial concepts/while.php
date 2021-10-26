<?php

$i = 1;
$mult = 2;
while (true) {
    if ($i > 20) {
        break;
    }
    echo $i .PHP_EOL;
    $mult * $i++;
    for($i;)
}

# JEITO CERTO
$i = 3;
$j = 1;
while($j <= 10){ // Inner Loop
    echo $i * $j. PHP_EOL;
    $j= $j + 1;
}

$i=2;
$j=1;
while($i<= 10){ // Outer Loop
    while($j<= 10){ // Inner Loop
        echo $i*$j." | ";
        $j=$j+1;
    } // End of Inner loop
    echo "<br>";
    $j=1;
    $i=$i+1;
}// End of outer loop
