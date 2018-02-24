<?php

    // 25 PHP Array - 06 Vấn đề 07 - 13

    // Vấn đề 7: Loại bỏ phần tử trùng nhau trong mảng
    // array_unique loại bỏ những phần tử trùng nhau trong mảng và trả về mảng mới

    $course = [
        "PHP",
        "Angular",
        "Laravel",
        "Javascript",
        "PHP",
        "Laravel",
        "php"
    ];

    echo '<pre>';
    print_r($course);
    echo '</pre>';

    $newArr = array_unique($course);

    echo '<pre>';
    print_r($newArr);
    echo '</pre>';
