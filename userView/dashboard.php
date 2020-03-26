<?php session_start();
    if(!$_SESSION['login_user']){
        header('Location: ../nonuserView/login.php');
    }
    else{
        //header
        include('../partials/customHeader.php');
        echo "Dashboard";
        //footer
        include('../partials/footer.php');
    }
?>
