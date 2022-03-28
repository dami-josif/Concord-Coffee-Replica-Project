







<section>
    <div class="container-fluid">

        <?php
                $sql = "SELECT * FROM cart";
                $query = mysqli_query($connectDB,$sql);
                while ($row = mysqli_fetch_assoc($query)) {
        ?>

        <div class="row">
            <div class="col-lg-4">
                <p>Product Name</p>
            </div>
            <div class="col-lg-1">
                <p>Product Price</p>
            </div>
            <div class="col-lg-5">
                <p>Product Quantity</p>
            </div>
        </div>
    </div>
</section>