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
?>

    <div class="createBlogDiv" style="border:1px solid black;">
        <h1 style="font-size:5em"> <b> <?php echo $title;?> </b> </h1> <br>
        <p style="font-size:2em"> <?php echo $body; ?> </p> <br>        
        <a href=../userView/editBlog.php?id=<?php echo $post_id;?>>
            <button class="btn btn-primary" style="margin-left: 60em;">EDIT</button>
        </a> 
        <a href=../userView/deleteBlog.php?id=<?php echo $post_id;?>>
            <button class="btn btn-danger">DELETE</button>                        
        </a>        
    </div>
                
<?php        
        }
    }
    //footer    
    include('../partials/footer.php');
}
?>