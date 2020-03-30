<?php session_start();
    if(!$_SESSION['login_user']){
        header('Location: ../nonuserView/login.php');
    }
    else{
    //header
    include('../partials/customHeader.php');
    require('../config/db_connect.php');
    //Body
    $post_id = $_GET['id'];
    //var_dump($post_id);

    //retrieve specific post
    $sql = "select * from posts where id = '$post_id'";
    $result = $conn->query($sql) or die($conn->error);

    
    if(mysqli_num_rows($result)>0){
        while($row = $result->fetch_assoc()){
            $title = $row['title_str'];
            $body = $row['body_str'];
            //$post_id = $row['id'];
            //echo $title;
?>
    <!-- Body -->
    <div class="createBlogDiv" style="border:1px solid black;">
        <h1>Edit Blog</h1>
        <!-- Bootstrap forms -->
        <form action="../config/processEdit.php" class="blogForm" name="editBlogForm" method="POST">
            <input type="hidden" name="post_id" value=<?php echo $post_id; ?>>
            <div class="form-group">
                <label>Title</label>
                <input type="text" value=<?php echo $title;?> class="form-control" id="blogTitle" name="blogTitle" required>
            </div>        
            <div class="form-group">
                <label>Body</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="blogBody" rows="10" required>
                    <?php echo $body; ?>
                </textarea>
            </div>      
            <button type="submit" class="btn btn-primary" name="editPost">Save Changes</button>
            <button type="reset" name="cancelEdit">Cancel Edit</button>
        </form>
    </div>

<?php
            }
        }
    //footer
    include('../partials/footer.php');

    }
?>