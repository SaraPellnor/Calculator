<?php

class Calculator {

    private $num1;
    private $num2;
    private $operator;

    function __construct ($num1,$num2, $operator) {
        $this -> num1 = $num1;
        $this -> num2 = $num2;
        $this -> operator = $operator;
    }

    function getNum1() {
        return $this -> num1;
    }

    function getNum2() {
        return $this -> num2;
    }

    function getOperator() {
        return $this -> operator;
    }

    function calculate() {
        switch ($this -> operator){
            case "add":
                return $this -> num1 + $this -> num2;
                break;
            case "sub":
                return $this -> num1 - $this -> num2;
                break;
            case "div":
                return $this -> num1 / $this -> num2;
                break;
            case "mul":
                return $this -> num1 * $this -> num2;
                break;
        }
    }













}