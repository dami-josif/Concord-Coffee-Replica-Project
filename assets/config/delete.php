<?php
    include 'dbcon.php';
    include '../includes/sessions.php';



    if (isset($_GET['pid'])) {
        $cartId = $_GET['pid'];
        $sql = "DELETE FROM cart WHERE cart_id = '$cartId'";
        $query = mysqli_query($connectDB,$sql);
        if ($query) {
           header('Location: ../../tunnel/cart');
        }else{
            $_SESSION['errormessage'] = 'Something went wrong';
            header('Location: ../../tunnel/cart');
        }
    }