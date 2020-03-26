<!-- header -->
<?php include('../partials/header.php');?>

<!-- body -->
<body>
  <section class="signUp">
    <a name="SignUp"></a>
    <h1>Join Blogged.</h1>
    <p>Create an account to make Blogs, to share Blogs and to comment on Blogs</p>
    <button class="G" onclick="window.location.href='https://accounts.google.com/signin/oauth/oauthchooseaccount?client_id=216296035834-k1k6qe060s2tp2a2jam4ljdcms00sttg.apps.googleusercontent.com&as=9KgPT65zE7ndcY82IHL5rA&destination=https%3A%2F%2Fmedium.com&approval_state=!ChRSdktYRE9zQWhZZlZudE9kQlFpXxIfTTNMNnNYWWpYY29Xa013TWpqbVNUV1d5TDNaYUJSYw%E2%88%99AJDr988AAAAAXkx-ZgbB1cqhwAj-t7dzQJ4xtpXKLdDk&oauthgdpr=1&xsrfsig=ChkAeAh8Ty4ms_ROeEIJaoKpHGkct0QuahMuEg5hcHByb3ZhbF9zdGF0ZRILZGVzdGluYXRpb24SBXNvYWN1Eg9vYXV0aHJpc2t5c2NvcGU&flowName=GeneralOAuthFlow';"type="button" name="button">Sign-up with Google</button>
    <br>
    <button class="fb" onclick="window.location.href='https://www.facebook.com/login.php?skip_api_login=1&api_key=542599432471018&kid_directed_site=0&app_id=542599432471018&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv3.3%2Fdialog%2Foauth%3Fclient_id%3D542599432471018%26redirect_uri%3Dhttps%253A%252F%252Fmedium.com%252Fm%252Fcallback%252Ffacebook%26scope%3Dpublic_profile%252Cemail%26state%3D%257Chttps%253A%252F%252Fmedium.com%252F%253Fsource%253D--------------------------landing_home_nav-%257Cregister%257Cf1d6d83ce7662ff3351b12238f034753%26response_type%3Dtoken%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D9c184312-3ac8-4937-93c4-c70b8702f02a&cancel_url=https%3A%2F%2Fmedium.com%2Fm%2Fcallback%2Ffacebook%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3D%257Chttps%253A%252F%252Fmedium.com%252F%253Fsource%253D--------------------------landing_home_nav-%257Cregister%257Cf1d6d83ce7662ff3351b12238f034753%23_%3D_&display=page&locale=en_US&pl_dbl=0';"type="button" name="button">Sign-up with Facebook</button>
    <br>

    <button class="email" type="button" name="button">
      <a href="email.php">Sign-up with Email</a> 
    </button>
    <br>

    <p>Already have a account? <a href="signIn.php">Sign in</a></p>
    <br>
    <br>
    <p>To make Blogged work, we log user data and share it with service providers. Click “Sign Up” above to accept Blogged's
    <a href="#">Terms of Service</a> &
    <a href="#">Privacy Policy</a>.
    </p>
  </section>
  <!-- footer -->
  <?php include('../partials/footer.php');?>
</body>

