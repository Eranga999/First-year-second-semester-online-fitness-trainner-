<?php
include "config.php";

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['psw'];
$goal = $_POST['goal'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$gender = $_POST['gender'];

$sqli = "INSERT INTO `user`(`UserEmail`, `UserName`, `UserPassword`, `UserAge`, `Gender`, `Types`, `Goal`, `Heights`, `Weights`, `TrainerId`, `Workout`, `Meal`) VALUES ('$email','$name','$password','$age','$gender','none','$goal','$height','$weight','0','none','none')";

if (mysqli_query($conn, $sqli)) {
    // Redirect to loginpage.html after successful registration
    header("Location: loginpage.html");
    exit(); // Ensure no further processing of the script
} else {
    echo "Error !" . mysqli_error($conn);
}

mysqli_close($conn);
?>
