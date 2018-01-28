<?php

require_once 'Cat.class.php';

$catA = new Cat('Miu Miu', 3, 'Gray', 4);


$catB = clone $catA;
$catB->setName('Kitty');
$catB->setAge(2);
$catB->setColor('Yellow');
$catB->showInfo();


$catA->showInfo();

echo '<hr><br>';
