<?php

// Create a function, stone, that takes a weight in kg and converts it to stone

require __DIR__ . "/vendor/autoload.php";

function stone($kg){
    return $kg * 0.15747;
}

dump(
    stone(74), // 11.65278
    stone(50), // 7.8735
);