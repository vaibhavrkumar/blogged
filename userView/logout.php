<?php
    session_start();
    session_destroy();
    header('Location: ../nonuserView/login.php');
?>