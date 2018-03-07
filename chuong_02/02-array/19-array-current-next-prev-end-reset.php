<?php

    /*
    27 PHP Array - 08 Vấn đề 20 - 25

    Vấn đề 20: Truy xuất phần tử của mảng với

    end($array)
    current($array)
    next($array)
    prev($array)
    reset()


    */

    echo $br = '<br>';

    $course = [
        "PHP",
        "Angular",
        "Laravel"
    ];

    echo '<pre>';
    print_r($course);
    echo '</pre>';

    echo 'Current: ' . current($course) . $br;
    echo 'Next: ' . next($course) . $br;
    echo 'Prev: ' . prev($course) . $br;
    echo 'End: ' . end($course) . $br;
    echo 'Reset: ' . reset($course) . $br;

