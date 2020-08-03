<?php

// Create a function, largest, that takes an array of numbers. Return the largest number.

// Try it using foreach
// Try it using collect()

require __DIR__ . "/vendor/autoload.php";

function largest($arr){
    $largest = $arr[0];
    foreach($arr as $val){
        if($val > $largest){
            $largest = $val;
        }
    }
    return $largest;
}

dump(
    largest([2, 4, 6, 4, 7, 5]), // 7
    largest([-2, 4, 6, 4, 2, -7, 5]), // 6
    largest([-2, -4, -4, -7, -5]), // -2
);