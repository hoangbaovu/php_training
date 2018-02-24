<?php

    /*
    25 PHP Array - 06 Vấn đề 07 - 13

    Vấn đề 11: Hoán đổi chỉ số và giá trị của mảng (đảo $key và $value)
    array_flip trả về một mảng có khóa và giá trị được hoán đổi cho nhau so với
    mảng $array (giá trị thành khóa và khóa thành giá trị)
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

    $newArr = array_flip($course);

    echo '<pre>';
    print_r($newArr);
    echo '</pre>';

