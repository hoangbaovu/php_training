<?php

    /*
    26 PHP Array - 07 Vấn đề 14 - 19

    Vấn đề 18: Chuyển đổi các key trong mảng thành chữ hoa, chữ thường

    array_change_key_case($array, case)

    */

    $course = [
        "pHp" => "PHP",
        "angular" => "Angular",
        "laravel" => "Laravel"
    ];

    echo '<pre>';
    print_r($course);
    echo '</pre>';

    $newArr = array_change_key_case($course, CASE_UPPER);

    echo '<pre>';
    print_r($newArr);
    echo '</pre>';
