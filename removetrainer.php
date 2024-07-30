<?php
include "config.php";
$id = $_GET["TrainerId"];
$AdminPassword = $_GET["AdminPassword"];
$sql = "DELETE FROM `trainer` WHERE TrainerId = $id";
$result= mysqli_query($conn, $sql);

if ($result) {
  header("Location:admindashboard.php?msg=Data deleted successfully &AdminPassword=$AdminPassword");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>