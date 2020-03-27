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
?>
        <!-- html tag for displaying posts -->
        <div class="row">
            <div class="col-lg-5">
                <strong> <?php echo $title; ?> </strong>                
                <p> <?php echo $body; ?> </p>   
                <button>Edit</button>  
                <button>View More</button>       
            </div>
        </div>

<?php
                // echo'
                
                // ';
            }
        }
        
        //footer
        include('../partials/footer.php');
    }
?>
