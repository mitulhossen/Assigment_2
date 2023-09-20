<?php

// Task 3: Break on Condition
/*
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.
*/

$firstNum = 1;
$secondNum = 7;

echo "Fibonacci Numbers: ";

for ($i = 0; $i < 10; $i++) {
    if ($firstNum > 100) {
        break;
    }

    echo $firstNum." ";
    $nextNum = $firstNum + $secondNum;
    $firstNum = $secondNum;
    $secondNum = $nextNum;
}
echo "\n";