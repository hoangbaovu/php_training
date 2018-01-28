<?php

final class Cat
{
    // Properties
    public $name;
    public $color;
    public $age;
    public $weight;

    // Method

    public function __construct($arrInfo)
    {
        $this->name     = $arrInfo['name'];
        $this->color    = $arrInfo['color'];
        $this->age      = $arrInfo['age'];
        $this->weight   = $arrInfo['weight'];
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

    final public function showInfo()
    {
        echo '<br> Name: ' . $this->getName();
        echo '<br> Color: ' . $this->getColor();
        echo '<br> Age: ' . $this->getAge();
        echo '<br> Weight: ' . $this->getWeight() . ' kg';
    }
}
