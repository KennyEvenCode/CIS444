<?php

class calculator {

    private $no1;
    private $no2;

    private $ans1 = 21;
    private $ans2 = 34;

    public function __construct($no1, $no2) {
        $this->no1 = $no1;
        $this->no2 = $no2;
    }

    public function checkInput() {
        // Validation 
        if ($this->isSet() == false){
            // Error: Please Guess Two Numbers
            $input = "location: ../index.php?status=missingNumber&number1=".$this->no1."&number2=".$this->no2;
            header($input);
            exit();
        }
        if ($this->isValid() == false){
            // Error: Not a Number!
            $pattern = "/^[0-9]*$/";
            if (!preg_match($pattern, $this->no1) && !preg_match($pattern, $this->no1)) {
                $input = "location: ../index.php?status=invalid";
            }
            if (!preg_match($pattern, $this->no1)) {
                $input = "location: ../index.php?status=invalid&number2=".$this->no2;
            }                
            if (!preg_match($pattern, $this->no2)) {
                $input = "location: ../index.php?status=invalid&number1=".$this->no1;
            }
            header($input);
            exit();
        }
        if ($this->isCorrect() == true){
            // Correct
            $input = "location: ../index.php?status=success&number1=".$this->no1."&number2=".$this->no2;
            header($input);       
            exit();
        }
        if ($this->isCorrect() == false){
            // Correct
            $input = "location: ../index.php?status=incorrect&number1=".$this->no1."&number2=".$this->no2;
            header($input);    
            exit();
        }
        $input = "location: ../index.php?number1=".$this->no1."&number2=".$this->no2;
        header($input);
    }

    private function isSet() {
        if (empty($this->no1) || empty($this->no2)) {
            return false;
        }
        else {
            return true;
        } 
    }

    private function isValid() {
        $pattern = "/^[0-9]*$/";
        if (!preg_match($pattern, $this->no1)) {
            return false;
        }                
        if (!preg_match($pattern, $this->no2)) {
            return false;
        }
        return true; 
    }

    private function isCorrect() {
        if ($this->no1 == $this->ans1 && $this->no2 == $this->ans2) {
            return true;
        }
        else {
            return false;
        } 
    }

}