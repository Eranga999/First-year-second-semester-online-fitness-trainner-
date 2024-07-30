<!DOCTYPE html>

<html>

<head>
	<link  rel="icon" type="image/jfif" href="images/whitelogo.png" class="center"  >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bash Fitness</title>
    <link rel="stylesheet" href="logintrainerpage.css">
</head>
<body>

	<div class="banner">
        <div class="navbar">
            <ul>
                <li><a href="altpage.html">Home</a></li>
                <li><a href="loginpage.html"onclick="alert('Login to view Trainer');">Trainers</a></li>
                <li><a href="loginpage.html"onclick="alert('Login to view Shop');">Shop</a></li>
                <li><a href="reviewdashboard.php">Reviews</a></li>
                <li><a href="planpage.html">Plans</a></li>
                <li><a href="aboutpage.html">About</a></li>
        </ul>
		<div class="logo">
			<img src="images/redlogo.png" style="width:80px;height:80px">
		</div>
    </div>
	</div>
<div class= "bg">	
<form action="shopdashboard.php" method="get">
	<div class="container">
                <h1>Shop Manager Login</h1>
                 <hr>
                
                <label for="email"><b>Admin Name</b></label>
                <input type="text" placeholder="Enter your Admin Name" name="AdminName" required>

                <label for="psw"><b>Admin Password</b></label>
                <input type="password" placeholder="Enter your Password" name="AdminPassword" required>

        <div class="clearfix">
            <a href="shopdashboard.php?AdminName=<?php echo $row["AdminName"] ?>"><button type="submit" class="loginbtn">Login</button></a>
        </div>

    </div>
 </form>

</div>

</body>
</html>