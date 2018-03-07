<?php

require_once 'class_lib.php';

class Student extends Person
{
    public $studentCode = "163232323";

    public function __construct($arrInfo)
    {
        $this->name  = $arrInfo['name'];
        $this->age   = $arrInfo['age'];
        $this->phone = $arrInfo['phone'];
    }

    public function getStudentCode()
    {
        return $this->studentCode;
    }

    public function setStudentCode($value)
    {
        $this->studentCode = $value;
    }

    public function showInfo()
    {
        echo '<br> Name: ' . $this->getName();
        echo '<br> Age: ' . $this->getAge();
        echo '<br> Phone: ' . $this->getPhone();
        echo '<br> Student Code: ' . $this->getStudentCode();
    }
}
