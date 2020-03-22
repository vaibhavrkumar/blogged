<!-- this file controls Create User via email form -->
<?php
    require('db_connect.php');

    if(isset($_POST['submitEmail'])){
        $emailid = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password_string'];

        $mysqli->query("insert into users(id, username, email, password_string, created_at) values('2',$username','$emailid','$password','13:10:11')")
        or die($mysqli->error);
    }
?>