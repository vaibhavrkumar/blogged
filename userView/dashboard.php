<?php session_start();?>

<?php if(!$_SESSION['loginEmail']):?>
    <?php header('Location: ../nonuserView/login.php');?>
<?php else:?>
<!-- header -->
<?php include('../partials/customHeader.php');?>
    <p>Welcome <?php echo $_SESSION['loginEmail'];?> </p>
<!-- footer -->
<?php include('../partials/footer.php');?>

<?php endif;?>