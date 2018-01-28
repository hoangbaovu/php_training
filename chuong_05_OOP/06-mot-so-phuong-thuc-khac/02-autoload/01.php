<?php

function __autoload($className)
{
    $path = '/class';
    require_once $path . "/{$className}.class.php";
}

$cat = new Cat('Miu Miu', 3, 'Gray', 4);
$cat->showInfo();

$lion = new Lion('Lion', 20, 'Gray', 40);
$lion->showInfo();
