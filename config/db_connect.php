<?php
    //connect to databses
    $conn = mysqli_connect('localhost', 'phpCoder', 'test1234', 'blogged_db');

    // validate if connection is established
    if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
    }
?>