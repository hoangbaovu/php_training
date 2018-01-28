<?php

require_once 'Cat.class.php';

$cat = new Cat();
$cat->name = 'Mimi';
$cat->age = 100;
$cat->color = 'White';

// echo $cat->name . '<br>';
echo $cat->color . '<br>';
$cat->showInfo();
