<?php

// Write some code that lists all multiples of 13 up to 1,000 using a for loop

// Example output:

// 13
// 26
// 39
// 52
// …
// 988

require __DIR__ . "/vendor/autoload.php";

$total = 0;

for($i = 13; $i <= 1000; $i += 13){
    $total += 13;
    dump($total);
};

