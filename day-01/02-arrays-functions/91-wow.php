<?php

// Create a function, wow, that takes a number, n, as an argument. The function should return the word "Wo...ow", where there are n "o"s.

// Note: only use things that you've been taught to solve this

require __DIR__ . "/vendor/autoload.php";

function wow($n) {
    $repeat = "";
    for($i = 0; $i < $n; $i += 1){
        $repeat .= "o";
    }
return "W{$repeat}w";
}

dump(wow(12)); // "Woooooooooooow"
dump(wow(4)); // "Woooow"