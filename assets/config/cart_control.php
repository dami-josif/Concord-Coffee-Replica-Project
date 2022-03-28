<?php
    include 'dbcon.php';
    include '../includes/sessions.php';
$id = $_SESSION['id'];
    if(isset($_POST['b&b'])){
        $name = $_GET['name'];
        $price = $_GET['price'];
        $qty = $_POST['qty'];
        $date = date('Y-m-d h:i:s');
        
        
        $sql = "INSERT INTO cart(customer_id,product_name,product_price,product_qty,date_created) VALUES(?,?,?,?,?)";
        // Initilise Connection to database
        $stmt = mysqli_stmt_init($connectDB);
        // Prepare the statemt 
        mysqli_stmt_prepare($stmt,$sql);
        // Bind parameters
        mysqli_stmt_bind_param($stmt,'sssss',$id,$name,$price,$qty,$date);
        
        // Execute the statement
        $execute = mysqli_stmt_execute($stmt);
        if ($execute) {
                $_SESSION['successMessage'] = "Product added to cart";
                header("Location: ../../index");
            }else{
                $_SESSION['errorMessage'] = "Something went wrong..";
                header("Location: ../../index");
            }
        }


        else {
            //header("Location: ../../authentication");
          }