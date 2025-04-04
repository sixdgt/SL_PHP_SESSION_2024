<?php
function getProducts(){
    $data = array();

    $con = mysqli_connect('localhost', 'root', '1234', 'test_ecom');
    if(!$con){
        echo "Connection failed";
        exit();
    }
    $query = "";
    if(isset($_POST['search'])){
        $title = $_POST['product_title'];
        $query = "SELECT * FROM products 
        WHERE product_title LIKE '%$title%' 
        OR product_desc LIKE '%$title%'
        OR product_price LIKE '%$title%'
        OR product_category LIKE '%$title%'";
    } else {
        $query = "SELECT * FROM products";
    }
    
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $data[] = array(
                'product_title' => $row['product_title'],
                'product_desc' => $row['product_desc'],
                'product_price' => $row['product_price'],
                'product_category' => $row['product_category']
            );
        }
    }
    return $data;
}
