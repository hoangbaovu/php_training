<?php

require_once 'Lion.class.php';

$lion = new Lion('Lion A', 3, 'Brow', 20);

$lion->showInfo();
echo '<pre>';
print_r($lion);
echo '</pre>';
