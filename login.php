<?php 
include("header.php");
include('dbconnection.php'); 

session_start();
if(isset($_SESSION['userID']) && !empty($_SESSION['userID'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $_SESSION['email'] = $email;
  $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['userID'] = $row['id'];
    header("Location: dashboard.php"); // Replace 'dashboard.php' with the desired page after successful login
    exit();
  } else {
    $error = "Invalid Email or Password";
  }
}
?>

<section class="vh-100 d-flex align-items-center">
  <div class="container">
    <div class="row">
    <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="images/logo4.jpg" alt="Login image" class="w-100 vh-100"
          style="object-fit: cover; object-position: left;">
      </div>
      
      <div class="col-sm-6">

        <div class="px-5 ms-xl-4 text-center py-5">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0"><img src="images/logo2.jpg" height="100px" width="150px"></span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem; margin: 0 auto;" method="POST" action="">

            <div class="form-outline mb-4">
            <label class="form-label" for="form2Example18">Email</label>
              <input type="email" id="form2Example18" class="form-control form-control-lg" name="email">
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="form2Example38">Password</label>
              <input type="password" id="form2Example38" class="form-control form-control-lg" name="password" required>
            </div>

            <?php if (isset($error)) { ?>
              <p class="error-message"><?php echo $error; ?></p>
            <?php } ?>
            <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            <p>Don't have an account? <a href="register.php" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
     
    </div>
  </div>
</section>

<?php include("footer.php"); ?>