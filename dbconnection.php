<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="profile_management_system";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(! $conn ) {
    die('Could not connect: ' . mysql_error());
}
 
$sql = "CREATE DATABASE IF NOT EXISTS $database";
$db_created = mysqli_query($conn, $sql);

 if(!$db_created){
	die(mysqli_error($conn));
}

$retval = mysqli_select_db( $conn, $database );

if(! $retval ) {
   die('Could not select database: ' . mysqli_error($conn));
}

$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT PRIMARY KEY AUTO_INCREMENT, 
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_number VARCHAR(100) NOT NULL,
    address VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    updated_at TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW(),
    created_at TIMESTAMP NOT NULL DEFAULT NOW()
    )";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $conn->error;
}


?>  