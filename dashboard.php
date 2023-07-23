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

?>


<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>Hi, <b><?php echo $user_details['name'] ?></b></h2>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-sm-3">
                            <a href="edit.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i>
                                <span> Update Profile</span></a>
                        </div>
                    </div>
                    <div class="row pt-1">
                        <div class="col-sm-3">
                            <a href="user-profile.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i>
                                <span> View Profile &nbsp;&nbsp;&nbsp;</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>