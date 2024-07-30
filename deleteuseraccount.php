<?php
include "config.php";

$UserEmail = $_GET["email"];
$sql = "DELETE FROM `user` WHERE UserEmail = '$UserEmail'";

$result = mysqli_query($conn, $sql);


if ($result) {
    header("Location: welcomepage.html?msg=Data deleted successfully&UserEmail=$UserEmail&");
    exit; // Terminate the script to ensure the redirection occurs
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
  
?>