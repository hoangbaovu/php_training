<?php

    /*
    26 PHP Array - 07 Vấn đề 14 - 19

    Vấn đề 16: Tìm kiếm phần tử trong mảng

    array_search ($value, $array)

    */

    $course = [
        "php" => "PHP",
        "angular" => "Angular",
        "laravel" => "Laravel"
    ];

    echo $key1 = array_search("Laravel", $course);
    echo $key1 = array_search("PHP", $course);

