<?php
// accessing data from form using $_GET method
// print_r($_GET);

// echo $_GET['full_name'];
// echo $_GET['email'];
// echo $_GET['contact'];
// echo $_GET['address'];
// echo $_GET['dob'];

// to handle unauthorized requests and emtpy http requests
if(isset($_GET['add_member'])){
    // validating keys
    if(empty($_GET['full_name']) || $_GET['full_name'] === "") {
        echo "Full Name is required.";
        echo "<a href='index.php?status=400'>Click here to add member<a/>";
        exit;
    } else {
        $full_name = $_GET['full_name'];
        $email = $_GET['email'];
        $contact = $_GET['contact'];
        $address = $_GET['address'];
        $dob = $_GET['dob'];

        echo "<h1>Form Data</h1>";
        echo "<h3>Name: {$full_name}</h3>";
        echo "<p>Email: {$email}</p>";
        echo "<p>Contact: {$contact}</p>";
        echo "<p>Address: {$address}</p>";
        echo "<p>Date of Birth: {$dob}</p>";
    }
   
} else {
    echo "Unauthorized request or empty HTTP request.";
    echo "<a href='index.php?status=401'>Click here to add member<a/>";
    exit;
}


//