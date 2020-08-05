<?php

// Create two classes Basket and BasketItem. Basket should have an add method which lets you add BasketItems to the basket. It should have a total method that returns the value of all the items' prices. It should have an items method that returns an array of item names.

// Hint: PHP has a number_format function

require __DIR__ . "/vendor/autoload.php";

class Basket
{
    private $items = [];
    private $sum = 0;
    private $names = [];

    public function add($item)
    {
        $this->items[] = $item;       
    }

    public function total()
    {
        foreach($this->items as $item){
            $this->sum += $item->getCost();
        }
        return "£" . number_format($this->sum, 2);
    }

    public function items()
    {
        foreach($this->items as $item){
            $this->names[] = $item->getName();
        }
        return $this->names;
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