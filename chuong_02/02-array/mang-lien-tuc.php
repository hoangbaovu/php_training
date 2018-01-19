<?php
  /*

  2. Khai báo và sử dụng mảng số nguyên

  - Mảng số nguyên là mảng mà các chỉ số của các phần tử phải thuộc kiểu số nguyên
  (Mảng số nguyên còn được gọi là mảng liên tục)
  - Tìm hiểu các truy cập vào phần tử của mảng và in mảng


  */

  // Cách 1

  // $courses    = [];
  // $courses[]  = "PHP";
  // $courses[]  = "Zend";
  // $courses[]  = "Laravel";

  // // Cách 2

  // $courses    = [];
  // $courses[0]  = "PHP";
  // $courses[1]  = "Zend";
  // $courses[2]  = "Laravel";

  // Cách 3

  $courses = ["PHP", "Zend", "Laravel"];

  // echo $courses[1];

  // if(! empty($courses)) {
  //   for ($i=0; $i < count($courses); $i++) {
  //     echo $courses[$i] . "<br>";
  //   }
  // } else {
  //   echo "Không có phần tử";
  // }

  echo '<pre>';
  print_r($courses);
  echo '</pre>';

  // foreach

  if (! empty($courses)) {
    foreach ($courses as $key => $value) {
      echo $value . '<br>';
    }
  } else {
    echo 'Không có phần tử';
  }

  /*
    Array
    (
        [0] => PHP
        [1] => Zend
        [2] => Laravel
    )
  */
?>
