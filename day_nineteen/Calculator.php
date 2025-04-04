<?php
class Calculator {
    public $number_one;
    public $number_two;
    // parameterized constructor
    public function __construct($param_number_one, $param_number_two){
        $this->number_one = $param_number_one;
        $this->number_two = $param_number_two;
    }

    // sum - adding two numbers
    // method with return type
    public function add(){
        return $this->number_one + $this->number_two;
    }

    public function subtract(){
        return $this->number_one - $this->number_two;
    }

    public function divide(){
        // here to handle the zero division error; try catch statement is used
        try {
            $result = $this->number_one / $this->number_two;
            return $result;
        } catch (DivisionByZeroError $e){ // Error class can be use to handle general error
            return "Error: number two must be greater than zero";
        }
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $number_one = $_POST['number_one'];
    $number_two = $_POST['number_two'];
    $calc = new Calculator($number_one, $number_two);
    echo "<h2> Sum of two numbers: {$calc->add()}</h2>";
    echo "<h2>Difference of two numbers: {$calc->subtract()}</h2>";
    echo "<h2>Division of two numbers: {$calc->divide()}</h2>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum</title>
</head>
<body>
    <form action="" method="post">
        <label for="number_one">Number 1:</label>
        <input type="number" id="number_one" name="number_one" required>
        <label for="number_two">Number 2:</label>
        <input type="number" id="number_two" name="number_two" required>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>