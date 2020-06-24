<!-- connect to databses -->
<?php
  include('../config/db_connect.php');
?>
<!-- header -->
<?php include('../partials/header.php');?>

<!-- link style sheets -->

<!-- Load React. -->
<!-- Note: when deploying, replace "development.js" with "production.min.js". -->
<script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin></script>

<!-- body -->
<body>
  <!-- React -->
  <div id="app"></div>
        
  <script type="text/babel">
      class App extends React.Component {
          state = {
              name: "test1",
              age: 22
          }

          handleClick(e) {
              console.log(e.target);
          }

          render(){
              return (
                  <div className="app-content">
                      <h1> Hi there, {this.state.name} </h1>
                      <h1>Next year I will be: {this.state.age + 1} years old</h1>
                      <button onClick= {this.handleClick}> Click me!</button>
                  </div>
              )
          }
      }

      ReactDOM.render(<App />, document.getElementById('app'));
  </script>
  
  <!-- ... existing HTML ... -->

  <!-- Landing Page -->
  <section class="landingPage">
    <!-- <div style="background-image: url('unsplash.jpg');"> -->
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
