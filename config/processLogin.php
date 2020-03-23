<?php
    require('db_connect.php');   
    
    if(isset($_POST['loginForm'])){
        $loginEmail = $_POST['loginemail'];
        $loginPassword = $_POST['loginpass'];
        //query
        $sqlOne = "select email, password from user where email = ? and password = ?";
        //prepare statement
        $stmtOne = $conn->prepare($sqlOne);
        //bind variable
        $stmtOne-> bind_param("ss",$loginEmail,$loginPassword);
        //execute
        $stmtOne.execute();
        echo "hi";
        //validate user
        $numRows = mysqli_num_rows($sqlOne);

        if($numRows == 1){
            echo "Welcome";
        }
        else{
            echo "No user record found";
        }
       
        //close the statement
        $stmtOne->close();
        //close cnx
        mysqli_close($conn);
    }
?>