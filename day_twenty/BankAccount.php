<?php
class BankAccount {
    // attributes
    public $balance;

    // constructor
    public function __construct($param_balance){
        $this->balance = $param_balance;
    }

    // method
    public function withdraw($amount){
        if($this->balance <= 0 || $this->balance <= $amount){
            return "Balance is not available";
        } else {
            $this->balance -= $amount;
            return "Amount withdrawn successfully";
        }
    }
}