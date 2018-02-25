<?php

    /*
    26 PHP Array - 07 Vấn đề 14 - 19

    Vấn đề 14: Kết hợp các mảng lại với nhau

    */

    $array1 = ["a", "b", "c"];
    $array2 = [2, 4, 6];
    $array3 = ["php" => "PHP", "angular" => "Angular"];

    $newArr = array_merge($array1, $array2, $array3);

    echo '<pre>';
    print_r($newArr);
    echo '</pre>';

