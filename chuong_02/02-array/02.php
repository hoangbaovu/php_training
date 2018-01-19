<?php
/*
  1. Hiểu như thế nào về array trong PHP

  - Mảng là một biến đặc biệt và có thể lưu trữ nhiều giá trị
  - Một biến thông thường chỉ chứa một giá trị duy nhất,
    nếu chúng ta muốn chứa nhiều giá trị trong một biến thì biến đó phải là một mảng
  - Trong PHP có 3 loại mảng: mảng số nguyên, mảng kết hợp và mảng đa chiều.
*/

  $courses    = [];
  $courses[]  = "PHP";
  $courses[]  = "Zend";
  $courses[]  = "Laravel";

  echo '<pre>';
  print_r($courses);
  echo '</pre>';

?>
