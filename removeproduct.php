<?php
include "config.php";

$ProductId = $_GET["ProductId"]; 
$AdminName = $_GET["AdminName"];
$AdminPassword = $_GET["AdminPassword"];

$sql = "DELETE FROM `product` WHERE ProductId = '$ProductId'";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: shopdashboard.php?msg=Data deleted successfully&AdminName=$AdminName&AdminPassword=$AdminPassword"); 
} else {
    echo "Failed: " . mysqli_error($conn);
}
?>

