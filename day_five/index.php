<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 5 - Form Handling</title>
</head>
<body>
    <section>
        <h1>Day 5 - Form Handling in PHP</h1>
        <form action="form_post.php" method="GET">
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" id="full_name">
            <br><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br><br>
            <label for="contact">Contact:</label>
            <input type="number" name="contact" id="contact">
            <br><br>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address">
            <br><br>
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob">
            <br><br>
            <input type="submit" value="Add Member" name="add_member">
        </form>
    </section>

</body>
</html>