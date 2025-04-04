<?php
    $country_id = $_GET['country_id'];
    // creating connection
    $host = "localhost";
    $user = "root";
    $password = "1234";
    $db_name = "day_nine";

    $con = mysqli_connect($host, $user, $password, $db_name);
    // empty array 
    $data = array();

    if($con) {
        $sql = "SELECT * FROM country WHERE id={$country_id}";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $data = array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "continent" => $row['continent'],
                    "region" => $row['region']
                );
            }
        }
    } else {
        die("Connection failed");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 12 - Country Show Detail</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    
    h1 {
        text-align: center;
    }

    .card {
        width: 400px;
        height: 250px;
        background-color: #f2f2f2;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        box-shadow: 1px 5px 10px #010;
        margin-left: 20%;
    }

    .card-header {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
        width: 250px;
        font-weight: 600;
        border-radius: 5px;
    }
    
    .card-body {
        padding: 20px;
        margin: 20px;
        text-align: center;
        font-weight: 400;
        font-size: 1rem;
    }

    h2, p {
        align-items: center;
        margin: 5px;
    }

    a {
        text-decoration: none;
        border: 1px solid #000;
        padding: 5px;
        margin-top: 20px;
        background-color: #000;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    a:hover {
        background-color: #fff;
        color: #000;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
</style>
<body>
</style>
<body>
    <section>
        <h1>Country Details</h1>
        <div class="card">
            <div class="card-header">
                <h2 class="card-title"><?php echo $data['name']; ?></h2>
            </div>
            <div class="card-body">
                <p><strong>Continent:</strong> <?php echo $data['continent'];?></p>
                <p><strong>Region:</strong> <?php echo $data['region'];?></p>
                <a href="index.php">Back to List</a>
            </div>
        </div>
    </section>
</body>
</html>