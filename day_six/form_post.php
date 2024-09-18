<?php
if(isset($_POST['add_student'])){
    // validating input field
    if(
        !empty($_POST['full_name']) || 
        !empty($_POST['email']) || 
        !empty($_POST['contact']) || 
        !empty($_POST['dob']) || 
        !empty($_POST['academic'])
        ){
            $full_name = $_POST['full_name'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $dob = $_POST['dob'];
            $academic = $_POST['academic'];
            // printing all the information
            echo "<h1>Student Name: {$full_name}</h1>";
            echo "<p>Email: {$email}</p>";
            echo "<p>Contact: {$contact}</p>";
            echo "<p>Date of Birth: {$dob}</p>";
            echo "<p>Academic: {$academic}</p>";
    } else {
        echo "All fields are required <br>";
        echo "Please try again. <a href='index.php'>Click Here</a>";
        exit();
    }
} else {
    echo "alert('Page not available')"; // using javascript alert() function to display error message before redirecting
    // redirecting pages in php using header()
    header("location: index.php?status=0&redirect");
    exit(); // or we can also use 'exit;' only
}
