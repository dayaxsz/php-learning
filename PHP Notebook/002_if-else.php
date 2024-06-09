<?php

$animal = 'cow';

if ($animal == 'cow') {
    echo 'Mooooo...';
};

// An if statement can have multiple conditions chained together. If the first if statement returns false, then PHP will check each elseif. If none of the checks return true, then the else block will be executed.


$animal = 'bird';
if ($animal == 'dog') {
    echo "Woof! \n";
} elseif ($animal == 'cat') {
    echo "Meow! \n";
} elseif ($animal == 'bird') {
    echo "Chirp! \n";
} else {
    echo "I am not a dog, cat or bird \n";
}

// A switch statement has multiple cases to check if the value in parentheses equals something.

$food = 'apples';
switch ($food) {
    case 'apples':
        echo "Eating an apple \n";
        break;
    case 'oranges':
        echo "Eating an orange \n";
        break;
    case 'peaches':
        echo "Eating a peach \n";
        break;
    default:
        echo "no food, I am hungry \n";
}

// If you do not use a break, PHP will continue to execute all following cases.

$drink = 'water';
switch ($drink) {
    case 'water':
        echo "Drinking water \n";
    case "tea":
        echo "Drinking tea \n";
        break;
}

// In a ternary, the condition is followed by a question mark before the value that should be returned if the condition is true and then another colon and a value to return if the condition is false.

$language = "english";
echo $language == "spanish" ? "hola \n" : "hello \n";

// Lastly, there is another form of a ternary that checks if a value is set and then returns the value to the right of the two question marks if the value is null.

echo $IDoNotExist ?? "variable not set \n";

// You can also chain multiple checks in a row.

$IExist = "Variable exists \n"; 
echo $IDoNotExist ?? $IExist ?? "Neither variable are set \n
";