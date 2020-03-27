<?php session_start();
    if(!$_SESSION['login_user']){
        header('Location: ../nonuserView/login.php');
    }
    else{
    //header
    include('../partials/customHeader.php');
    //Body
    echo '
    <div class="createBlogDiv" style="border:1px solid black;">
        <h1>New Blog</h1>
        <!-- Bootstrap forms -->
        <form action="../config/processCreateBlog.php" class="blogForm" name="createBlogForm" method="POST">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" id="blogTitle" name="blogTitle" placeholder="Enter title" required>
            </div>        
            <div class="form-group">
                <label>Body</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="blogBody" rows="10" placeholder="Write your blog here" required></textarea>
            </div>      
            <button type="submit" class="btn btn-primary" name="submitPost">Submit</button>
        </form>
    </div>
    ';
    //footer
    include('../partials/footer.php');

    }
?>
