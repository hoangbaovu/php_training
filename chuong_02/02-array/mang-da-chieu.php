<?php
  /*
    4. Mảng đa chiều
    - Mảng đa chiều là mảng mà mỗi phần tử trong mảng chính có thể là một mảng
    và mỗi phần tử trong mảng con lại cũng có thể là một mảng (Mảng đa chiều còn
    được gọi là mảng lồng)
    - In phần tử, in sách các phần tử trong mảng đa chiều: foreach
  */

  // Quản lý thông tin sinh viên
  // SV1 name, sex, score

  // Cách 1

  $students = array();
  $students["SV01"] = array("name" => "John", "sex" => 1, "score" => array(4, 5, 6));
  $students["SV02"] = array("name" => "Doe", "sex" => 0, "score" => array(5, 6, 7));
  $students["SV03"] = array("name" => "Marry", "sex" => 0, "score" => array(7, 8, 9));

  // Cách 2
  $student = array(
    "SV01" => array("name"  => "John",
                    "sex"   => 1,
                    "score" => array(4, 5, 6)
              ),
    "SV02" => array("name"  => "Doe",
                    "sex"   => 0,
                    "score" => array(5, 6, 7)
              ),
    "SV03" => array("name"  => "Marry",
                    "sex"   => 0,
                    "score" => array(7, 8, 9)
              ),
  );

  echo '<pre>';
  print_r($student);
  echo '</pre>';
?>
