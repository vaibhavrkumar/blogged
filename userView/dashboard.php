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

        
        if(mysqli_num_rows($result)>0){
            while($row = $result->fetch_assoc()){
                $title = $row['title_str'];
                $body = $row['body_str'];
                $post_id = $row['id'];
?>
        <!-- html tag for displaying posts -->
        <div class="row" style="margin-left:1em;">            
            <div class="col-lg-5">
                <!-- Displaying each posts -->
                <strong> <?php echo $title; ?> </strong>                
                <p> <?php echo $body; ?> </p>   
                <!-- Edit and Delete  -->
                <button class="btn btn-info"><a href=../userView/viewBlog.php?id=<?php echo $post_id;?>>Read Blog</a></button>                         
            </div>
        </div>

<?php               
            }
        }        
        //footer
        include('../partials/footer.php');
    }
?>
