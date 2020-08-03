<?php

// Write some code that outputs any even numbers between 1 and 50 that are also divisible by 3

// Example output:

// 6
// 12
// 18
// 24
// …
// 48

require __DIR__ . "/vendor/autoload.php";


for($i = 1; $i <= 50; $i += 1){
    if($i % 2 === 0){
        if($i % 3 === 0){
            dump($i);
        }
    }
    
};

