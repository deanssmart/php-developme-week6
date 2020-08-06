<?php

// Create two classes Basket and BasketItem. Basket should have an add method which lets you add BasketItems to the basket. It should have a total method that returns the value of all the items' prices. It should have an items method that returns an array of item names.

// Hint: PHP has a number_format function

require __DIR__ . "/vendor/autoload.php";

class Basket
{
    private $items = [];
    
    public function add($item)
    {
        $this->items[] = $item;       
    }

    public function total()
    {
        $sum = 0;
        foreach($this->items as $item){
            $sum += $item->getCost();
        }
        return "£" . number_format($sum, 2);
    }

    public function items()
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
    
    public function __construct($name, $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCost()
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