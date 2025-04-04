<?php 
require_once "BankAccount.php";

class CurrentAccount extends BankAccount {
    public function __construct($param_balance){
        $this->balance = $param_balance;
    }

    // method overriding of BankAccount
    public function withdraw($amount){
        if($this->balance - $amount < -5000){
            return "Not enough balance to withdraw";
        } else {
            echo "Balance Before withdraw {$this->balance} <br/>";
            $this->balance -= $amount;
            return "Withdrawn Rs. {$amount} & your current balance is {$this->balance}";
        }
    }
}