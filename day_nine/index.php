<?php
// creating database connection in php
$host = "127.0.0.1"; // host name
// either 'localhost' or '127.0.0.1'
$user = "root"; // db user
$password = "1234"; // according to your database
// if you are using XAMPP mysql then put password
// blank
$db_name = "day_nine"; // database name

// creating connection in procedure oriented
$con = mysqli_connect($host, $user, $password, $db_name);
if ($con){
    echo "Connection established";
    
    if(isset($_POST['add_country'])){
        // inserting data into database table
        $name = $_POST['name'];
        $continent = $_POST['continent'];
        $region = $_POST['region'];

        // building insert query
        $sql = "INSERT INTO country (`name`, `continent`, `region`) 
        VALUES('{$name}', '{$continent}', '{$region}')";

        // executing insert query
        if(mysqli_query($con, $sql) > 0){
            echo "Data inserted successfully";
        } else {
            echo "Error in inserting data. Message: {$mysqli_error}";
        }
    }
    
} else {
    die("Connection failed. Message: {$mysqli_error}");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 9 - Database connection & Data insertion</title>
</head>
<body>
    <section>
        <h1>Add Country</h1>
        <form action="index.php" method="post">
            <label for="name">Country Name:</label>
            <input type="text" name="name" id="name"><br><br>
            <label for="continent">Continent:</label>
            <input type="text" name="continent" id="continent"><br><br>
            <label for="region">Region:</label>
            <input type="text" name="region" id="region"><br><br>
            <input type="submit" value="Add Country" name="add_country">
        </form>
    </section>
</body>
</html>