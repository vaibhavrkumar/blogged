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
        <form class="blogForm">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" id="blogTitle" placeholder="Enter title">
            </div>        
            <div class="form-group">
                <label>Body</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Write your blog here"></textarea>
            </div>      
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    ';
    //footer
    include('../partials/footer.php');

    }
?>
