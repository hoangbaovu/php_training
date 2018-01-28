<?php

require_once 'Cat.class.php';

class Lion extends Cat
{
    public $maxSpeed = 50;

    public function showInfo()
    {
        echo '<br> Name: ' . parent::getName();
        echo '<br> Color: ' . parent::getColor();
        echo '<br> Age: ' . parent::getAge();
        echo '<br> Weight: ' . parent::getWeight() . ' kg';
        echo '<br> Max Speed: ' . $this->maxSpeed . ' km/h';

        // parent::showInfo();
        echo '<br> Lion';
    }
}
