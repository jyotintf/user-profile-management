<?php 
include('header1.php'); 
include('dbconnection.php');

session_start();
if(!isset($_SESSION['userID']) && empty($_SESSION['userID'])) {
    header("Location: login.php");
}

$id = $_SESSION['userID'];
$result = mysqli_query($conn,"select * from users where id = '$id'");
$user_details = $result->fetch_assoc();
?>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Profile <b>Details</b></h2>
                    </div>
                     <div class="col-sm-7" align="right">
                        <a href="edit.php?editid=<?php echo htmlentities ($user_details['id']);?>" class="btn btn-primary"><span>Update</span></a> 

                        <a href="dashboard.php" class="btn btn-primary"><span>Back</span></a>             
                    </div>
                </div>
            </div>
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">             
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td><?php  echo $user_details['name'];?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php  echo $user_details['email'];?></td>
                    </tr>
                    <tr>
                        <th>Mobile Number</th>
                        <td><?php  echo $user_details['phone_number'];?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><?php  echo $user_details['address'];?></td>
                    </tr>         
                </tbody>
            </table>
        </div>
    </div>
</div>     
<?php include('footer.php'); ?>