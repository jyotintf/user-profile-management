<?php 
include('header.php'); 
include('dbconnection.php');

session_start();
if(isset($_SESSION['userID']) && !empty($_SESSION['userID'])) {
    header("Location: dashboard.php");
}
?>


<section class="vh-100 bg-image"> 
        <div class="container">
            <div class="row">
            <div class="col-sm-6">
            <h4 class="text-uppercase text-center">Create an account</4>
              <div class="signup-form">
                <form method="POST" action="insert.php" class="user_form" name="RegForm" id="form">
                  <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                  </div>

                  <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="true">
                  </div>
                
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="true" minlength="4" maxlength="10" pattern="[0-9]+">
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block" id="btn" name="submit">Submit</button>
                  </div>
                  <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>
                </form>
              </div>
            </div>
            <div class="col-sm-6">
           <img src="images/logo5.jpg" height="400px" width="350px">
            </div>
          </div>
        </div> 
</section>


<?php include('footer.php'); ?>

<script>
//   form.addEventListener("submit", (e) => {
//   e.preventDefault();
//   let email = document.getElementById('email').value;
//   var regEmail= /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

//   if (email == "" || !regEmail.test(email)) {
//         window.alert("Please enter a valid e-mail address.");
//         return false;
//     }else {
//       return true;
//     }
// });

</script>