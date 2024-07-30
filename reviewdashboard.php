<?php
include "config.php";
?>

<!DOCTYPE html>

<html>

<head>
	<link  rel="icon" type="image/jfif" href="images/whitelogo.png" class="center"  >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bash Fitness</title>
    <link rel="stylesheet" href="paymenttable.css">
</head>
<body>

	<div class="banner">
        <div class="navbar">
            <ul>
            <li><a href="altpage.html">Home</a></li>
            <li><a href="loginpage.html">Trainers</a></li>
            <li><a href="loginpage.html">Shop</a></li>
            <li><a href="loginpage.html">Reviews</a></li>
            <li><a href="loginpage.html">Plans</a></li>
            <li><a href="loginpage.html">About</a></li>
        </ul>
    </div>
	</div>
<div class= "bg">
<h2>Confirm Details</h2>

<div class="container">
  <?php
  if (isset($_GET["msg"])) {
    $msg = $_GET["msg"];
    echo 
    '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="color:#fff;margin-left:2px;">
      ' . $msg . '  
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  ?>
  <table>
    <thead >
      <tr>
        <th scope="col">UserEmail</th>
        <th scope="col">User Name</th>
        <th scope="col">Review</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
        
        $sql = "SELECT * FROM `reviews` ";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row["UserEmail"] ?></td>
                <td><?php echo $row["UserName"] ?></td>
                <td><?php echo $row["Body"] ?></td>
                <td><a href="deletereview.php? &UserEmail=<?php echo $row["UserEmail"] ?>" class="btn btn-success">delete</a></td>
                
            </tr>
            <?php
        }
   
    
    
      ?>
    </tbody>
  </table>
</div>
<h2 style="margin: 50px;"><a href="createreview.php" style="text-decoration:none; border: 3px solid red;border-radius:25px;padding:5px;color:white;">Write your review</a></h2>
<h2 style="margin: 50px;"><a href="updatereview.php" style="text-decoration:none; border: 3px solid red;border-radius:25px;padding:5px;color:white;">Update your review</a></h2>
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










