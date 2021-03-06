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

  // $students = [];
  // $students["SV01"] = ["name" => "John", "sex" => 1, "score" => [4, 5, 6]];
  // $students["SV02"] = ["name" => "Doe", "sex" => 0, "score" => [5, 6, 7]];
  // $students["SV03"] = ["name" => "Marry", "sex" => 0, "score" => [7, 8, 9]];

  // Cách 2
  $students = [
    "SV01" => [
                "name"  => "John",
                "sex"   => 1,
                "score" => [4, 5, 6],
              ],
    "SV02" => [
                "name"  => "Doe",
                "sex"   => 0,
                "score" => [5, 6, 7],
              ],
    "SV03" => [
                "name"  => "Marry",
                "sex"   => 0,
                "score" => [7, 8, 9],
              ],
  ];

  // echo '<pre>';
  // print_r($students["SV01"]["name"]);
  // echo '</pre>';

  // // Tên sinh viên 01

  // echo $students["SV01"]["name"];

  // echo "<br>";

  // // Điểm môn thứ 2 của SV02

  // echo $students["SV02"]["score"][1];

  // echo "<br>";

  // // Thay đổi tên của SV03 thành Anne

  // $students["SV03"]["name"] = "Anne";

  // // Thay đổi điểm của SV03 môn 2 thành 10;

  // $studens["SV03"]["score"][1] = 10;

  // echo '<pre>';
  // print_r($students);
  // echo '</pre>';

  // Duyệt qua mảng

  $score = [6, 7, 8, 9];

  // if (! empty($students)) {
  //   foreach ($students as $key => $value) {
  //     $name = $value["name"];
  //     $sex  = (($value["sex"]==1) ? "Boy" : "Girl");
  //     $score = $value["score"];

  //     $total = 0;
  //     for ($i=0; $i< count($score); $i++) {
  //       $total += $score[$i];
  //     }

  //     echo "Name: " . $name . " - sex: " . $sex . " - score: " . $total . "<br>";
  //   }
  // }

  if (! empty($students)) {
    foreach ($students as $key => $value) {
      $name = $value["name"];
      $sex  = (($value["sex"]==1) ? "Boy" : "Girl");
      $score = array_sum($value["score"]);

      echo 'Name: ' . $name . ' - Sex: ' . $sex . ' - Score: ' . $score . '<br>';
    }
  }
?>
