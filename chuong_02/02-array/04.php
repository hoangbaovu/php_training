<?php

    $course = [
        "PHP",
        "Angular",
        "Laravel"
    ];

    echo '<pre>';
    print_r($course);
    echo '</pre>';

    $lastItem = array_pop($course);

    echo '<pre>';
    print_r($course);
    echo '</pre>';

    $firstItem = array_shift($course);

    echo '<pre>';
    print_r($course);
    echo '</pre>';
