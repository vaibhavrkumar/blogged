<?php session_start();
    if(!$_SESSION['login_user']){
        header('Location: ../nonuserView/login.php');
    }
    else{
        require('../config/db_connect.php');
        //header
        include('../partials/customHeader.php');
        //body
        //show all blog posts
        $sql = "select * from posts";
        $result = $conn->query($sql) or die($conn->error);
        $row = $result->fetch_assoc();
        
        //footer
        include('../partials/footer.php');
    }
?>
