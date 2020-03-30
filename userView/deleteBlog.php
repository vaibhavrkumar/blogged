<?php
    session_start();
    require('../config/db_connect.php');
    if(!$_SESSION['login_user']){
        header('Location: ../nonuserView/login.php');
    }
    else{        
        $post_id = $_GET['id'];
        // var_dump($post_id);

        //retrieve specific post
        $sql = "delete from posts where id = '$post_id'";
        $result = $conn->query($sql) or die($conn->error);

        header('Location: ../userView/dashboard.php');
    }
?>