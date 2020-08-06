<?php

// Create a class that represents a light switch
declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php";

class LightSwitch
{
    private $on = false;

    public function isOn() : bool
    {
        return $this->on;
    }

    public function turnOn() : LightSwitch
    {
        $this->on = true;
        return $this;
    }

    public function turnOff() : LightSwitch
    {
        $this->on = false;
        return $this;
    }
}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
dump($lightSwitch->isOn()); // false

// you can turn it on
dump($lightSwitch->turnOn()->isOn()); // true
dump($lightSwitch->turnOff()->isOn()); // false
