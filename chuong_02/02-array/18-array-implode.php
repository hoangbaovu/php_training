<?php

    /*
    26 PHP Array - 07 Vấn đề 14 - 19

    Vấn đề 18: Chuyển đổi qua lại giữa mảng và chuỗi

    implode ($strr, $array) chuyển các giá trị của $array thành một chuỗi
    bao gồm các phần tử cách nhay bởi ký tự $str

    explode ($delimiter, $str) chuyển một chuỗi thành một mảng.
    Tách chuỗi dựa vào $delimiter, mỗi đoạn tách ra sẽ thành một phần tử
    của mảng mới.

    */

    $course = [
        "PHP",
        "Angular",
        "Laravel"
    ];

    echo $srt = implode("--", $course);

    $fullName = "Nguyễn Văn A";

    $array = explode(" ", $fullName);

    echo '<pre>';
    print_r($array);
    echo '</pre>';
