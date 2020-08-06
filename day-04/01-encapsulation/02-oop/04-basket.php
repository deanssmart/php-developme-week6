<?php

// Create two classes Basket and BasketItem. Basket should have an add method which lets you add BasketItems to the basket. It should have a total method that returns the value of all the items' prices. It should have an items method that returns an array of item names.

// Hint: PHP has a number_format function
declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php";

class Basket
{
    private $items = [];
    
    public function add(BasketItem $item) : Basket
    {
        $this->items[] = $item; 
        return $this;      
    }

    public function total() : string
    {
        $sum = 0;
        foreach($this->items as $item){
            $sum += $item->getCost();
        }
        return "£" . number_format($sum, 2);
    }

    public function items() : array
    {
        $names = [];
        foreach($this->items as $item){
            $names[] = $item->getName();
        }
        return $names;
    }
}

class BasketItem
{
    private $name;
    private $cost;
    
    public function __construct(string $name, float $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getCost() : float
    {
        return $this->cost;
    }

}

$basket = new Basket();

$item1 = new BasketItem("coffee", 3.50);
$item2 = new BasketItem("tea", 2.50);

$basket->add($item1);
$basket->add($item2);

dump($basket->total()); // £6.00
dump($basket->items()); // ["coffee","tea"]