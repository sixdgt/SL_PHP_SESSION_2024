<?php
    // arrays in php
    $countries = array(); // method one
    $capitals = []; // method two

    $cities = array(
        "Kathmandu", "Pokhara", "Butwal", "Bhaktapur", "Lalitpur"
    );

    $lakes = ["Phewa", "Rara", "Begnas", "Tilicho"];
    // all those arrays defined above are single dimensional array

    // accessing data of array with index
    echo "First Lake:".$lakes[0];
    echo "Second Lake: $lakes[1]";
    echo "<br/>";
    print_r($lakes);
    echo "<br>";
    // adding data to array
    $lakes[] = "Kailali"; // adding at the end of array

    // all items in array
    echo $lakes; // we can't print array directly
    echo "<br>";
    print_r($lakes); // built-in function in php
    echo "<br>";
    var_dump($lakes); // built-in function in php
    echo "<br>";

    // passing data to specific index of an array
    $lakes[1] = "She-Phoksundo"; // if data or index exist then it will update the element of that particular index
    var_dump($lakes);
    echo "<br>";

    // removing data from array
    unset($lakes[2]); // unset function removes the element from the array
    var_dump($lakes); // built-in function in php
    echo "<br>";

    // to access elements of array we can use loop
    for($i = 0; $i < count($cities); $i++){
        echo "Index: $i, Value: $cities[$i] <br>";
    }

    // associative array 
    $items = [
        "title" => "Door Lock",
        "price" => 550.00,
        "quantity" => 10,
        "color" => "Random Black",
        "brand" => "Indian XZ",
        "description" => "A metal made premium quality door lock"
    ];

    // accessing data of associative array
    echo "Title: {$items['title']}";
    echo "Title: " . $items['title'];
    echo "<br>";
    var_dump($items); // built-in function in php
    echo "<br>";
    
    // updating data of associative array with new values
    $items['price'] = 600.00;
    echo "New Price: {$items['price']}";
    echo "<br>";
    var_dump($items);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 2 - PHP Array</title>
</head>
<body>
    <section>
        <h1>Day 2 - PHP Array</h1>
    </section>
</body>
</html>