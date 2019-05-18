<?php

$string = 'Taen';
var_dump($string);

$int = 10;
var_dump($int);

$double = 20.3;
var_dump($double);

$boolean = true;
var_dump($boolean);

$array = ['Taen', 'Tamim', 'Tarif'];
var_dump($array);

$null = null;
var_dump($null);

// Object Data Type
class Person
{
    public $name = 'Taen';

    public function getName()
    {
        return $this->name;
    }
}

$p = new Person();
echo ($p->getName());
