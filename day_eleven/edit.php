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

    // updating country detail
    if(isset($_POST['update_country'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $continent = $_POST['continent'];
        $region = $_POST['region'];

        $sql = "UPDATE country SET 
            name='{$name}', 
            continent='{$continent}', 
            region='{$region}' 
            WHERE id = {$id}";
        if(mysqli_query($con, $sql) > 0){
            echo "Data updated successfully";
        } else {
            echo "Error in updating data. Message: {$mysqli_error}";
        }
    }

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
    <title>Day 11 - Editing data in HTML Form</title>
</head>
<body>
    <section>
        <h1>Update Country Detail</h1>
        <form action="edit.php?country_id=<?php echo $country_id; ?>" method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo $data['id']; ?>">
            <label for="name">Country Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $data['name']; ?>"><br><br>

            <label for="continent">Continent:</label>
            <input type="text" name="continent" id="continent" value="<?php echo $data['continent']; ?>"><br><br>

            <label for="region">Region</label>
            <input type="text" name="region" id="region" value="<?php echo $data['region']; ?>"><br><br>

            <input type="submit" value="Update Country" name="update_country">
        </form>
    </section>
</body>
</html>