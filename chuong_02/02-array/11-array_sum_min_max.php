<?php

    /*
    25 PHP Array - 06 Vấn đề 07 - 13

    Vấn đề 12: Xác định sum, min, max trong mảng

    */

    $br = '<br>';

    $score = [1,2,3,4,5,6,7,8,9];

    $sum = array_sum($score);
    $length = count($score);
    $max = max($score);
    $min = min($score);

    echo '<pre>';
    print_r($score);
    echo '</pre>';

    echo $br . 'Tổng: ' . $sum;
    echo $br . 'Trung bình: ' . $sum/$length;
    echo $br . 'Max: ' . $max;
    echo $br . 'Min: ' . $min;

