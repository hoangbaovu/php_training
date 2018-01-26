<?php

class Cat
{
    // Properties
    public $name;
    public $color;
    public $age;

    // Method
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
}

$catA = new Cat();
$catA->setName('Miu Miu');
$catA->setColor('Gray');
$catA->setAge(2);

echo '<br> Name:' . $catA->getName();
echo '<br> Color:' . $catA->getColor();
echo '<br> Age:' . $catA->getAge();

$catB = new Cat();
$catB->setName('Kitty');
$catB->setColor('Black');
$catB->setAge(3);

echo '<br> Name:' . $catB->getName();
echo '<br> Color:' . $catB->getColor();
echo '<br> Age:' . $catB->getAge();
