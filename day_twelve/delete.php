<?php
    $host = "localhost";
    $user = "root";
    $password = "1234";
    $db_name = "day_nine"; // here 'day_nine' is a database name

    $con = mysqli_connect($host, $user, $password, $db_name);

    $country_id = $_GET['country_id'];

    if($con){
        $sql = "DELETE FROM country WHERE id={$country_id}";

        if(mysqli_query($con, $sql) > 0) {
            echo "Data deleted successfully.<br/>";
            echo "View Country List <a href='index.php'>Click Here</a><br/>";
        } else {
            echo "Error in deleting data. Message: {$mysqli_error}";
            echo "View Country List <a href='index.php'>Click Here</a><br/>";
        }
    } else {
        die("Connection failed. Message: {$mysqli_error}");
    }
