<?php
    include("db.php");
    session_start();
    $p_id= $_GET['p_id'];
    $p_name= $_GET['name'];
    $p_img= $_GET['p_img'];
    $p_price= $_GET['p_price'];
    $p_qty= $_POST['quantity'];
    $total_price= $p_price*$p_qty;
    
    
    $userid = $_SESSION['user_id'];
    if(isset($_SESSION['user_id'])){

        $insert = mysqli_query($con,"INSERT INTO cart
        (user_id,product_id,quantity,product_name,product_img,price,unit_price) 
        VALUES ('$userid','$p_id',$p_qty,'$p_name','$p_img','$total_price','$p_price')");

   if ( $insert) {
       
       header('Location:./cart.php');
       
   } else {
       echo "<script>alert('Error registering user. Please try again later.');</script>";
   }

    }
    else{
        header('Location:./login.php');
    }

   
?>