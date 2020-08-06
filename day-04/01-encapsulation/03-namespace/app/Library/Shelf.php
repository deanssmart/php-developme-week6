<?php

namespace App\Library;

class Shelf
{
    private $books = [];

    public function addBook(Book $book) : Shelf
    {
        $this->books[] = $book;
        return $this;
    }

    public function titles() : array
    {
        $titles = [];

        foreach($this->books as $book){
            $titles[] = $book->title();
        }
        
        return $titles;
    }
}