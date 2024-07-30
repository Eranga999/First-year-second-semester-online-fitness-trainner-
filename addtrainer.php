<?php
include "config.php";

if (isset($_GET['AdminPassword'])) {
    $AdminPassword = $_GET['AdminPassword'];
    echo $AdminPassword;
}

if (isset($_POST['submit'])) {
    // Get data from the form
    $TrainerID = $_POST['TrainerID'];
    $TrainerEmail = $_POST['TrainerEmail'];
    $TrainerName = $_POST['TrainerName'];
    $TrainerAge = $_POST['TrainerAge'];
    $Specialization = $_POST['Specialization'];

    // Insert data into the trainer table
    $sqltrainer = "INSERT INTO `trainer`(`TrainerId`,`TrainerEmail`, `TrainerName`, `TrainerAge`, `Specialization`, `Admin`) VALUES ('$TrainerID','$TrainerEmail', '$TrainerName', '$TrainerAge', '$Specialization', 'SiteManager')";

    // Execute the SQL query
    $resulttrainer = mysqli_query($conn, $sqltrainer);

    if ($resulttrainer) {
        header("Location: adminloginpage.php");
    } else {
        die("Error: " . mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/jfif" href="images/whitelogo.png" class="center">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bash Fitness</title>
    <link rel="stylesheet" href="paymentpage.css">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <ul>
                <li><a href="homepage.html">Home</a></li>
                <li><a href="trainerpage.html">Trainers</a></li>
                <li><a href="shoppage.html">Shop</a></li>
                <li><a href="reviewdashboard.php">Reviews</a></li>
                <li><a href="planpage.html">Plans</a></li>
                <li><a href="aboutpage.html">About</a></li>
            </ul>
            <div class="logo">
                <a href="profilepage.html">
                    <img src="images/redlogo.png" style="width:80px;height:80px">
                </a>
            </div>
        </div>
    </div>
    <div class="bg">
        <form method="POST" action="addtrainer.php">
            <div class = "container">

            <h1>Adding a Trainer</h1><br>
            <p>Enter the trainer Details</p><br>
            <hr>

            <label for="TrainerEmail"><b>Email</b></label>
            <input type="text" placeholder="Enter the trainers email" name="TrainerEmail" required>
            
            <label for="TrainerName"><b>Trainer Name</b></label>
            <input type="text" placeholder="Enter the trainers name" name="TrainerName" required>


            <label for="TrainerAge">Trainer Age:</label>
            <input type="number" placeholder="Enter the trainers age" name="TrainerAge" required><br><br>

            <label for="TrainerID">Trainer ID:</label>
            <input type="number" placeholder="Give your trainer an ID" name="TrainerID" required><br><br>

            <label for="Specialization">Specialization:</label>
            <input type="text" placeholder="Enter the trainer specialises in " name="Specialization" required><br><br>

            <div>
                <a href="admindashboard.php?AdminPassword=<?php echo isset($_GET['AdminPassword']) ? $_GET['AdminPassword'] : ''; ?>" onclick="alert('Trainer added');"><button type="submit" name="submit">Add</button></a>
            </div>
            </div>
        </form>
        
    </div>

    <footer>
        <div class="contactinfo">
            <p><h5>Email</h5> Bashfitness@gmail.com</p>
            <p><h5>Phone</h5> 0112345434</p>
            <p><h5>Instagram</h5> Bashfitness</p>
            <p><h5>Admin </h5> Bashadmin@gmail.com</p>
            <p><h5 style="margin-left:80px;">Copyright Reserved © Bash fitness 2023</h5></p>
        </div>
    </footer>
</body>

</html>



            

   