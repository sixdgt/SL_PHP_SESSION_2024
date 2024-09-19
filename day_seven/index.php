<?PHP
    // day 7 - handling form with $_REQUEST method
    if(isset($_REQUEST['calculate'])){
        // validating marked price
        if(!empty($_REQUEST['marked_price']) && !empty($_REQUEST['discount'])){
            // accessing form data using $_REQUEST method
            $marked_price = $_REQUEST['marked_price'];
            $discount_percent = $_REQUEST['discount'];
            $vat_percent = $_REQUEST['vat_percent'];

            $discount_amount = 0;
            if($marked_price <= 0){
                echo "<h3>Marked price must be greater than zero</h3>";
            } else {
                $actual_mp = $marked_price;

                if ($discount_percent < 0 || $discount_percent > 100) {
                    echo "<h3>Discount must be between zero and 100</h3>";
                } else {
                    $actual_dp = $discount_percent;
                    $discount_amount = $actual_dp * (1/100);
    
                    $vat_amount = $vat_percent * (1/100);
                    $total = $marked_price - $discount_amount + $vat_amount;
                    echo "<h3>Marked Price: {$actual_mp}</h3>";
                    echo "<h3>Discount Amount: {$discount_amount}</h3>";
                    echo "<h3>VAT Amount: {$vat_amount}</h3>";
                    echo "<h3>Total Price: {$total}</h3>";
                }
            }
        } else {
            echo "<h3>Please enter the required price and discount percentage first</h3>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 7 - Form Handling</title>
</head>
<body>
    <section>
        <h1>Day 7 - Form Handling with $_REQUEST method</h1>
        <form action="index.php" method="POST">
            <label for="marked_price">Marked Price:</label>
            <input type="number" id="marked_price" name="marked_price" required>
            <br><br>
            <label for="discount">Discount in Percentage:</label>
            <input type="number" id="discount" name="discount" required>
            <br><br>
            <label for="vat_percent">VAT in Percentage:</label>
            <input type="number" id="vat_percent" name="vat_percent" readonly value="15">
            <br><br>
            <button type="submit" name="calculate">Calculate</button>
        </form>
    </section>
</body>
</html>