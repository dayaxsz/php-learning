<?php

// A while loop will continue to run the block of code as long as the value in parentheses is true.

$num = 5;
while ($num > 0) {
    echo "While loop $num \n";
    --$num;
}

// A do while loop is similar to a while loop except it always runs at least one iteration. In a classic while loop, no iterations may be executed if the value in parentheses is false. In a do while, the boolean check is not done until after the execution of an iteration.

$num = 0;
do {
    echo "Do while $num \n";
    ++$num;
} while ($num <5);

//

for ($i = 0; $i <= 10; $i++) {
    echo "for loop $i \n";
}