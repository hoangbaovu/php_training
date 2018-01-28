<?php

require_once 'Cat.class.php';

class Lion extends Cat
{
    public $height = 1.2;

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($value)
    {
        $this->height = $value;
    }

    public function showInfo()
    {
        echo '<br> Name: ' . $this->getName();
        echo '<br> Color: ' . $this->getColor();
        echo '<br> Age: ' . $this->getAge();
        echo '<br> Weight: ' . $this->getWeight() . ' kg';
        echo '<br> Height: ' . $this->getHeight() . ' m';
    }
}
