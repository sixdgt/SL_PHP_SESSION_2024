<?php
    session_start();
    if(!isset($_SESSION['username'])){
        echo "<h3>Access Denied</h3>";
        echo "<a href='index.php?status=access denied'> Login First</a>";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
    <h3>Welcome to DAV App - <?php echo $_SESSION['full_name']; ?></h3>
</body>
</html>