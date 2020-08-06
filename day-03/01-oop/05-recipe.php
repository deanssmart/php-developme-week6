<?php

// Create two classes, one that represents a recipe and one that represents an ingredient

// Hint: you can use "\n" to add a line break to a string

// Hint: PHP has array_search and array_unique methods

require __DIR__ . "/vendor/autoload.php";

class Recipe
{
    private $name;
    private $ingredients = [];
    private $method = "";

    public function __construct($name)
    {
        $this->name = $name;        
    }

    public function addIngredient($ingredient, $amount)
    {
        $this->ingredients[] = [
            "ingredient" => $ingredient,
            "amount" => $amount
        ];
        return $this;
    }

    public function addMethod($method)
    {
        $this->method .= $method;
        return $this;
    }

    public function display()
    {
        $ingredients = [];

        foreach($this->ingredients as $item){
            $ingredient = $item["ingredient"];
            $ingredients[] = "- {$item["amount"]} {$ingredient->getName()}";
        }

        $recipe = [
            $this->name,
            "Ingredients",
            join("\n", $ingredients),
            "Method",
            $this->method,
        ];

        return join("\n\n", $recipe);
    }

    private function getDietary()
    {
        $dietary = [];

        foreach($this->ingredients as $item){
            $ingredient = $item["ingredient"];
            $dietary = array_merge($dietary, $ingredient->getNotes());
        }

        return array_unique($dietary);
    }

    public function dietary()
    {
        return join(", ", $this->getDietary());
    }

    public function vegan()
    {
        return array_search("animal produce", $this->getDietary()) === false;
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