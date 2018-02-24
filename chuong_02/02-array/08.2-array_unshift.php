<?php

    /*
    25 PHP Array - 06 Vấn đề 07 - 13

    Vấn đề 9: Thêm một hoặc nhiều phần tử ở đầu hoặc cuối mảng?
    array_push($array, $val1, $val2, ... , $valn) thêm một hoặc nhiều phần tử
    vào cuối mảng $array. Hàm trả về kiểu số nguyên là số lượng phần tử của mảng
    $array mới

    array_unshift($array, $val1, $val2, ... , $valn) thêm một hoặc nhiều phần tử
    vào đầu mảng $array. Hàm trả về kiểu số nguyên là số lượng phần tử của mảng
    $array mới
    */

    $course = [
        "PHP",
        "Angular",
        "Laravel",
        "Javascript",
    ];

    echo '<pre>';
    print_r($course);
    echo '</pre>';

    echo $length = array_unshift($course, "HTML", "CSS");

    echo '<pre>';
    print_r($course);
    echo '</pre>';

