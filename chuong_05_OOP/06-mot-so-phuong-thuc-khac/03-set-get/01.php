<?php

require_once 'Cat.class.php';

$cat = new Cat();
$cat->name = 'Mimi';
$cat->age = 100;

echo $cat->name . '<br>';
$cat->showInfo();
