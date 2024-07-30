<?php
$servername="localhost";
$username="root";
$password = "";
$dbname="onlinefitnesstrainer";

 $conn = mysqli_connect($servername, $username, $password, $dbname);

 if(!$conn){
    die("connection error" . mysqli_connect_error());
 }

 echo "connected sucessfully";
?>