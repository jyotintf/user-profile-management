<?php 
//Database Connection
include('dbconnection.php');
include('header1.php');
session_start();

if(isset($_POST['submit']) && isset($_FILES['image']))
  {

    $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));


  	$uid=$_GET['userid'];
  
   $oldppic=$_POST['oldpic'];
$oldprofilepic="images"."/".$oldppic;
// get the image extension
$extensions= array("jpeg","jpg","png");
      
if(in_array($file_ext,$extensions)=== false){
   $errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 2097152){
   $errors[]='File size must be excately 2 MB';
}

move_uploaded_file($file_tmp,"images/".$file_name);
  // Query for data insertion
     $query=mysqli_query($con, "update tblusers set Image='$file_name' where id='$uid' ");
    if ($query) {
   
    echo "<script>alert('Profile pic updated successfully');</script>";
    header("Location: read.php");
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}

?>

<div class="signup-form">
    <form  method="POST" enctype="multipart/form-data">
 <?php
$eid=$_GET['userid'];
$ret=mysqli_query($con,"select * from tblusers where ID='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>
		<h2>Update </h2>
		<p class="hint-text">Update your profile pic.</p>
<input type="hidden" name="oldpic" value="<?php  echo $row['Image'];?>">
	<div class="form-group">
<img src="images/<?php  echo $row['Image'];?>" width="120" height="120">
		</div>

  <div class="form-group">
  <input type="file" class="form-control" name="image"  required="true">
  <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
</div> 



		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
              <?php 
}?>
    </form>

</div>

<?php include('footer.php'); ?>