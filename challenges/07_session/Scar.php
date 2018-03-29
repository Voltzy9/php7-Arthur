<?php

class Scar {
    protected $name;

    public function __construct($name)
{
    $this->name = strtoupper($name);
}
    public function degats():string
{
    return "la Scar fais 35 dégats";
}
    public function _toString()
{
    return "C'est une AR : ";
    }

}
?>