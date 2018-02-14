<?php

    $course = [
        "name"  => "PHP",
        "time"  => 200
    ];

    echo '<pre>';
    print_r($course);
    echo '</pre>';

    // Lấy giá trị

    $newArr = array_values($course);

    echo '<pre>';
    print_r($newArr);
    echo '</pre>';

    // Lấy key

    $newArrKey = array_keys($course);

    echo '<pre>';
    print_r($newArrKey);
    echo '</pre>';


