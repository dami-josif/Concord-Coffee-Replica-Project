<?php
    require "assets/includes/headers1.php";
    include "assets/includes/sessions.php";
?>
<body style="background-color: burlywood;">
    <style>
        body{
            margin-top: -5px;
            margin-bottom: -15px;
            padding: 0;
        }
    </style>
    <?php include_once 'assets/includes/main-nav.php'; ?>
    
    <div class="container pt-4">
        <?php echo successMessage(); echo errorMessage(); ?>
        <div class="container-fluid">
            <div class="row rep">
                <div class="col-7">
                    <h3 class="fs-1 fw-bold" style="font-family: 'Dancing Script', cursive;">Our Products..</h3>
                    <img class="rounded" src="../concord_coffee/assets/img/IMG_3199_760x.jpg" height="200px" alt="">
                    <img class="rounded" src="../concord_coffee/assets/img/IMG_3205_760x.jpg" height="200px" alt="">
                    <img class="rounded" src="../concord_coffee/assets/img/IMG_3210_760x.jpg" height="200px" alt="">
                    <p class="fw-bold fs-4 mt-3" style="font-family: 'Dancing Script', cursive;">i) Bright & Balanced.. ii) The Concord Classic.. iii) Sweet & Smooth..</p>
                </div>
                <div class="col-5">
                    <div class="card p-2 mt-5 mb-5 log" style="background-color: cream;">
                        <h5 class="fw-bold mb-4 mt-2" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">LOG IN</h5>
                        <form action="assets/config/login_control.php" method="post">
                            <input type="email" name="email" placeholder="Email*"  class="form-control mb-3">
                            <input type="password" name="password" placeholder="Password*"  class="form-control mb-2">
                            <a class="nav-link text-dark float-end" onclick="change()">
                            Click here to Register
                            </a>

                            <button type="submit" name="login" class="btn btn-dark text-light fw-bold">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mx-auto w-75 d-none p-2 reg mb-5">
            <img src="assets/img/LOGO.jpg" height="40px" width="200px" class="m-3"> REGISTER
            <form action="assets/config/register_control.php" method="post">
                <input type="text" name="fname" placeholder="First Name*"  class="form-control mb-3" required>
                <input type="text" name="lname" placeholder="Last Name*"  class="form-control mb-3" required>
                <input type="text" name="dob" onfocus="(this.type = 'date')"  placeholder="Date of Birth*"  class="form-control mb-3" required>
                <input type="email" name="email" placeholder="Email*"  class="form-control mb-3" required>
                <input type="tel" name="phone" placeholder="Phone Number*"  class="form-control mb-3" required>
                <input type="password" name="password" placeholder="Password*"  class="form-control mb-2" required>
                <input type="password" name="cpass" placeholder="Confirm Password*"  class="form-control mb-2" required>

                <button type="submit" name="register" class="btn btn-primary">Sign Up</button>

                <a class="nav-link text-dark float-end" onclick="change()">
                   Click here to Login
                </a>
            </form>
        </div>
    </div>
    <section style="background-color: #FDEFEF;" class="mt-5 pt-5">
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
               <a target="_blank" href="https://api.whatsapp.com/send?text=I would like to enquire more on your Coffee Products&phone=+2348147778188">
                    <i class="fab fa-whatsapp text-black"></i>
               </a>
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

    <style>
        a:hover{
            cursor: pointer;
            font-weight: bold;
            color: yellow;
        }
    </style>
    <script>
        function change(){
            document.querySelector('.reg').classList.toggle('d-none');
            document.querySelector('.log').classList.toggle('d-none');
            document.querySelector('.rep').classList.toggle('d-none');
        }
    </script>

<script src="../concord_coffee/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>