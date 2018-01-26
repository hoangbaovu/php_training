<?php

class Cat
{
    // Properties
    public $name    = 'Miu';
    private $color  = 'gray';
    protected $age  = '2';

    // Method
    public function getColor()
    {
        return $this->color;
    }
}

$catA = new Cat();

echo '<br /> Name: ' . $catA->name;
echo '<br /> Color: ' . $catA->getColor();
