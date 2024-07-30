<?php
include "config.php";
$UserEmail=$_GET["UserEmail"];
$sql = "DELETE FROM `reviews` WHERE UserEmail = '$UserEmail'";

$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location:reviewdashboard.php?msg=Data deleted successfully ");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>