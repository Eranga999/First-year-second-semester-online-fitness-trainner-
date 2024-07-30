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
        <th scope="col">TransactionID</th>
        <th scope="col">Email</th>
        <th scope="col">Transaction Time</th>
        <th scope="col">Amount</th>
        <th scope="col">Card Number</th>
        <th scope="col">CVC</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
      if (isset($_GET["UserEmail"])) {
        $UserEmail = $_GET["UserEmail"];
        
        $sqltransaction = "SELECT * FROM `transactions` WHERE UserEmail = '$UserEmail'";
        $resulttransaction = mysqli_query($conn, $sqltransaction);

        while ($row = mysqli_fetch_assoc($resulttransaction)) {
            ?>
            <tr>
                <td><?php echo $row["TransactionID"] ?></td>
                <td><?php echo $row["UserEmail"] ?></td>
                <td><?php echo $row["Transactiondate"] ?></td>
                <td><?php echo $row["Amount"] ?></td>
                <td><?php echo $row["CardNumber"] ?></td>
                <td><?php echo $row["CVC"] ?></td>
                <td><a href="updatepayment.php? &UserEmail=<?php echo $row["UserEmail"] ?>&TransactionID=<?php echo $row["TransactionID"] ?>" class="btn btn-success">update</a></td>
                <td><a href="deletepayment.php? &UserEmail=<?php echo $row["UserEmail"] ?>&TransactionID=<?php echo $row["TransactionID"] ?>" class="btn btn-success">delete</a></td>
                
            </tr>
            <?php
        }
    } else {
        echo "User email not provided in the URL.";
    }
    
    
      ?>
    </tbody>
  </table>
</div>
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










