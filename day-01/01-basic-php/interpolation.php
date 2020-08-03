<?php

// Without changing the variable values, join the strings together with a space in between (create a separate file for each version):

//     Using concatenation
//     Using interpolation

require __DIR__ . "/vendor/autoload.php";

$string1 = "I";
$string2 = "like";
$string3 = "to";
$string4 = "boogie";
$string5 = "boogie";

$joined = "{$string1} {$string2} {$string3} {$string4} {$string5}";
dump($joined); // "I like to boogie boogie"