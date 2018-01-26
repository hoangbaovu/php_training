<?php

require_once 'Cat.class.php';

$catA = new Cat();
$catA->setName('Miu Miu');
$catA->setColor('Gray');
$catA->setAge(2);
$catA->showInfo();

$catB = new Cat();
$catB->setName('Kitty');
$catB->setColor('Black');
$catB->setAge(3);
$catB->showInfo();
