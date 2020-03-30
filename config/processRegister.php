<!-- inserts new user into DB -->
<?php
    //require('email.php');
    require('db_connect.php');    

    if(isset($_POST['submitEmail'])){
        //retrieve info. from the form
        $email = $_POST['emailid'];
        $username = $_POST['username'];
        $defpassword = $_POST['password'];

        //check if the form is empty
        if($email != "" && $username != "" && $defpassword != ""){
            //encrypt the password
            $password = password_hash($defpassword, PASSWORD_DEFAULT);
            //construct the query
            $sql = "insert into usersTwo(username,email,password_string) values(?,?,?)";

            $stmt = $conn->prepare($sql);
            //bind variable
            $stmt->bind_param("sss", $username, $email, $password);
            //execute the prepared statement
            $stmt->execute();
            //check if query was executed successfully
            if($stmt){                
                header('Location: ../nonuserView/login.php');
                echo "Account Created!";
            }
            else{
                echo "Error in creating account.";
            }

        
             //close the statement
            $stmt->close();
        }
        else{
            $error = "Please fill all the details.";
        }
               
        //close cnx
        mysqli_close($conn);
    }
?>