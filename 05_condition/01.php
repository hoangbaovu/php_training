<?php
    // $number = 21;
    // if($number % 2 == 0) {
    //     $result = "So chan";
    // } else {
    //     $result = "So Le";
    // }

    // // $result = ($number % 2 == 0) ? "So Chan" : "So Le";

    // echo $result;


    // $number = -11;
    // $n = $number % 2;

    // if ($number >= 0 && $n == 0) {
    //     $result = "Nguyen duong chan";
    // } else if ($number >= 0 && $n == 1) {
    //     $result = "Nguyen duong le";
    // } else if ($number < 0 && $n == 0) {
    //     $result = "Nguyen am chan";
    // } else {
    //     $result = "Nguyen am le";
    // }

    // echo $result;

    $number = -11;
    $n = $number % 2;

    $resultFirst = ($number > 0) ? "Nguyen duong" : "Nguyen am";
    $resultLast  = ($n == 0) ? "Chan" : "Le";

    $result = $resultFirst . " " . $resultLast;
    echo $result;