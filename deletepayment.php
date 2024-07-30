<?php
include "config.php";
$id = $_GET["TransactionID"];
$UserEmail=$_GET["UserEmail"];
$sqltranscation = "DELETE FROM `transactions` WHERE TransactionID = $id";
$resulttransaction = mysqli_query($conn, $sqltranscation);

if ($resulttransaction) {
  header("Location:afterpayment.php?msg=Data deleted successfully &UserEmail=$UserEmail &id=$TransactionID");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>