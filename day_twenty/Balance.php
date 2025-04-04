<?php
require_once "CurrentAccount.php";
require_once "SavingAccount.php";

$currentAcc = new CurrentAccount(15000);
$savingAcc = new SavingAccount(25000);

echo "Saving Account withdraw:<br/>";
echo $savingAcc->withdraw(5000);
echo "<br/>";
echo "<br/>";
// echo "Current Account withdraw: {$currentAcc->withdraw(5000)} <br/>";

echo "Current Account withdraw:<br/>";
echo $currentAcc->withdraw(5000);