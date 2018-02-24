<?php

    /*
    25 PHP Array - 06 Vấn đề 07 - 13

    Vấn đề 10: Đảo ngược vị trí các phần tử của mảng
    array_reverse đảo ngược vị trí các phần tử của mảng, phần tử cuối trở thành
    phần tử đầu tiên, phần tử kế cuối trở thành phần tử thứ nhì, ... kết quả trả
    về là một mảng mới.
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

    $newArr = array_reverse($course);

    echo '<pre>';
    print_r($newArr);
    echo '</pre>';

