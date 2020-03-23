<!-- this file controls Create User via email form -->
<?php
    require('email.php');
    require('db_connect.php');    
    
    //prepared statement 
    $email = $_GET['emailid'];
    $username = $_GET['username'];
    $password = $_GET['password'];

    //construct the query
    //$sql = "insert into users(username,email,password_string) values('$username', '$email', '$password')";

    //close cnx
    mysqli_close($conn);
?>