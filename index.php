<?php
    $name = "Scripting Language - PHP Sessions"; // char or string
    $year = 2024; // int or number
    $title = "Scripting Language - PHP";

    // to display data or print variable
    // method one
    echo "TOPIC: $name";
    echo "<br>"; // printing html tags
    
    // method two
    echo $year;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <section>
        <h1><?php echo $name; ?></h1>
        <h2><strong><?php echo $year; ?></strong></h2>
    </section>
</body>
</html>