<?php

// Create a function, even, that takes a number as an argument. The function should return true if the number is even and false if it is odd.

require __DIR__ . "/vendor/autoload.php";

function even($n){
    return $n % 2 === 0;
}

dump(even(1)); // false
dump(even(2)); // true