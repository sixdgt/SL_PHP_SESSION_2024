<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 6 - Form Handling</title>
</head>
<body>
    <section>
        <h1>Day 6 - Form Handling with POST Method</h1>
        <form action="form_post.php" method="POST">
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="contact">Contact:</label>
            <input type="number" id="contact" name="contact" required><br><br>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br><br>
            <label for="academic">Academics:</label>
            <input type="text" id="academic" name="academic" required><br><br>
            <input type="submit" value="Add Student" name="add_student">
        </form>
    </section>
</body>
</html>