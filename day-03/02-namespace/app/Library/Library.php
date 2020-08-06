<?php

namespace App\Library;

class Library
{
    private $shelves = [];

    public function addShelf($shelf)
    {
        $this->shelves[] = $shelf;
        return $this;
    }

    public function titles()
    {
        $titles = [];

        foreach($this->shelves as $shelf){
            $titles = array_merge($titles, $shelf->titles());
        }

        return $titles;             
    }

}
