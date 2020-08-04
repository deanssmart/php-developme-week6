<?php

// Write some code that outputs a cumulative total of the current line number for 1 to 50.

// e.g.

// 1
// 1 + 2
// 1 + 2 + 3
// 1 + 2 + 3 + 4
// etc.

// 1
// 3
// 6
// 10
// ...
// 1275

require __DIR__ . "/vendor/autoload.php";

$total = 0;

for($i = 0; $i < 50; $i += 1){
    dump($total += (1 + $i));
};

