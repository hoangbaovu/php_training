<?php

class Person
{
    // Properties
    public $name;
    public $age;
    public $phone;

    // Method

    public function __construct($arrInfo)
    {
        $this->name     = $arrInfo['name'];
        $this->age      = $arrInfo['age'];
        $this->phone    = $arrInfo['phone'];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getphone()
    {
        return $this->phone;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function setAge($value)
    {
        $this->age = $value;
    }

    public function setPhone($value)
    {
        $this->phone = $value;
    }

    public function showInfo()
    {
        echo '<br> Name: ' . $this->name;
        echo '<br> Age: ' . $this->age;
        echo '<br> Phone: ' . $this->phone;
    }
}

class Hinh {
    public function __call($method_name, $parameter)
    {

    }
}
