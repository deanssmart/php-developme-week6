<?php

// Create a function, total, that takes an array of shopping item associative arrays and adds their price together.

// Try it using foreach
// Try it using collect()

require __DIR__ . "/vendor/autoload.php";

function total($items) {
    $sum = 0;
    foreach($items as $vals){
        $sum += $vals["price"];
    }
    return $sum;
};

$shoppingList = [[
    "name" => "coffee",
    "price" => 3.50,
], [
    "name" => "tea",
    "price" => 2.50,
], [
    "name" => "toblerone",
    "price" => 3.20,
], [
    "name" => "newspaper",
    "price" => 0.10,
]];

dump(
    total($shoppingList), // 9.3
);