<!-- header -->
<?php include('header.php');?>

<body>
    <h2>Login with Email</h2>
    <?php require_once('config/processLogin.php'); ?>
    <form action="config/processLogin.php" name="loginform" method="POST">
        <label>Email</label>
        <input type="email" id="loginemail" name="loginemail" placeholder="Enter email id" required><br>
        <label>Password</label>
        <input type="password" id="loginpass" name="loginpass" placeholder="Enter password" required><br>
        <button type="submit" name="submitEmail">Log In</button>
    </form>
</body>
 <!-- footer -->
 <?php include('footer.php');?>