<?php

    /*
    26 PHP Array - 07 Vấn đề 14 - 19

    Vấn đề 17: Kiểm tra một $key hoặc $value nào đó có tồn tại trong mảng hay không?

    array_key_exists ($key, $array) kiểm tra khóa $key có tồn tại trong mảng
    $array hay không? Nếu có trả về giá trị true.

    in_array ($value, $array) kiểm tra giá trị $value có tồn tại trong mảng $arr
    hay không? Nếu có trả về giá trị true.

    */

    $course = [
        "php" => "PHP",
        "angular" => "Angular",
        "laravel" => "Laravel"
    ];

    if(array_key_exists("php", $course)) {
        echo "Exists";
    }

