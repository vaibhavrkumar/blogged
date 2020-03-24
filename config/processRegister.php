<!-- inserts new user into DB -->
<?php
    //require('email.php');
    require('db_connect.php');    
    
    if(isset($_POST['submitEmail'])){
        //retrieve info. from the form
        $email = $_POST['emailid'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //check if the form is empty
        if($email != "" && $username != "" && $password != ""){
            echo "<div> <div>";
        }
        else{
        
        }

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