<!-- header -->
<?php include('header.php');?>

<!-- body -->
  <body>
    <a name="SignUp"></a>
    <h1>Fill up Your Details Below:</h1>
    <p>Create an account to make Blogs, to share Blogs and to comment on Blogs</p>
    <br>

    <!-- email form -->

    <form action="" name="emailform">
      <label for="fname">Email</label><br>
      <input type="text" id="emailid" name="emailid" placeholder="email id"><br>
      <label for="lname">Password </label><br>
      <input type="text" id="password" name="password" placeholder="password"><br>
      <label for="lname">Repeat Password </label><br>
      <input type="text" id="password" name="password" placeholder="password"><br>

      <button class="button" name="submitEmail" onclick="Javascript:emailValidate();">
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