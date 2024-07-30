<?php
session_start();
if (isset($_POST['TrainerEmail']) && isset($_POST['TrainerID'])) {
    include "config.php"; // Include your database connection script
    
    $TrainerEmail = mysqli_real_escape_string($conn, $_POST['TrainerEmail']);
    $TrainerID = mysqli_real_escape_string($conn, $_POST['TrainerID']);

    $query = "SELECT * FROM `trainer` WHERE `TrainerEmail` = '$TrainerEmail' AND `Trainerid` = $TrainerID";

    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) == 1) {
        // Valid login credentials
        $row = mysqli_fetch_array($result);
        $_SESSION["TrainerEmail"] = $row["TrainerEmail"];
        $_SESSION["TrainerID"] = $row["Trainerid"];
        header("Location: dashboard.html"); // Redirect to the dashboard on successful login
        exit();
    } else {
        // Invalid credentials
        header("Location: logintrainerpage.html"); 
        exit();
    }
} else {
    // Handle the case where the form hasn't been submitted
    header("Location: logintrainerpage.html");
    exit();
}
?>
