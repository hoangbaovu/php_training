<?php

class Cat {

  // Properties

  public $name   = 'Miu';
  private $color  = 'gray';
  protected $age    = '2';
}

$catA = new Cat();

echo '<br /> Name: ' . $catA->name;
echo '<br /> Color: ' . $catA->color;
echo '<br /> Age: ' . $catA->age;
