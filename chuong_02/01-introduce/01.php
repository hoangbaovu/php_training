<?php
  $n = 20;
  $str = "PHP";

  var_dump($n);
  var_dump($str);

  echo "<br>";
  echo gettype($str);

  echo "<br>";

  if(is_numeric($n)) {
    echo "Number";
  } else {
    echo "Not number";
  }
?>
