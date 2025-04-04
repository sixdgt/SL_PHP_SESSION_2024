<?php
session_start();

if(isset($_POST['register'])){
    require_once 'mail_handler.php';
    require_once 'random_string_handler.php';

    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $con = mysqli_connect('localhost', 'root', '1234', 'day_nine');

    if(!$con){
        echo "Connection failed";
        exit();
    } else {
        $select_user = "SELECT * FROM users WHERE username = '$username'";
        
        $result = mysqli_query($con, $select_user);

        if(mysqli_num_rows($result) > 0){
            echo "User already exists";
            header("Location: index.php?status=user already exists");
            exit();
        }
        
        $hash_password = password_hash($password, PASSWORD_BCRYPT);
        $verification_code = generateRandom();

        $query = "INSERT INTO users(full_name, username, password, verification_code, email)
         VALUES('$full_name', '$username', '$hash_password', '$verification_code', '$email')";
        
        $result = mysqli_query($con, $query);
        if($result){
            echo "Successfully registered";
            $_SESSION['full_name'] = $full_name;
            $_SESSION['username'] = $username;

            sendEmail("c4crytp@gmail.com", $email, $verification_code);

            header("Location: home.php?status=success");
        } else {
            echo "Error while registering";
            header("Location: index.php?status=registration failed");
        }
    }
}