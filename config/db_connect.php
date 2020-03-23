<?php
    // //connect to databses
    require('cnxdetails.php');
    $conn = mysqli_connect($host, $user, $pass, $database);

    // validate if connection is established
    $error = mysqli_connect_error();
    if($error!=null){
    $output = "<p> Database connection failed! </p>" .$error;
    exit($output);
    } 
?>