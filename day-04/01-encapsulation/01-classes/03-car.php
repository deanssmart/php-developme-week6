<?php

// Create a class that represents a car

require __DIR__ . "/vendor/autoload.php";

class Car
{
    private $make;
    private $plate;
    private $mileage = 0;

    public function __construct($make, $plate)
    {
        $this->make = $make;
        $this->plate = $plate;
    }

    public function getNumberPlate()
    {
        return $this->plate;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getMileage()
    {
        return $this->mileage;
    }

    public function addJourney($miles)
    {
        $this->mileage += $miles;
        return $this;
    }
}

// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");

// you can get various bits of information about it
dump($car->getNumberplate()); // "XY11 4TY"
dump($car->getMake()); // "Ford"
dump($car->getMileage()); // 0

// you can add journey
dump($car->addJourney(100)->getMileage()); // 100
dump($car->addJourney(200)->getMileage()); // 300
