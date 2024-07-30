<?php
include "config.php";

if (isset($_POST["update"])) {
    $UserEmail=$_GET['UserEmail'];
    $TrainerID = $_GET['Trainerid'];
    $Workout = $_POST['workout'];
    $Meal = $_POST['meal'];
    
    
    $sql = "UPDATE `user` SET `Workout`='$Workout', `Meal`='$Meal' WHERE UserEmail='$UserEmail'";

    $result = $conn->query($sql); 


   if ($result === TRUE) {

      header("Location: dashboard.php?msg= Record updated successfully  &UserEmail=$UserEmail &Trainerid=$TrainerID ");

   }else{

       echo "Error:" . $sql . "<br>" . $conn->error;

   }
}
  if (isset($_GET['UserEmail'])) {

      $UserEmail = $_GET['UserEmail']; 
  
      
      $sql = "SELECT * FROM `user` WHERE UserEmail = '$UserEmail'";
  
      $result = $conn->query($sql); 
  
      if ($result->num_rows > 0) {        
  
          while ($row = $result->fetch_assoc()) {

            $UserEmail=$row['UserEmail'];
            $Workout=$row['Workout'];
            $Meal=$row['Meal'];
  
          }
         }
         
      }
  

?>

<!DOCTYPE html>

<html>

<head>
	<link  rel="icon" type="image/jfif" href="images/whitelogo.png" class="center"  >
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
		</div>
    </div>
	<div class= "bg">
    <form method="post">
            <div class="container">
                <h1>Workout Uploader</h1><br>
                <p>Update users Training and Workout</p><br>
                <hr>
            
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter your email" name="email" required value="<?php echo $UserEmail ?>">
                <br>
                <label for="workout"><b>Workout</b></label>
                <input type="text" placeholder="Enter your email" name="workout" required value="<?php echo $Workout ?>">
                <br>
                <label for="meal"><b>Meal</b></label>
                <input type="text" placeholder="Enter your email" name="meal" required value="<?php echo $Meal ?>">
                <br>
                <div>
                    <button style="font-size:15px;" type="submit" class="btn btn-success" name="update">Update</button>
                    <button style="font-size:15px;"><a href="dashboard.php " class="btn btn-danger"></a>Cancel</button>
                </div>
            </div>
    </form>
    <footer>
        <div class="contactinfo">
            <p><h5>Email</h5> Bashfitness@gmail.com</p>
            <p><h5>Phone</h5> 0112345434</p>
            <p><h5>Instagram</h5> Bashfitness</p>
            <p><h5>Admin </h5> Bashadmin@gmail.com</p>
            <p><h5 style="margin-left:80px;">Copyright Reserved © Bash fitness 2023</h5></p>
         </div>
         
    </footer>
	</div>
</body>
</html>