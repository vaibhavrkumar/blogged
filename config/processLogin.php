<!-- Log in exsisting user -->
<?php 
    require('db_connect.php');   
    
    if(isset($_POST['submitEmail'])){
        $loginEmail = $_POST['loginemail'];
        $loginPassword = $_POST['loginpass'];
        $loginPassword = sha1($loginPassword);
        //query
        $sqlOne = "select email, password_string, username from users where email = '$loginEmail' and password_string = '$loginPassword'";
        $result = mysqli_query($conn, $sqlOne) or trigger_error($conn->error."[ $sqlOne]");
        //validate unique user
        $numRows = mysqli_num_rows($result);

        if($numRows == 1){
            // echo "Weelcomne";
            header('Location: ../userView/dashboard.php');
        }
        else{
            echo "User not found";
        }
        //close cnx
        mysqli_close($conn);
    }
?>