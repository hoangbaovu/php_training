<?php

    /*
    25 PHP Array - 06 Vấn đề 07 - 13

    Vấn đề 13: Thống kê số lần xuất hiện của các phần tử trong mảng

    */

    $br = '<br>';

    $score = [1,2,1,4,3,2,1,5,2];

    $newArr = array_count_values($score);

    echo '<pre>';
    print_r($newArr);
    echo '</pre>';


