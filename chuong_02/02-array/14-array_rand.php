<?php

    /*
    26 PHP Array - 07 Vấn đề 14 - 19

    Vấn đề 15: Lấy ngẫu nhiên chỉ số $key của một mảng nào đó

    array_rand ($array, $number) Lấy ngẫu nhiên $number phần tử từ mảng $array
    và đưa vào mảng mới (Lấy giá trị khóa)

    */

    $course = [
        "php" => "PHP",
        "angular" => "Angular",
        "laravel" => "Laravel"
    ];

    $keyArr = array_rand($course, 2);

    echo '<pre>';
    print_r($keyArr);
    echo '</pre>';

