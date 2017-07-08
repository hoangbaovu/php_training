<?php
    $userName = $_POST["email"];
    $passWord = $_POST["password"];
    
    $result = ($userName == "admin" && $passWord == "123456") ? "Dang nhap thanh Cong" : "Dang Nhap That Bai";
    echo $result;

?>