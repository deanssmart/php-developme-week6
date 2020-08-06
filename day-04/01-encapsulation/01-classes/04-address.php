<?php

// Create a class that represents an address - use different properties for each part of the address. It should have a fullAddress method, which will return the full address as a nicely formatted string.

// Hint: PHP has an implode() function, which is similar to join() in JS
declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php";

class Address
{
    private $street;
    private $postCode;
    private $town;

    public function __construct(string $street, string $postCode, string $town)
    {
        $this->street = $street;
        $this->postCode = $postCode;
        $this->town = $town;
    }

    public function setStreet(string $street) : Address
    {
        $this->street = $street;
        return $this;
    }

    public function setPostcode(string $postCode) : Address
    {
        $this->postCode = $postCode;
        return $this;
    }

    public function setTown(string $town) : Address
    {
        $this->town = $town;
        return $this;
    }

    public function fullAddress() : string
    {
        return implode(", ", [$this->street, $this->town, $this->postCode]);
    }

}


$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
dump($address->fullAddress()); // "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
$address->setStreet("12 Cantelope Way")
        ->setPostcode("SW5 8RQ")
        ->setTown("Swansea");

// logs the new full address neatly
dump($address->fullAddress()); // "12 Cantelope Way, Swansea, SW5 8RQ"