<?php

namespace App\Library;

class Book
{
    private $title;
    private $pages;
    private $currentPage = 1;

    public function __construct($title, $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function read($n)
    {
        $this->currentPage += $n;
        return $this;
    }

    public function currentPage()
    {
        return $this->currentPage;
    }
}