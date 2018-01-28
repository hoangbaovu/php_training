<?php

require_once 'Cat.class.php';

$cat = new Cat('Mimi', 3, 'Black', 4);

$cat->showInfo();

echo '<pre>';
print_r($cat);
echo '</pre>';
