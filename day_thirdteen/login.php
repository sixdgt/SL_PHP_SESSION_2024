<?php

if(isset($_POST['login'])){
    // to start session
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = mysqli_connect('localhost', 'root', '1234', 'day_nine');

    if(!$con){
        echo "Connection failed";
        exit();
    } else {
        $query = "SELECT * FROM users WHERE username='$username'";
        $data = mysqli_query($con, $query);

        $db_username = "";
        $db_password = "";
        $db_full_name = "";
        if(mysqli_num_rows($data) > 0){
            while($row = mysqli_fetch_array($data)){
                $db_full_name = $row['full_name'];
                $db_username = $row['username'];
                $db_password = $row['password'];
            }
        } else {
            header("Location: index.php?status='fail to login'");
            exit();
        }
        
        if($db_username !== "" && $db_password !== ""){
            $status = password_verify($password, $db_password);
            if($username === $db_username && $status == 1){
                $_SESSION['full_name'] = $db_full_name;
                $_SESSION['username'] = $db_username;
                header("Location: home.php");
            } else {
                header("Location: index.php?status='fail to login'");
            }
        }
    }
}