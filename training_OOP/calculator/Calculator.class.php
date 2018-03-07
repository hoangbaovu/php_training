<?php

class Calculator
{
    private $firstNumber;
    private $secondNumber;
    private $operator;
    private $result;

    public function setNumber($firstNumber, $secondNumber)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    public function calculate()
    {
        // if ($this->operator == "+") {
        //     $this->result = $this->firstNumber + $this->secondNumber;
        // } elseif ($this->operator == "-") {
        //     $this->result = $this->firstNumber - $this->secondNumber;
        // } else {
        //     $this->result = "Error";
        // }

        switch($this->operator) {
            case "+":
                $this->result = $this->firstNumber + $this->secondNumber;
                break;
            case "-":
                $this->result = $this->firstNumber - $this->secondNumber;
                break;
            case "*":
                $this->result = $this->firstNumber * $this->secondNumber;
                break;
            case "/":
                $this->result = $this->firstNumber / $this->secondNumber;
                break;
            default:
                break;
        }
    }

    public function getResult()
    {
        return $this->result;
    }

    public function getFirstNumber()
    {
        return $this->firstNumber;
    }

    public function getSecondNumber()
    {
        return $this->secondNumber;
    }
}
