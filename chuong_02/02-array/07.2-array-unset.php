<?php

    // 25 PHP Array - 06 Vấn đề 07 - 13

    // Vấn đề 8: Xóa phần tử ở vị trí bất kỳ của mảng
    // Sử dụng hàm unset để xóa bỏ phần tử ở vị trí bất kỳ trong mảng

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

    unset($course[0], $course[1]);

    echo '<pre>';
    print_r($course);
    echo '</pre>';
