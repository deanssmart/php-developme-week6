<?php

namespace App\Library;

class Library
{
    private $shelves = [];

    public function addShelf(Shelf $shelf) : Library
    {
        $this->shelves[] = $shelf;
        return $this;
    }

    public function titles() : array
    {
        $titles = [];

        foreach($this->shelves as $shelf){
            $titles = array_merge($titles, $shelf->titles());
        }

        return $titles;             
    }

}
