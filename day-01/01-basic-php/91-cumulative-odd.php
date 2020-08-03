<?php

// Write some code that outputs 50 lines so that, if the current line number is n, the output is the total of the first n odd numbers.

// e.g.

// 1
// 1 + 3
// 1 + 3 + 5
// 1 + 3 + 5 + 7
// etc.
// Example output:

// 1
// 4
// 9
// 16
// ...

require __DIR__ . "/vendor/autoload.php";

$total = 0;
$n = 50;

for($i = 0; $i < $n; $i += 1){
    if($i % 2 !== 0) {
        dump($total += $i);
    }
};
