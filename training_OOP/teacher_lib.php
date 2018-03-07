<?php

require_once 'class_lib.php';

class Teacher extends Person
{
    public $khoa = "Công Nghệ Thông Tin";

    public function getKhoa()
    {
        return $this->khoa;
    }

    public function setKhoa($value)
    {
        $this->khoa = $value;
    }

    public function showInfo()
    {
        echo '<br> Name: ' . $this->name;
        echo '<br> Age: ' . $this->age;
        echo '<br> Phone: ' . $this->phone;
        echo '<br> Khoa: ' . $this->khoa;
    }
}
