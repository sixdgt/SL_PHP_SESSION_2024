<?php
$obtained_marks = 56.67;

if ($obtained_marks < 0 && $obtained_marks > 60) {
    echo "Marks must be between 0 and 100<br>";
} else if ($obtained_marks >= 0 && $obtained_marks <= 23.99){
    echo "You are fail<br>";
} else if ($obtained_marks >= 24 && $obtained_marks <= 39.99){
    echo "You have obtained Second Division<br>";
} else if ($obtained_marks >= 40 && $obtained_marks <= 49.99){
    echo "You have obtained First Division<br>";
} else if ($obtained_marks >= 50 && $obtained_marks <= 60){
    echo "You have obtained Distinction<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>