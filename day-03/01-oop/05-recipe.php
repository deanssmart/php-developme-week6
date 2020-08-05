<?php

// Create two classes, one that represents a recipe and one that represents an ingredient

// Hint: you can use "\n" to add a line break to a string

// Hint: PHP has array_search and array_unique methods

require __DIR__ . "/vendor/autoload.php";

class Recipe
{
    private $recipeName;
    private $list = [];
    private $process = "";

    public function __construct($recipeName)
    {
        $this->recipeName = $recipeName;        
    }

    public function addIngredient($name, $amount)
    {
        $this->list[] = [$amount, $name->getName()];
        return $this;
    }

    public function addMethod($method)
    {
        $this->process .= $method;
        return $this;
    }

    public function display()
    {
        return "{$this->recipeName}\n Ingredients\n";
    }

}

class Ingredient
{
    private $name;
    private $notes;

    public function __construct($name, $notes)
    {
        $this->name = $name;
        $this->notes = $notes;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNotes()
    {
        return $this->notes;
    }
}

// ingredients take a name, followed by an array of dietary notes
$flour = new Ingredient("Flour", ["gluten"]);
$eggs = new Ingredient("Eggs", ["animal produce"]);
$sugar = new Ingredient("Sugar", []);
$butter = new Ingredient("Butter", ["dairy", "animal produce"]);

// a recipe takes a name
$cake = new Recipe("Cake");

// we can add ingredients plus amounts
$cake->addIngredient($flour, "200g");
$cake->addIngredient($butter, "100g");
$cake->addIngredient($sugar, "50g");
$cake->addIngredient($eggs, 2);

// we can add a method
$cake->addMethod("Put them in a bowl, mix them together, cook for a bit. Job's a good'un");

// we can see the recipe
// using echo so it looks nicer
echo $cake->display();
/*
    "Cake

    Ingredients

    - 200g Flour
    - 100g Butter
    - 50g Sugar
    - 2 Eggs

    Method

    Put them in a bowl, mix them together, cook for a bit. Job's a good'un"
 */

// we can list dietary information
dump($cake->dietary()); // "gluten, animal produce, dairy"

// is the recipe vegan? (i.e. contains animal produce)
dump($cake->vegan()); // false