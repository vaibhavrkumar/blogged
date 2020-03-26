<!-- header -->
<?php session_start();
include('../partials/header.php');?>

<body>
    <section class="emailLogin">
        <h2>Login with Email</h2>
        <?php require_once('../config/processLogin.php'); ?>
        <form action="../config/processLogin.php" name="loginform" method="POST">
            <label>Email</label>
            <input type="email" id="loginemail" name="loginemail" placeholder="Enter email id" required><br>
            <label>Password</label>
            <input type="password" id="loginpass" name="loginpass" placeholder="Enter password" required><br>
            <button type="submit" name="submitEmail">Log In</button>
        </form>
    </section>
</body>
 <!-- footer -->
 <?php include('../partials/footer.php');?>
