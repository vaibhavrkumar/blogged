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
            //encrypt the password
            $password = sha1($password);
            //construct the query
            $sql = "insert into users(username,email,password_string) values(?,?,?)";

            $stmt = $conn->prepare($sql);
            //bind variable
            $stmt->bind_param("sss", $username, $email, $password);
            //execute the prepared statement
            $stmt->execute();
            //check if query was executed successfully
            if($stmt){                
                header('Location: ../login.php');
                echo "<div class='alert alert-success'>
                <strong>Success!</strong> Indicates a successful or positive action.
                </div>";
            }
            else{
                echo "Error in creating acc.";
            }
        }
        else{
            $error = "Please fill all thee details.";
        }

        //close the statement
        $stmt->close();
        //close cnx
        mysqli_close($conn);
    }
?>