<?php

// Create a Person class which takes a name and age in the constructor. Also create a House class which has an addDweller() method, which you can pass a person into. The house should keep track of its dwellers.

require __DIR__ . "/vendor/autoload.php";

class Person
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;        
    }

}

class House
{
    public static function census($houses)
    {
        $people = [];

        foreach($houses as $house) {
            $people = array_merge($people, $house->getPeople());
        }
        echo([$people]);
        return $people;
       
        
    }

    private $people = [];

    public function addDweller($person)
    {
        $this->people[] = $person;
        return $this;
    }

    public function getpeople()
    {
        return $this->people;
    }
}

// create some people
$carlton = new Person("Carlton", 25);
$ida = new Person("Ida", 32);
$estelle = new Person("Estelle", 57);
$jana = new Person("Jana", 48);

// create a house and put some peeps in
$house1 = new House();
$house1->addDweller($carlton)
       ->addDweller($ida);

$house2 = new House();
$house2->addDweller($estelle)
       ->addDweller($jana);


// get back an array with all Person objects from the houses
// the actual output will be a bit messier
// but check it has the right number of people
dump(House::census([$house1, $house2])); // [$carlton, $ida, $estelle, $jana]
dump(House::census([$house2])); // [$estelle, $jana]

// // return the average ages of the houses
// dump(House::averageAge([$house1, $house2])); // 40.5
// dump(House::averageAge([$house1])); // 28.5