<?php

// write some code that will output the numbers 1 to 100 in the console
// unless the number is divisible by 3, in which case output "Fizz"
// or the number is divisible by 5, in which case output "Buzz"
// if the number is divisible by 3 and 5, output "FizzBuzz"
// The first lines of output should look like this:

// 1
// 2
// Fizz
// 4
// Buzz
// Fizz
// 7
// 8
// Fizz
// Buzz
// 11
// Fizz
// 13
// 14
// FizzBuzz
// 16
// ...
// Make sure it's a nice elegant solution.

require __DIR__ . "/vendor/autoload.php";

for($i = 1; $i <= 100; $i += 1){
    $str = $i % 3 === 0 ? "Fizz" : "";
    $str .= $i % 5 === 0 ? "Buzz" : "";
    dump($str === "" ? $i : $str);
};
