<?php

abstract class Base
{
    protected $name;
    private function getClassName()
    {
        return get_called_class();
    }
    public function login()
    {
        return "mi nombre es $this->name desde la clase {$this->getClassName()}";
    }
    // public function get()
    // {
    // }
    // abstract public function store();
}

class User extends Base
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Guest extends Base
{
    protected $name = 'Invitado';
}

$guest = new Guest();
echo $guest->login();