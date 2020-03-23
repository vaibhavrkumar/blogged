<!-- this file controls Create User via email form -->
<?php
    //require('email.php');
    require('db_connect.php');    
    
    if(isset($_POST['submitEmail'])){
        //prepared statement 
        $email = $_POST['emailid'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //construct the query
        $sql = "insert into users(username,email,password_string) values(?,?,?)";

        $stmt = $conn->prepare($sql);
        //bind variable
        $stmt->bind_param("sss", $username, $email, $password);
        //execute the prepared statement
        $stmt->execute();
        echo "user added successfully";
        //close the statement
        $stmt->close();
        //close cnx
        mysqli_close($conn);
    }
?>