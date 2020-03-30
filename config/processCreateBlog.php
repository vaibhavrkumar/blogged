<!-- creates new blog -->
<?php
    session_start();
    require('db_connect.php');

    if(isset($_POST['submitPost'])){
        $blogTitle = $_POST['blogTitle'];
        $blogBody = $_POST['blogBody'];

        //check if title and body are empty
        if($blogTitle !="" && $blogBody !=""){
            //get the user_id of the user
            $user_id = $_SESSION['login_user'];
            $sql = "select id from usersTwo where email='$user_id'";
            $result = $conn->query($sql) or die($conn->error);
            $row = $result->fetch_assoc();
            //var_dump($row["id"]);

            //construct the blogPost query
            $sqlTwo = "insert into posts(user_id,title_str,body_str) values(?,?,?)";
            //prepare stmt
            $stmt = $conn->prepare($sqlTwo);
            //bind var
            $user_id_int = (int) $row["id"];
            $stmt->bind_param("sss", $user_id_int, $blogTitle, $blogBody);
            //execute prepared statement
            $stmt->execute();
            //check if query was excecited 
            if($stmt){
                header('Location: ../userView/dashboard.php');
            }
            else{
                echo "Something went wrong. Try again";
            }

            //close the statement
            $stmt->close();

        }
        else{
            echo "Title and Body fields can't be empty.";
        }
    }

?>