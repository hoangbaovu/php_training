<?php

require_once 'Lion.class.php';

$arrInfo = [
    'name' => 'Lion A',
    'color' => 'Yellow',
    'age' => 3,
    'weight' => 30,
];

$lionA = new Lion($arrInfo);

echo '<pre>';
print_r($lionA);
echo '</pre>';

echo $lionA->showInfo();
