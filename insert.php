<?php
//Databse Connection file
include('dbconnection.php');

if (isset($_POST['submit'])) {
  //getting the post values
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
   
    $query_email_exist = "SELECT * FROM users WHERE email = '$email'";
    $email_exist = mysqli_query($conn, $query_email_exist);

    if (mysqli_num_rows($email_exist) > 0) {
        echo "<script>alert('Email already exists. Please use a different email.');</script>";
        echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
      }else{
    // Query for data insertion
    $query = mysqli_query($conn, "insert into users(name,email,password) value('$name', '$email', '$password')");
    $result = mysqli_query($conn,"select * from users where email = '$email'");
    $user_details = $result->fetch_assoc();
    if ($query) {
      session_start();
      $_SESSION['userID'] = $user_details['id'];
        echo "<script>alert('Registration Successfull');</script>";
        echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please Try Again');</script>";
    }
  }

 }
?>