<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 14 - PHP User Registration</title>
</head>
<body>
    <h3>Day 15 - PHP User Registration with Verification Code using Gmail SMTP</h3>
    <form action="register.php" method="post">

        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" id="full_name"><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Register" name="register">
    </form>
</body>
</html>