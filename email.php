<!-- header -->
<?php include('header.php');?>

<!-- body -->
  <body>
    <a name="SignUp"></a>
    <h1>Fill up Your Details Below:</h1>
    <p>Create an account to make Blogs, to share Blogs and to comment on Blogs</p>
    <br>

    <!-- email form -->
    <?php require_once('config/insert.php'); ?>
    <form action="config/insert.php" name="emailform" method="POST">
      <label>Email</label><br>
      <input type="text" id="emailid" name="emailid" placeholder="email id" required><br>
      <label>Username</label><br>
      <input type="text" id="username" name="username" placeholder="username" required><br>
      <label>Password </label><br>
      <input type="text" id="password" name="password" placeholder="password" required><br>
      <label>Repeat Password </label><br>
      <input type="text" id="password" name="repeatPassword" placeholder="password" required><br>

      <button class="button" type="submit" name="submitEmail" onclick="Javascript:emailValidate();">
        Create Account
      </button>
    </form>


    <p>Already have a account? <a href="signIn.php">Sign in</a></p>
    <p>To make Blogged work, we log user data and share it with service providers. Click “Sign Up” above to accept Blogged's
    <a href="https://policy.medium.com/medium-terms-of-service-9db0094a1e0f">Terms of Service</a> &
    <a href="https://policy.medium.com/medium-privacy-policy-f03bf92035c9">Privacy Policy</a>.
    </p>
  </body>
  <!-- footer -->
  <?php include('footer.php');?>