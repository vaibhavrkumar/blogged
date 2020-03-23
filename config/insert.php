<!-- this file controls Create User via email form -->
<?php
    //require('email.php');
    require('db_connect.php');    
    //Retrieve information from form using $_REQUEST
    if(isset($_POST['emailid'])){
        $email = mysqli_real_escape_string($conn, $_POST['emailid']);
    }
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    //Insertt query
    $query = "insert into users(username,email,password_string) values('$username', '$email', '$password')";

    if(mysqli_query($conn, $query)){
        echo "Records Added successfully";
    }
    else{
        echo mysqli_error($conn);
    }
    
    //close cnx
    mysqli_close($conn);
?>