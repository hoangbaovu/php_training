<?php

class Cat {

  // Properties

  var $name   = 'Miu';
  var $color  = 'gray';
  var $age    = '2';
}

$catA = new Cat();

echo '<br /> Name: ' . $catA->name;
echo '<br /> Color: ' . $catA->color;
echo '<br /> Age: ' . $catA->age;
