<?php

// Write some code that outputs the first 15 times-tables.

// Example output:

// 1    2    3    4    5    6    7    8    9    10   11   12   13   14   15
// 2    4    6    8    10   12   14   16   18   20   22   24   26   28   30
// 3    6    9    12   15   18   21   24   27   30   33   36   39   42   45
// ...
// 15   30   45   60   75   90   105  120  135  150  165  180  195  210  225
// You'll want to use echo for this one.

// Hint: you'll need to use the newline character, "\n", between your "rows"

// Hint: if you use a tab character, "\t", between your "columns" it will look nice in the command line

require __DIR__ . "/vendor/autoload.php";

$side= 15;

for($x = 1; $x <= $side; $x += 1){
    if($x % $side === 0){
        $col = $side;
    } else {
        $col = $x % $side;
    }
    for($y = 1; $y <= $side; $y += 1){
        $n = $y * $col;
        echo($n . "\t");
    }
        echo("\n");

}


