<?php

// Write some code that lists the numbers from 1 to 100 using a for loop.

// Example output:

// 1
// 2
// 3
// 4
// …
// 100 

require __DIR__ . "/vendor/autoload.php";

$total = 0;

for($i = 0; $i < 100; $i += 1){
    $total += 1;
    dump($total);
};

