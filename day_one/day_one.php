<?php
$item_title = "Gaming Laptop";
$brand = "Acer";
$price = 130000.00;
$quantity = 12;
$desc = "13th Gen Gaming Laptop with FHD";

// displaying variables with html tags
echo "<h1>Name: $item_title</h1>";
echo "<h2>Description: $desc</h2>";
echo "<hr>";
echo "<p>Price: $price</p>";
echo "<p>Quantity: $quantity</p>";

// total price
$total = $price * $quantity; // total price
echo "<h2>Total: $total</h2>";

$discount = 3550.45; // discount
$total_after_discount = $total - $discount; // total after discount
echo "<h2>Discount: $discount</h2>";
echo "<h2>Total after discount: $total_after_discount</h2>";

$vat_amount = $price * (13/100); // var amount

// calculating total including vat
$total_with_vat = $total_after_discount + $vat_amount;
echo "<h2>Vat Amount: $vat_amount</h2>";
echo "<h2>Total with vat: $total_with_vat</h2>";