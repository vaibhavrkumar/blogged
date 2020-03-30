<!-- connect to databses -->
<?php
  include('../config/db_connect.php');
?>
<!-- header -->
<?php include('../partials/header.php');?>

<!-- body -->
<body>
  <!-- Landing Page -->
  <section class="landingPage">
    <div class="background-image" style="background-image: url(unsplash.jpg);"></div>
    <h5>Get smarter about things that intrests you.</h5>
    <h4>Select a topic to read and we will suggest you more.</h4>

    <button id="button"> <a href="signUp.php">Get Started</a> </button>
  </section>

  <section class="offers">
    <h3 id="title">Why Blog with us?</h3>
    <p id="para">There is no blogging platform like ours. We promise once you use our platform you are never going 
        back to any other platforms. Read few of the reasons why our users love using Blogged.
    </p>
    <hr>

    <ul class="grid">
      <li>
        <i class="fas fa-check-circle"></i>
        <h4> A voice to the mass</h4>
      </li>
      
      <li>
        <i class="fas fa-check-circle"></i>
        <h4> No Ads </h4>
      </li>

      <li>
        <i class="fas fa-check-circle"></i>
        <h4> Regularly Monitored by our team </h4>
      </li>

      <li>
        <i class="fas fa-check-circle"></i>
        <h4> Publish anytime </h4>
      </li>

      <li>
        <i class="fas fa-check-circle"></i>
        <h4> All for free</h4>
      </li>

    </ul>
  </section>       
</body>
 <!-- footer -->
 <?php include('../partials/footer.php');?>
