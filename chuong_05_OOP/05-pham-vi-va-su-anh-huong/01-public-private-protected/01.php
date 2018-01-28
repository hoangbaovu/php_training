<?php

class Sample
{
    public $a = 'A';
    private $b = 'B';
    protected $c = 'C';

    public function showInfo()
    {
        echo '<br>Truy cập ở trong lớp';
        echo '<br>public $a: ' . $this->a;
        echo '<br>private $b: ' . $this->b;
        echo '<br>protected $c: ' . $this->c;
    }
}

class Sample2 extends Sample
{
    public function showInfo()
    {
        echo '<br>Truy cập ở trong lớp con';
        echo '<br>public $a: ' . $this->a;
        echo '<br>private $b: ' . $this->b; // không truy cập được
        echo '<br>protected $c: ' . $this->c;
    }
}

$sample = new Sample();
$sample2 = new Sample2();

// echo '<br>Truy cập ở ngoài lớp';
// echo '<br>public $a: ' . $sample->a;
// echo '<br>private $b: ' . $sample->b;
// echo '<br>protected $c: ' . $sample->c;

echo '<hr>';

$sample2->showInfo();
