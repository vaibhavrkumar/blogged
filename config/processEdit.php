<!-- creates new blog -->
<?php
    session_start();
    require('db_connect.php');

    if(isset($_POST['editPost'])){
        $post_id = $_POST['post_id'];
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
            $sqlTwo = "update posts set user_id = ?, title_str = ?, body_str = ? where id = ?";
            //prepare stmt
            $stmt = $conn->prepare($sqlTwo);
            //var_dump($post_id);
            //bind var
            $user_id_int = (int) $row["id"];
            $post_id_int = (int) $post_id;
            $stmt->bind_param("issi", $user_id_int, $blogTitle, $blogBody, $post_id_int);
            
            //execute prepared statement
            $stmt->execute();
            //check if query was excecited 
            if($stmt){
                header('Location: ../userView/dashboard.php');
            }
            else{
                print_r($mysqli->error_list);
                echo $sqlTwo;
            }

            //close the statement
            $stmt->close();

        }
        else{
            echo "Title and Body fields can't be empty.";
        }
    }

?>