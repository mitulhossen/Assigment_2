<?php

// Task 4: Fibonacci Series printing using a Function
/*
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function.
*/

function FibonacciSeries($number){
    $first = 0;
    $second = 1;

    echo "Fibonacci Series: ";

    for ($i = 0; $i < $number; $i++) {
        echo $first . " ";

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

FibonacciSeries(15);



