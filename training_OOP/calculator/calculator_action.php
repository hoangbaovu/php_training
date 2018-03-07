<?php

if (isset($_POST['calculation'])) {
    $firstNumber = $_POST["firstNumber"];
    $secondNumber = $_POST["secondNumber"];
    $operator = $_POST["operator"];

    $caculator = new Calculator();
    $caculator->setNumber($firstNumber, $secondNumber);
    $caculator->setOperator($operator);
    $caculator->calculate();
    echo $caculator->getResult();
}
