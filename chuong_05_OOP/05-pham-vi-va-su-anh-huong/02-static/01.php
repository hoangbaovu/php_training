<?php

class Sample
{
    static $a = 1000;

    public static function showInfo()
    {
        echo '<br>';
        echo '<h3>showInfo</h3>';
    }
}

// $sample = new Sample();

// echo 'Static $a : ' . Sample::$a;

// $sample->showInfo();


Sample::showInfo();
