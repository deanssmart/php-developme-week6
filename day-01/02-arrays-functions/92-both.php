<?php

// Create a function, both, that takes two arrays. Return a new array containing any value that is in both arrays.

// Hint: stick to things you've been taught and try not to Google/Stack Oveflow it

require __DIR__ . "/vendor/autoload.php";

function both($arr1, $arr2) {
    $newArr = [];
    for($i = 0; $i < count($arr1); $i += 1){
        for($j = 0; $j < count($arr2); $j += 1){
            if($arr1[$i] === $arr2[$j]){
                $newArr[] = $arr1[$i];
            }
        }
    }
    return $newArr;
}

dump(
    both([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
);




// function both($first, $second) {
//     $both = [];

//     foreach ($first as $firstVal) {
//         foreach ($second as $secondVal) {
//             if ($firstVal === $secondVal) {
//                 $both[] = $firstVal;
//             }
//         }
//     }

//     return $both;
// }