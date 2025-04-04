<?php
    $data = array(); // it is an empty array which will hold table data
    
    $host = "localhost";
    $user = "root";
    $password = "1234";
    $db_name = "day_nine"; // here 'day_nine' is a database name

    $con = mysqli_connect($host, $user, $password, $db_name);

    if($con){
        // building query - since we are fetching data so here we 
        // are using SELECT query
        $sql = "SELECT * FROM country";
        
        // executing query
        $result = mysqli_query($con, $sql);
        // print_r($result); 
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $data[] = [
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "continent" => $row['continent'],
                    "region" => $row['region']
                ];
            }
        }
    } else {
        die("Connection Failed!: Error Message: {$mysqli_error}");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 11 - PHP editing data</title>
</head>
<body>
    <section>
        <h1>Country List</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Continent</th>
                    <th>Region</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- count() returns the size of array -->
                <?php if (count($data) > 0) {
                    $counter = 1; // to count the serial number
                    foreach($data as $key => $value){
                ?>
                <tr>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['continent']; ?></td>
                    <td><?php echo $value['region']; ?></td>
                    <td><a href="edit.php?country_id=<?php echo $value['id']; ?>">Edit</a></td>
                    <td><a href="delete.php?country_id=<?php echo $value['id']; ?>">Delete</a></td>
                </tr>
                <?php $counter++; }} ?>
            </tbody>
        </table>
    </section>
</body>
</html>
