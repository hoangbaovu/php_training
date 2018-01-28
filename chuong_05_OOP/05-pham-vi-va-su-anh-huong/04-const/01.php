<?php

class Sample
{
    const MONEY     = 1000;

    public $money   = 'This is a test <br>';

    public function showInfo()
    {
        echo '<h2>C1: ' .  Sample::MONEY;
        echo '</h2>';

        echo '<h2>C2: ' .  self::MONEY;
        echo '</h2>';

        echo '<h2>C3: ' .  $this::MONEY;
        echo '</h2>';
    }
}

$sample = new Sample();

echo $sample->money;
echo Sample::MONEY;
echo $sample->showInfo();
