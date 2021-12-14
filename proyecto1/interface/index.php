<?php

interface Search
{
    public function all();
}

class User implements Search
{
    public function all(){
        return "obteniendo los users";
    }
}
class Post implements Search
{
    public function all(){
        return "obteniendo los posts";
    }
}