<?php

// Write some code that dumps the sum of the first 117 multiples of either 3 or 7.

// e.g. 3 + 6 + 7 + 9 + 12 + 14 + 15 + 18 + 21 + 24 ...

// The answer should be 16107.

require __DIR__ . "/vendor/autoload.php";

$total = 0;
$counted = 0;
$i = 1;

while($counted < 117){
    if($i % 3 === 0 || $i % 7 === 0){
        $total += $i;
        $counted += 1;
    }

    $i += 1;
}

dump($total);

