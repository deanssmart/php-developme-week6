<?php

namespace App\Library;

class Book
{
    private $title;
    private $pages;
    private $currentPage = 1;

    public function __construct(string $title, int $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function read(int $n) : Book
    {
        $this->currentPage += $n;
        return $this;
    }

    public function currentPage() : int
    {
        return $this->currentPage;
    }

    public function title() : string
    {
        return $this->title;
    }
}