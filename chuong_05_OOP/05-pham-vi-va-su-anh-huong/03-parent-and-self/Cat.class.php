<?php

class Cat
{
    // Properties
    public $name;
    public $color;
    public $age;
    public $weight;
    public $maxSpeed = 20;

    // Method

    public function __construct($name = 'Miu Miu', $age = 3, $color = 'Gray', $weight = 1)
    {
        $this->name     = $name;
        $this->age      = $age;
        $this->color    = $color;
        $this->weight   = $weight;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function setColor($value)
    {
        $this->color = $value;
    }

    public function setAge($value)
    {
        $this->age = $value;
    }

    public function setWeight($value)
    {
        $this->weight = $value;
    }

    public function showInfo()
    {
        echo '<br> Name: ' . $this->getName();
        echo '<br> Color: ' . $this->getColor();
        echo '<br> Age: ' . $this->getAge();
        echo '<br> Weight: ' . $this->getWeight() . ' kg';
        echo '<br> Max Speed: ' . $this->maxSpeed . ' km/h';
        // echo '<br> Max Speed: Cat ' . Cat::$maxSpeed . ' km/h';
    }
}
