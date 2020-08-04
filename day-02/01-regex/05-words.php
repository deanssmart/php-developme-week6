<?php

// Create a function, words, that splits a sentence into just words:

require __DIR__ . "/vendor/autoload.php";

function words($str) {
    return preg_split("/[\s^,]+/", $str);
}

dump(words("This is a sentence")); // ["This", "is", "a", "sentence"]
dump(words("Hello, my name is Dolemite")); // ["Hello", "my", "name", "is", "Dolemite"]