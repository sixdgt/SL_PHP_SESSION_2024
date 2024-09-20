<?php include 'header.php'; ?>
<section>
    <h1>Please drop your personal details and contact us!</h1>
    <form action="#">
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="contact">Contact:</label>
        <input type="number" id="contact" name="contact" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
    </form>
</section>
<?php include 'footer.php'; ?>