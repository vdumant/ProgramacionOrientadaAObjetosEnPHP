<?php

namespace App;

class Author extends User
{
    protected $code;

    public function __construct($name, $code)
    {
        parent::__construct($name);
        $this->code = $code;
    }
}
