<?php
    $server = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "concord_coffee";
    
    $connectDB = mysqli_connect($server,$username,$pass,$dbname);

    if (!$connectDB) {
      die("Error in connection".mysqli_connect_error());
    }