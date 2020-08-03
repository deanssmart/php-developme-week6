<?php

// Create a function, oap, that takes an associative array with an age property. It should return true if the age property is greater than 65 otherwise it should return false.

require __DIR__ . "/vendor/autoload.php";

function oap($person) {
    return $person["age"] > 65;
}

$a = [ "name" => "Alice", "age" => 52 ];
$b = [ "name" => "Bob", "age" => 67 ];
$c = [ "name" => "Charlie", "age" => 24 ];
$d = [ "name" => "Bob", "age" => 97 ];

dump(
    oap($a), // false
    oap($b), // true
    oap($c), // false
    oap($d), // true
);