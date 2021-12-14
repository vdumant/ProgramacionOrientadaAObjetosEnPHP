<?php

namespace App;

class Comment
{
    protected $text;
    protected $author;
    protected $category;
    public function __construct($text, Author $author, Category $category)
    {
        $this->text = $text;
        $this->author = $author;
        $this->category = $category;
    }
}
