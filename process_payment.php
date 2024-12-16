<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$conn = mysqli_connect($hostname,$username,$password,$dbname);


if(isset($_POST['paymentButton'])) {

    $user_id = $_POST['user_id'];
    $product_name = $_POST['product_name'];
    $unit_price = $_POST['unit_price'];
    $quantity = $_POST['quantity'];
    $product_id = $_POST['product_id'];
    $subtotal = $_POST['subtotal'];

    echo $user_id;
    echo $product_name;
    echo $unit_price;
    echo $quantity;
    echo $product_id;
    echo $subtotal;
    
    $s_query = "INSERT INTO orders(order_id, user_id, product_id, product_name, unit_price, quantity, subtotal) VALUES ('0002','$user_id ','$product_id','$product_name','$unit_price', '$quantity', '$subtotal')";

        $query_run = mysqli_query($conn, $s_query);

        
        header("Location: index.php?id=".$user_id);

        exit();

    }
    
    else{
        echo "<p style='
        text-align: center;
        font-size: xxx-large;
        font-weight: bold;
        text-decoration: overline;
        position: absolute;
        left: 40%;
        top: 40%;
        '>I have no idea about the error</p>";
    }


?>