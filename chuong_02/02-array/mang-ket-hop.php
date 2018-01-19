<?php
  /*
    3. Khai báo và sử dụng mảng kết hợp
    - Mảng kết hợp là mảng mà các chỉ sổ của các phần tử có thể là chuỗi hoặc số
      (Mảng kết hợp còn gọi là mảng không liên tục)
    - In danh sách các phần tử trong mảng kết hợp: foreach
  */

  // $courses              = array();
  // $courses["php"]       = "PHP";      // key: php
  // $courses["zend"]      = "Zend";     // key: zend
  // $courses["laravel"]   = "Laravel";  // key: laravel
  // $courses[]            = "Item 1";   // key: 0
  // $courses[]            = "Item 2";   // key: 1


  // Bad

  // $courses = array("php" => "PHP", "zend" => "Zend", "laravel" => "Laravel", 0 => "Item 1", 1 => "Item 2" );

  // Good
  $courses = [
    "php" => "PHP",
    "zend" => "Zend",
    "laravel" => "Laravel",
    0 => "Item 1",
    1 => "Item 2",
  ];

  echo '<pre>';
  print_r($courses);
  echo '</pre>';

  // Array
  // (
  //     [php] => PHP
  //     [zend] => Zend
  //     [laravel] => Laravel
  //     [0] => Item 1
  //     [1] => Item 2
  // )

  if (! empty($courses)) {
    foreach ($courses as $key => $value) {
      echo $key . " : " .$value . "<br>";
    }
  } else {
    echo "Không có mảng";
  }
?>
