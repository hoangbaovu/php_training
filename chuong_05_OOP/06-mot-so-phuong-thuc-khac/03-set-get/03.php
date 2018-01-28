<?php

require_once 'Cat2.class.php';

$cat = new Cat2();
$cat->name = 'Mimi';
$cat->age = 10;
$cat->color = 'White';

echo '<pre>';
print_r($cat);
echo '</pre>';

echo $cat->name;
