<?php
    $con = mysqli_connect('localhost', 'root', '1234', 'test_ecom');

    if(!$con){
        echo "Connection failed";
        exit();
    }

    $query = "select u.id, u.username, p.product_id, p.product_title, p.product_price,
     oi.order_date, oi.order_by, oi.quantity
    from users as u
    inner join products as p
    on u.id = p.user_id
    inner join order_item as oi
    on p.product_id = oi.product_id
    where u.id = 1";

    $result = mysqli_query($con, $query);
    $data = array();
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $data[] = array(
                "user_id" => $row['id'],
                "username" => $row['username'],
                "product_id" => $row['product_id'],
                "product_title" => $row['product_title'],
                "product_price" => $row['product_price'],
                "order_date" => $row['order_date'],
                "order_by" => $row['order_by'],
                "quantity" => $row['quantity'],
                "total_price" => $row['product_price'] * $row['quantity'],
            );
        }
    }

    // for total products
    $total_product_query = "SELECT COUNT(product_id) as total_product FROM products";
    $total_product = mysqli_query($con, $total_product_query);
    $total = "";
    if(mysqli_num_rows($total_product) > 0){
        while($row = mysqli_fetch_array($total_product)){
            $total = $row['total_product'];
        }
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
    <h1>Product Lists</h1>
    <h2>Total Products: <?php echo $total; ?></h2>
    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Product Title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Order By</th>
                <th>Order Date</th>
                <th>Added By</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $counter = 1;
                foreach ($data as $result){
                    ?>
                        <tr>
                            <td><?php echo $counter; ?></td>
                            <td><?php echo $result['product_title']; ?></td>
                            <td><?php echo $result['quantity']; ?></td>
                            <td><?php echo $result['product_price']; ?></td>
                            <td><?php echo $result['total_price']; ?></td>
                            <td><?php echo $result['order_by']; ?></td>
                            <td><?php echo $result['order_date']; ?></td>
                            <td><?php echo $result['username']; ?></td>
                        </tr>
                    <?php
                    $counter++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>