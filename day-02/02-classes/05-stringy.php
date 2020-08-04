<?php

// Create a class that lets you do things with a string.

// Hint: you might want to look at the PHP string functions

require __DIR__ . "/vendor/autoload.php";

class Stringy
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    public function lower()
    {
        return strtolower($this->str);
    }

    public function upper()
    {
        return strtoupper($this->str);
    }

    public function append()
    {
        return $this->str . "blah";
    } 
    
    public function repeat($n)
    {
        return str_repeat($this->str, $n);
    }  

}

$string = new Stringy("Na");

// it can lowercase a string
dump($string->lower()); // "na"

// it can uppercase a string
dump($string->upper()); // "NA"

// it can concatenate
dump($string->append("blah")); // "Nablah"

// it can repeat a string
dump($string->repeat(5)); // "NaNaNaNaNa"