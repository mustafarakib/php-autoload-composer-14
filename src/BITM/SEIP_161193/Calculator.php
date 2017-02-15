<?php

namespace App;

class Calculator
{
    private $number1;
    private $number2;
    private $operation;
    private $result;

    public function setNumber1($number1){
        $this->number1 = $number1;
    }

    public function setNumber2($number2){
        $this->number2 = $number2;
    }

        public function setOperation($operation){
            $this->operation = $operation;
        }

    public function getNumber1(){
        return $this->number1;
    }

    public function getNumber2(){
        return $this->number2;
    }

        public function getOperation(){
            return $this->operation;
        }

    public function setResult(){
        switch($this->operation) {
            case "Addition":
                $this->result= $this->doAddition();
                break;
            case "Subtraction":
                $this->result= $this->doSubtraction();
                break;
            case "Multiplication":
                $this->result= $this->doMultiplication();
                break;
            case "Division":
                $this->result= $this->doDivision();
        }
    }

    public function getResult(){
        $this->setResult();
        return $this->result;
    }

    private function doAddition(){
        return $this->number1 + $this->number2;
    }
    private function doSubtraction(){
        return $this->number1 - $this->number2;
    }
    private function doMultiplication(){
        return $this->number1 * $this->number2;
    }
    private function doDivision(){
        return $this->number1 / $this->number2;
    }
}
