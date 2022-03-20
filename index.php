<?php include '../concord_coffee/assets/includes/headers1.php' ?>


<body>
   <section>
        <header class="toptext">
            <a href="">Sign up for our New Monthly Coffee Subscriptions!</a>
        </header>
   </section>

   <section>
       <nav class="navbar bg-light mt-sm-1">
           <div class="brand">
            <img id="jje" src="../concord_coffee/assets/img/LOGO.jpg" height="50px">
           </div>
           <div class="fw-bold">
            <ul class="navlink">
                <li>
                    <a href="#" class="link">SHOP</a>
                </li>
                <li>
                    <a href="../concord_coffee/index2.php" class="link">COFFEE SUBSCRIPTION</a>
                </li>
                <li>
                    <a href="#" class="link">WHOLESALE</a>
                </li>
                <li>
                    <a href="#" class="link">CONTACT</a>
                </li>
                <li id="just">
                    <a href="#" class="link">ORDER FOR IN-STORE PICKUP</a>
                </li>
                <li>
                    <a href="../concord_coffee/assets/config/logout.php" class="link">LOG OUT</a>
                </li>
            </ul>
           </div>
           <div class="icon">
                <i class="fas fa-search"></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-shopping-cart"></i>
           </div>
           <hr>
       </nav>
   </section>
   
   <section>
        <div id="carouselExampleIndicators" class="carousel slide mt-md-5 mb-md-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <iframe width="100%" height="470px" src="https://www.youtube.com/embed/Jaepppfz7us" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="carousel-item">
                    <img src="../concord_coffee/assets/img/image1.jpg" class="d-block w-100" height="470px"  alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../concord_coffee/assets/img/image3.jpg" class="d-block w-100" height="470px"  alt="...">
                </div>
            </div>
            <button class="carousel-control-prev bg-transparent" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next bg-transparent" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div>
            
        </div>
   </section>

   <section>
       <div class="second">
           <h3>Try Our Newest Coffee</h3>
           <hr style="width: 30px; height: 2px; margin-left: 49%; background-color: grey;">
           <div style="margin-bottom: 80px;">   
               <div class="container">
                   <div class="row">
                        <div class="col-lg-4 text-center">
                            <img src="../concord_coffee/assets/img/IMG_3199_760x.jpg" class="img-fluid"><br><br>
                            <span class="text-center">
                                <a class="text-decoration-none text-black fw-bold fs-5 mb-4" href="#">Bright & Balanced</a>
                                <p>$20.00</p>
                                <button class="btn btn-dark fw-bold px-4 my-2 text-center buy">ADD TO CART</button>
                            </span>
                        </div>
                        <div  class="col-lg-4 text-center">
                            <img src="../concord_coffee/assets/img/IMG_3210_760x.jpg" class="img-fluid"><br><br>
                            <span>
                                <a class="text-decoration-none text-black fw-bold fs-5 mb-4" href="#">The Concord Classic</a>
                                <p>$20.00</p>
                                <button class="btn btn-dark fw-bold px-4 my-2 buy">ADD TO CART</button>
                            </span>
                        </div>
                        <div  class="col-lg-4 text-center">
                            <img src="../concord_coffee/assets/img/IMG_3205_760x.jpg" class="img-fluid"><br><br>
                            <span>
                                <a class="text-decoration-none text-black fw-bold fs-5 mb-4" href="#">Sweet & Smooth</a>
                                <p>$20.00</p>
                                <button class="btn btn-dark fw-bold px-4 my-2 buy">ADD TO CART</button>
                            </span>
                        </div>
                   </div>
               </div>
           </div>
       </div>
   </section>

   <section>
        <style>
            .buzzing{
                background-image: url(../../../concord_coffee/assets/img/image1.jpg);
                height: 500px;
                background-size: cover;
                background-position: center;
                text-align: center;
                padding-top: 180px;
            }
            .buzzing h2{
                color: white;
                text-align: center;
                font-size: 40px;
            }
            .buzzing hr{
                width: 33px;
                height: 5px;
                margin-left: 49%;
                background-color: rgb(224, 219, 219);
            }
            .buzzing p{
                color: white;
                font-size: 20px;
            }
            .buzzing button{
                height: 40px;
                width: 200px;
                border: 1px solid white;
                font-size: 11px;
                font-weight: bolder;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                background-color: transparent;
                color: white;
            }
            @media (max-width: 640px) {
            .buzzing {
                padding-top: 100px;
            }
            }
        </style>
       <div class="buzzing" >
            <h2>SUBSCRIPTION</h2>
            <hr>
            <p>Concord Coffee automatically delivered each month for perfect at-home <br> brewing.</p>
            <button>SUBSCRIBE NOW</button>
       </div>
   </section>
   <section>
        <style>
            .buzz{
                background-image: url(../../../concord_coffee/assets/img/image3.jpg);
                height: 400px;
                background-size: cover;
                background-position: center;
                text-align: center;
                padding-top: 180px;
            }
            @media(max-width: 640px) {
                .buzz {
                    padding-top: 100px;
                }
            } 
            .buzz h2 {
            color: white;
            text-align: center;
            font-size: 40px;
            }
            .buzz hr {
            width: 33px;
            height: 5px;
            margin-left: 49%;
            background-color: #e0dbdb;
            }
        </style>
       <div class="buzz">
        <h2>YOUR FAVORITE COFFEE, <br> DELIVERED TO YOUR HOME.</h2>
        <hr>
       </div>
   </section>

   <section>
       <div class="mid">
           <h4>Good things happen over coffee.</h4>
           <hr>
           <p>We believe that warmth and flavor of the perfect cup of coffee soothes souls, firms friendships, and connects community. Our coffee is carefully and thoughtfully <br> grown on some of the best coffee farms around the world, imported by loyal and caring importers and freshly roasted in Lakeland, Florida.  Welcome to the Concord <br> Coffee community.</p>
       </div>
   </section>

   <section>
       <div class="down">
           <div>
               <h5>Concord Coffee</h5>
               <p>1037 Gado Nasko Ave S, #135, Lakeland, FCT-ABUJA <br> 33803 <br> <br> 1380 W University Ave Gainesville, ABJ 32603</p>
           </div>
           <div class="iconss">
               <h5>Get Connected</h5>
               <i class="fab fa-facebook-f"></i>
               <i class="fab fa-twitter"></i>
               <i class="fab fa-instagram"></i>
           </div>
           <div class="bad">
               <h5>Links</h5>
               <ul class="linn">
                   <li>
                       <a class="linn" href="#">Press</a>
                   </li>
                   <li>
                       <a class="linn" href="#">Our Story</a>
                   </li>
                  <li>
                      <a class="linn" href="#">Wholesale</a>
                  </li>
                  <li>
                      <a class="linn" href="">FAQ</a>
                  </li>
                  <li>
                      <a class="linn" href="">Contact</a>
                  </li>
               </ul>
           </div>
           <div class="badi">
               <h5>Newsletter</h5>
               <p>Sign up for our occasional newsletter to <br> receive special offers and first access to <br> limited releases.</p>
               <input type="text" placeholder="email@example.com"><br><br>
               <button>SUBSCRIBE</button>
           </div>
       </div>
       <div>
            <hr>
            <p style="text-align: center; font-weight: lighter; font-size: 15px;">Copyright © 2021 CONCORD COFFEE
            All rights reserved <br>
            Made by Oluwadamilare</p>
       </div>
   </section>
</body>
<footer>
    <script src="../concord_coffee/assets/js/bootstrap.bundle.min.js"></script>
</footer>
</html>