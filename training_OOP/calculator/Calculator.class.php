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
        if ($this->operator == "+") {
            $this->result = $this->firstNumber + $this->secondNumber;
        } elseif ($this->operator == "-") {
            $this->result = $this->firstNumber - $this->secondNumber;
        } else {
            $this->result = "Error";
        }
    }

    public function getResult()
    {
        return $this->result;
    }
}
