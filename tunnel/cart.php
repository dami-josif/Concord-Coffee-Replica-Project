<?php
    include '../assets/config/dbcon.php';
    include "../assets/includes/headers1.php";
    include "../assets/includes/sessions.php";
    auth();
    
?>
<body>
    <?php include '../assets/includes/cart-nav.php' ?>

<link rel="stylesheet" href="../assets/css/bootstrap5.min.css">
<section class="mt-3">
    <?php 
      echo successMessage(); echo errorMessage();
    ?>
<div class="container">
<div class="card mx-auto p-3 mt-4 shadow-lg">
         <div class="table-responsive mt-3">
            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                  <th></th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Product Price</th>
                  <th scope="col">Product Quantity</th>
                  <th scope="col">...</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql = "SELECT * FROM cart";
                  $query = mysqli_query($connectDB,$sql);
                  while ($row = mysqli_fetch_assoc($query)) {
                ?>
                <tr>
                  <td>
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
                    ?>" alt="img" height="100px">
                   
                  </td>
                  <td><?php echo $row['product_name']; ?></td>
                  <td><?php echo "$".number_format($row['product_price'],2,'.',','); ?></td>
                  <td><?php echo $row['product_qty']; ?></td>
                  <td><a name="delete" href="../assets/config/delete?pid=<?php echo $row['cart_id']?>"class="btn btn-danger">DELETE ITEM</a></td>
                </tr>
                <?php } ?>
              </tbody>
              
            </table>
         </div>
         <div class="text-end">
           <button class="btn btn-success fw-bold px-3">CHECKOUT</button>
         </div>
       </div>
</div>
</section>
    

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>