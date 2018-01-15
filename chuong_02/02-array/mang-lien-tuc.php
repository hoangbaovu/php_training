<?php
  /*

  2. Khai báo và sử dụng mảng số nguyên

  - Mảng số nguyên là mảng mà các chỉ số của các phần tử phải thuộc kiểu số nguyên
  (Mảng số nguyên còn được gọi là mảng liên tục)
  - Tìm hiểu các truy cập vào phần tử của mảng và in mảng


  */

  // Cách 1

  // $courses    = array();
  // $courses[]  = "PHP";
  // $courses[]  = "Zend";
  // $courses[]  = "Laravel";

  // // Cách 2

  // $courses    = array();
  // $courses[0]  = "PHP";
  // $courses[1]  = "Zend";
  // $courses[2]  = "Laravel";

  // Cách 3

  $courses    = array("PHP", "Zend", "Laravel");

  // echo $courses[1];

  if(!empty($courses)) {
    for($i=0; $i < count($courses); $i++) {
      echo $courses[$i] . "<br>";
    }
  } else {
    echo "Không có phần tử";
  }

?>
