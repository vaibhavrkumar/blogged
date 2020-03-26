<!-- header -->
<?php include('../partials/header.php');?>

<!-- body -->
  <body>
    <section class="emailForm">
      <a name="SignUp"></a>
      <h1>Fill up Your Details Below:</h1>
      <p>Create an account to make Blogs, to share Blogs and to comment on Blogs</p>
      <br>

      <!-- email form -->
      <?php require_once('../config/processRegister.php'); ?>
      <form action="../config/processRegister.php" name="emailform" method="POST">
        <label>Email</label><br>
        <input type="text" id="emailid" name="emailid" placeholder="email id" required><br>
        <label>Username</label><br>
        <input type="text" id="username" name="username" placeholder="username" required><br>
        <label>Password </label><br>
        <input type="text" id="password" name="password" placeholder="password" required><br>
        <label>Repeat Password </label><br>
        <input type="text" id="password" name="repeatPassword" placeholder="password" required><br>

        <button class="button" type="submit" name="submitEmail">
          Create Account
        </button>
      </form>


      <p>Already have a account? <a href="signIn.php">Sign in</a></p>
      <p>To make Blogged work, we log user data and share it with service providers. Click “Sign Up” above to accept Blogged's
      <a href="#">Terms of Service</a> &
      <a href="#">Privacy Policy</a>.
      </p>
    </section>
  </body>
  <!-- footer -->
  <?php include('../partials/footer.php');?>