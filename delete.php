<?php
include('dbconnection.php');

session_start();

$id = $_SESSION['userID'];

if (isset($_SESSION['userID']) && isset($_GET['delid'])) {

$rid=$_GET['delid'];

$sql=mysqli_query($con,"delete from tblusers where ID=$rid");

   
    if($sql){
       session_destroy();
       header("Location: login.php");
    }


}else {
    // Redirect to login if the user is not logged in
    header("Location: index.php");
    exit();
}
?>