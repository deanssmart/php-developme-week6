<?php

// Create a function, sumBoth, that takes two arrays of numbers as arguments. Return the sum of all the numbers from both arrays.

// Hint: to avoid repeating code, you might want to write a sum function that adds up the values in a single array and call that inside sumBoth

// Try it using foreach
// Try it using collect()

require __DIR__ . "/vendor/autoload.php";

function sum($arr){
    return collect($arr)->reduce(fn($acc, $val) => $acc + $val, 0);
}

function sumBoth($arr1, $arr2) {
    return sum($arr1) + sum($arr2);
}

dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // 30
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // 47
);