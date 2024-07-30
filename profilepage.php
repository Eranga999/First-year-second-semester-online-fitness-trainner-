<?php
include "config.php";

$email = $_GET['email'];

?>



<!DOCTYPE html>

<html>

<head>
    <script src="js/profilepagescript.js"></script>
	<link  rel="icon" type="image/jfif" href="images/whitelogo.png" class="center"  >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bash Fitness</title>
    <link rel="stylesheet" href="profilepage.css">
</head>
<body>

	<div class="banner">
        <div class="navbar">
            <ul>
                <li><a href="homepage.html">Home</a></li>
                <li><a href="trainerpage.html">Trainers</a></li>
                <li><a href="shoppage.html">Shop</a></li>
                <li><a href="reviewpage.html">Reviews</a></li>
                <li><a href="planpage.html">Plans</a></li>
                <li><a href="aboutpage.html">About</a></li>
        </ul>
		<div class="logo">
			<img src="images/redlogo.png" style="width:80px;height:80px">
		</div>
    </div>
	</div>
<div class= "bg">
<h1> Profile </h1>

<br>
<br>
<ul class="btn">
<li>
    <a href="deleteuseraccount.php?email=<?php echo $email; ?>">
        <button><h2>Delete Account</h2></button>
    </a>
</li>

    </li>
    <li><button onclick='loaddata("update")'><h2>Update Account</h2></button></li>
    <li><button onclick='loaddata("workoutplan")'><h2>Workout Plan</h2></button></li>
    <li><button onclick='loaddata("mealplan")'><h2>Meal Plan</h2></button></li>
</ul>
<div class="plan">
    <p id="ph1" class="c2"></p>
</div>
<br>
<br>
<br>
<footer>
	<div class="contactinfo">
        <p><h5>Email</h5> Bashfitness@gmail.com</p>
        <p><h5>Phone</h5> 0112345434</p>
        <p><h5>Instagram</h5> Bashfitness</p>
		<p><h5>Admin </h5> Bashadmin@gmail.com</p>
		<h5 style="margin-left:80px;">Copyright Reserved ©Bash fitness 2023</h5>
     </div>
	 
</footer>  
</div>
</body>
</html>