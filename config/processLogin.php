<!-- Log in exsisting user -->
<?php 
    if(!isset($_SESSION)) { session_start(); }
    require('db_connect.php');   

    if(isset($_POST['submitEmail'])){
    $loginEmail = $_POST['loginemail'];
    $loginPassword = $_POST['loginpass'];
    //store session data
    $_SESSION['login_user'] = $loginEmail;

    //query
    $sqlOne = "select email, password_string, username from usersTwo where email = '$loginEmail'";
    $result = mysqli_query($conn, $sqlOne) or trigger_error($conn->error."[ $sqlOne]");
    $user = mysqli_fetch_row($result);
    //validate unique user
    $numRows = mysqli_num_rows($result);

    if($numRows == 1){
        //var_dump($user);
        if(password_verify($loginPassword, $user[1])){
            header('Location: ../userView/dashboard.php');
        }
        else{
            echo '<script language="javascript">
                    alert("Incorrect email or password.");
                    window.location= "../nonuserView/login.php";
                    </script>';
        }
    }
    else{
        //var_dump($numRows);
            echo '<script language="javascript">
                    alert("User does not exist! Sign up to create an account.");
                    window.location= "../nonuserView/login.php";
                    </script>';
        
    }
    //close cnx
    mysqli_close($conn);
    }
    
?>