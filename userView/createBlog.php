<!-- header -->
<?php include('../partials/header.php');?>
<!-- Body -->
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
<!-- footer -->
<?php include('../partials/footer.php');?>
