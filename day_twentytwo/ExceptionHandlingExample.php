<?php
// exception handling in php
class ExceptionHandlingExample {
    public function divide($param_num_one, $param_num_two){
        try {
            $result = $param_num_one / $param_num_two;
            echo "Result: Division of Num One by Num Two: {$result} <br />";
        } catch (Exception $e){
            echo "Error: {$e->getMessage()} <br />";
            echo "Message: Cannot divide whole number by Zero. 
            Since Number Two is zero";
        }
    }
}

$exm = new ExceptionHandlingExample();

// case 1: regular number
$exm->divide(123, 3);
// case 2: zero
$exm->divide(123, 0);