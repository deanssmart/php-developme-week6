<?php

// Create a function validEmail that takes a string, trims any whitespace at the beginning/end of the string (using preg_replace) and then returns if the trimmed string is a valid email:

//     Hint: you can use ( to group ) parts of a regex and | as or

require __DIR__ . "/vendor/autoload.php";

function validEmail($str) {
    $email = preg_replace("/^[\s]+|[\s]+$/", "", $str);
    return filter_var($email, FILTER_VALIDATE_EMAIL) === $email;

}

dump(validEmail(" blahf   ")); // false
dump(validEmail(" blah@f")); // false
dump(validEmail("blah@ fish.horse")); // false
dump(validEmail(" blah@fish.horse")); // true
dump(validEmail("blah@fish.horse ")); // true
dump(validEmail(" blah@fish.horse ")); // true