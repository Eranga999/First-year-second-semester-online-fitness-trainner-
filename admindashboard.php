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
        <th scope="col">TrainerID</th>
        <th scope="col">Trainer Email</th>
        <th scope="col">Trainer Name</th>
        <th scope="col">Trainer Age</th>
        <th scope="col">Specialization</th>
        <th scope="col">Remove Trainer</th>
      </tr>
    </thead>
    <tbody>
    <?php
      if (isset($_GET["AdminPassword"])) {
        $AdminPassword = $_GET["AdminPassword"];
        
        $sql = "SELECT * FROM `trainer` WHERE Admin = '$AdminPassword'";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row["TrainerId"] ?></td>
                <td><?php echo $row["TrainerEmail"] ?></td>
                <td><?php echo $row["TrainerName"] ?></td>
                <td><?php echo $row["TrainerAge"] ?></td> 
                <td><?php echo $row["Specialization"] ?></td>
                <td><a href="removetrainer.php?TrainerId=<?php echo $row["TrainerId"]; ?>&AdminPassword=<?php echo $AdminPassword; ?>">Remove Trainer</a></td>
                
            </tr>
            <?php
        }
    } else {
        echo "Trainer ID not provided in the URL.";
    }
    
    
      ?>
    </tbody>
  </table>
</div>
  <h1 style="margin: 50px; text-decoration: none;"><a href="addtrainer.php?AdminPassword=<?php echo $AdminPassword; ?>" style="margin: 50px; text-decoration: none;color:white;">Add a Trainer</a></h1>
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










