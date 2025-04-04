<?php
require_once "BankAccount.php";
class SavingAccount extends BankAccount {
    public function __construct($param_balance){
        $this->balance = $param_balance;
    }
    // method overrriding of BankAccount
    public function withdraw($amount){
        if($this->balance - $amount < 1000){
            return "Your balance is below Rs. 1000";
        } else {
            echo "Balance Before withdraw {$this->balance} <br/>";
            $this->balance -= $amount;
            return "Withdrawn Rs. {$amount} & your current balance is {$this->balance}";
        }
    }
}