<?php

// Create a class that represents a car
declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php";

class Car
{
    private $make;
    private $plate;
    private $mileage = 0;

    public function __construct(string $make, string $plate)
    {
        $this->make = $make;
        $this->plate = $plate;
    }

    public function getNumberPlate() : string
    {
        return $this->plate;
    }

    public function getMake() : string
    {
        return $this->make;
    }

    public function getMileage() : float
    {
        return $this->mileage;
    }

    public function addJourney(float $miles) : Car 
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
