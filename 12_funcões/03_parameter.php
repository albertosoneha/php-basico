<?php

function beautifulMessage(string $message): string
{
    return ">>> {$message} <<<\n";
}

echo beautifulMessage(message: 'Testing');
echo beautifulMessage(message: 'Testing 2.0');

/** 
 * Return the som of all number.
 * 
 * @param array<int/float> numbers
 * return float 
 * 
*/


function somOfAllnumbers(array $numbers): float
{
    $result = 0;

    foreach($numbers as $number){
        $result += $number;
    }

    return $result;
}

$myArray = [10, 15.5, 4.5];

echo somOfAllnumbers(numbers: $myArray). "\n";