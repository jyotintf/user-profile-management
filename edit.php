<?php 
include("header1.php"); 
include('dbconnection.php');
session_start();
if(!isset($_SESSION['userID']) && empty($_SESSION['userID'])) {
    header("Location: login.php");
}
$id = $_SESSION['userID'];
$result = mysqli_query($conn,"select * from users where id = '$id'");
$user_details = $result->fetch_assoc();

if(isset($_POST['submit']) && isset($_SESSION['userID']))
  {
  	$id = $_SESSION['userID'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    //Query for data updation
     $query=mysqli_query($conn, "update users set name = '$name', phone_number = '$phone_number', email = '$email', address ='$address' where id ='$id'");
     
  if ($query) {
    echo "<script>alert('User Profile Updated Successfully');</script>";
    echo "<script type='text/javascript'> document.location ='user-profile.php'; </script>";
  }
  else
  {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
  }
}
?>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">

                <div class="row">
                    <div class="col-sm-5">
                        <h2>Update <b>Details</b></h2>
                    </div>
                     <div class="col-sm-7" align="right">
                        <a href="user-profile.php" class="btn btn-primary"><span>View Profile</span></a> 
                        <a href="dashboard.php" class="btn btn-primary"><span>Back</span></a>             
                    </div>
                </div>

                <form  method="POST">
                  <div class="form-group">
                  <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php  echo $user_details['name'];?>" required="true"></div>       	
                  <div class="form-group">
                  <label class="form-label" for="phone_number">Phone Number</label>
                      <input type="text" class="form-control" name="phone_number" value="<?php  echo $user_details['phone_number'];?>" required="true" maxlength="10" pattern="[0-9]+">
                  </div>
                  <div class="form-group">
                  <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php  echo $user_details['email'];?>" required="true">
                  </div>
                  <div class="form-group">
                  <label class="form-label" for="address">Address</label>
                      <textarea class="form-control" name="address" required="true"><?php  echo $user_details['address'];?></textarea>
                  </div>   
                  <div class="form-group">
                      <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
                  </div>
              </form>

            </div>
        </div>
    </div>
</div>
</div>

</div>
<?php include('footer.php'); ?>