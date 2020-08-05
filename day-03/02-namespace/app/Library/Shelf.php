<?php

namespace App\Library;

class Shelf
{
    private $books = [];

    public function addBook($book)
    {
        $this->books[] = $book;
        return $this;
    }

    public function titles()
    {
        $titles = [];

        foreach($this->books as $book){
            $titles[] = $book->title();
        }
        
        return $titles;
    }
}