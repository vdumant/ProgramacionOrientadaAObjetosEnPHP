<?php
namespace App;

class Category
{
    protected $descripcion;
    public function __construct($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}
