<?php

require __DIR__ . "/vendor/autoload.php";

// Challenges

// Create a class Hello in the App namespace. It should have a method called hello which accepts a string. Don't overthink this one! It's more about the namespaces than the class.

echo "\nQuestion 1:\n";

use App\Hello;

$sayHi = new Hello();

dump($sayHi->hello("Orb")); // "Hello Orb"
dump($sayHi->hello("Horse")); // "Hello Horse"