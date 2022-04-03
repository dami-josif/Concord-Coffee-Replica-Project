<?php 
    include "../assets/config/dbcon.php";
    include "../assets/includes/headers1.php";
    include "../assets/includes/sessions.php";
    auth();
    $id = $_SESSION['id'];
?>




<body>
<?php include '../assets/includes/cart-nav.php' ?>

    <link rel="stylesheet" href="../assets/css/bootstrap5.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <section>
        <?php 
        echo successMessage(); echo errorMessage();
        ?>
        <style>
            #kia {
                width: 50px;
            }

            #yetun {
                background-color: #b7b7f0;
            }
        </style>

        <div class="container">
            
            
            <div class="row">
                
                <div class="col-lg-5">
                <?php
                    $sql = "SELECT * FROM cart WHERE customer_id='$id'";
                    $query = mysqli_query($connectDB,$sql);
                    while ($row = mysqli_fetch_assoc($query)){
                ?>
                    <img src="../assets/img/<?php 
                        if ($row['product_name'] == 'Sweet and Smooth') {
                        echo 'IMG_3205_760x.jpg';
                        }
                        elseif($row['product_name'] == 'The concord classic'){
                            echo 'IMG_3210_760x.jpg';
                        }
                        else{
                            echo 'IMG_3199_760x.jpg';
                        }
                    ?>" alt="img" height="350px">
                </div>

                <div class="col-lg-7">
                    <p class="fw-bold"><?php echo $row['product_name']; ?></p>
                    <hr>
                    
                    <p class="ps-5">Quantity:
                        
                        <?php echo $row['product_qty']; ?>
                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>price: <span class="fw-bold fs-6"><?php echo "$".number_format($row['product_price'],2,'.',','); ?></span></p>
                        </div>
                    <?php } ?>
                        <div class="col-lg-6">
                            <button class="px-5 py-2 my-1 rounded-pill bg-primary text-light fw-bold border-1 ">Buy It Now</button> <br>
                            <button class="px-4 py-2 my-1 bg-transparent text-primary border-1 rounded-pill"><i class="fas fa-heart"></i> Add to watchlist</button>
                        </div>
                    </div>
                    <hr>
                    <div class="row text-center">
                        <div class="col-lg-6">
                            <h4>30-day</h4>
                            <p>Returns</p>
                        </div>
    
                        <div class="col-lg-6">
                            <h4>53</h4>
                            <p>Watchers</p>
                        </div>
                    </div>
                    <hr>
                    <p><span class="fs-6 pe-4 fw-bold">Shipping:</span> <span class="p-3">$4.00 FedEx International Priority | See details
                        International shipment of items may be subject to customs processing and additional charges. Located in:
                        HK, Hong Kong</span>   
                    </p>

                    <p><span class="fs-6 pe-4 fw-bold">Delivery:</span> <span class="p-3">Estimated within 3 days after receiving cleared payment- </span>   
                    </p>
                    <p>
                        <span class="fs-6 pe-4 fw-bold">Returns:</span> <span class="p-3">30 days returns | Buyer pays for return shipping  </span>
                    </p>

                    <p>
                        <span class="fs-6 pe-4 fw-bold ">Payments:</span> <span class="fs-2"><i class="fab fa-cc-paypal p-2 text-primary"></i><i class="fab fa-cc-apple-pay text-primary"></i><i class="fab fa-cc-visa p-2 text-primary"></i><i class="fab fa-cc-mastercard p-2 text-primary"></i><i class="fab fa-cc-discover p-2 text-primary"></i><i class="fab fa-cc-amex p-2 text-primary"></i></span>
                    </p>
                </div>

                
            </div>
        </div>
    </section>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>