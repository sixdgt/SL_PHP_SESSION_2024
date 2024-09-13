<?php
// foreach loop and arrays continuition in php
$countries = [
    "name" => "Nepal",
    "capital" => "Kathmandu",
    "continent" => "Asia",
    "region" => "South-East Asia",
    "currency" => "Rupee"
];

$items = array(
    "vegitables" => ["Potatoes", "Tomatoes", "Cabbage"],
    "fruits" => ["Apple", "Banana", "Orange", "Pear"],
    "beverage" => ["Soda", "Smoothie", "Coffee", "Beer", "Coke"]
);

foreach($countries as $key => $value){
    echo "<p> Key: {$key}, Value: {$value} <p/>";
}

// if the values are array then we need to convent them to string using loop
foreach($items as $key => $value){
    echo "<h3> Key: {$key} <h3/>";
    // implementing another foreach loop for the values that are in an array
    foreach($value as $data){
        echo "<p>{$data}</p>";
    }
    echo "<hr>";
}

$orders = [
    "customers" => [
        "name" => "Dhiraj Thapa",
        "address" => "123 Main St",
        "phone" => "123-456-7890"
    ],
    "items" => [
        "title" => "Phone cover",
        "price" => 1500.00,
        "quatity" => 2,
        "date" => "2024-09-13"
    ],
    "payment" => [
        "method" => "Credit Card",
        "amount" => 3000.00,
        "date" => "2024-09-13"
    ]
];

// first layer 
foreach($orders as $key => $value){
    // customer, items and payments
    echo "Title: {$key} <br>";
    // second layer - seperate data of customer, items and payments
    foreach($value as $sub_key => $sub_value){
        echo "Sub Title: {$sub_key}, Data: {$sub_value} <br>";
    }
}
// empty array
$customers = [];
$order_items = [];
$payments = [];
foreach($orders as $key => $value){
    if($key === "customers"){
        $customers[] = $value; // it will store the customers data
    } else if ($key === "items"){
        $order_items[] = $value; // it will store the items data
    } else if ($key === "payment"){
        $payments[] = $value; // it will store payments data
    }
}

// use the following functions to debug the php codes
var_dump($customers); echo "<br>";
print_r($customers); echo "<br>";
var_dump($order_items); echo "<br>";
var_dump($payments); echo "<br>";


