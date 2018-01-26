<?php

require_once 'Cat.class.php';

$arrCatA = [
    'name' => 'Miu Miu',
    'color' => 'Gray',
    'age' => 2,
    'weight' => 1.5,
];

$catA = new Cat($arrCatA);
// $catB = new Cat('Kitty', 'Black', 3);
// $catC = new Cat();

$catA->showInfo();
// $catB->showInfo();
// $catC->showInfo();

// $catA->setName('Miu Miu');
// $catA->setColor('Gray');
// $catA->setAge(2);
// $catA->showInfo();

// $catB = new Cat();
// $catB->setName('Kitty');
// $catB->setColor('Black');
// $catB->setAge(3);
// $catB->showInfo();
