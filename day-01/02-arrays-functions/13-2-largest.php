<?php

// Create a function, largest, that takes an array of numbers. Return the largest number.

// Try it using foreach
// Try it using collect()

require __DIR__ . "/vendor/autoload.php";

function largest($arr){
    return collect($arr)->reduce(fn($large, $cVal) => $large > $cVal ? $large : $cVal, $arr[0]);
}

dump(
    largest([2, 4, 6, 4, 7, 5]), // 7
    largest([-2, 4, 6, 4, 2, -7, 5]), // 6
    largest([-2, -4, -4, -7, -5]), // -2
);