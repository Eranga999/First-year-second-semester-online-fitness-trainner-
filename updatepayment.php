<?php
include "config.php";

if (isset($_POST["update"])) {
    $TransactionID = $_GET['TransactionID'];
    $UserEmail=$_POST['email'];
    $UserPassword=$_POST['psw'];
    $CardNumber=$_POST['cardno'];
    $CVC=$_POST['cvc'];
    $TransactionDate = date('Y-m-d');
    $Types=$_POST['plantype'];
    if ($Types==='Basic')
    {
        $Plancost=10000;
        $Amount=10000;
    }
    else
    {
        $Plancost=17000;
        $Amount=17000;
    }
    $sqltransaction = "UPDATE `transactions` SET `TransactionID`='$TransactionID',`UserEmail`='$UserEmail',`Transactiondate`='$TransactionDate',`Amount`='$Amount',`CardNumber`='$CardNumber',`CVC`='$CVC' WHERE TransactionID='$TransactionID'";
    $resulttransaction = $conn->query($sqltransaction); 


   if ($resulttransaction === TRUE) {

      header("Location: afterpayment.php?msg= Record updated successfully  &UserEmail=$UserEmail &id=$TransactionID");

   }else{

       echo "Error:" . $sqltransaction . "<br>" . $conn->error;

   }
}
  if (isset($_GET['TransactionID'])) {

      $TransactionID = $_GET['TransactionID']; 
  
      
      $sqltransaction = "SELECT * FROM `transactions` WHERE TransactionID = $TransactionID";
  
      $resulttransaction = $conn->query($sqltransaction); 
  
      if ($resulttransaction->num_rows > 0) {        
  
          while ($row = $resulttransaction->fetch_assoc()) {

            $UserEmail=$row['UserEmail'];
            $UserPassword=$row['UserPassword'];
            $CardNumber=$row['CardNumber'];
            $CVC=$row['CVC'];
            $TransactionDate = $row['Transactiondate'];
  
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
                <li><a href="reviewpage.html">Reviews</a></li>
                <li><a href="planpage.html">Plans</a></li>
                <li><a href="aboutpage.html">About</a></li>
			
            </ul>
		</div>
    </div>
	<div class= "bg">
    <form method="post">
            <div class="container">
                <h1>Payment</h1><br>
                <p>Please enter your payment details</p><br>
                <hr>
            
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter your email" name="email" required value="<?php echo $UserEmail ?>">

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter your Password" name="psw" required value="<?php echo $UserPassword ?>">


                <label for="cardno"><b>Card Number</b></label>
                <input type="cardnumber" placeholder="Enter your card number" name="cardno" required value="<?php echo $CardNumber ?>">
	
				
				<label for="cvc"><b>CVC</b></label>
                <input type="cvc" placeholder="xxx" name="cvc" required value="<?php echo $CVC ?>">
				<br>
                <br>
                <label for="TransactionDate">Select the date</label>
                <input type="date" id="Transactiondate" name="Transactiondate" required value="<?php echo $TransactionDate ?>">
                <br>
                <br>
				<hr>
                <p>Please select your Plan</p><br>
                    <input type="radio" id="Basic" name="plantype" value="Basic" value="<?php echo $Types ?>">
                    <label for="basic">Basic</label><br>
                    <input type="radio" id="Premium" name="plantype" value="Premium" value="<?php echo $Types ?>">
                    <label for="premium">Premium</label><br>
                <br>  

                <label for="trainer">Select a Trainer:</label>
                <select name="trainer" id="trainer">
                    <option value="1">Fazil</option>
                    <option value="2">Gaia</option>
                    <option value="3">Mike</option>
                    <option value="4">lucian</option>
                    <option value="5">Juliyah</option>
                    <option value="6">Zuri</option>
                    <option value="7">Dhanushka</option>
                    <option value="8">Annabel</option>
                    <option value="9">Taaja</option>
                    <option value="10">Dulanga</option>
                    <option value="11">Yohan</option>
                    <option value="12">Hasitha</option>
                </select>
                <br><br><hr>
                <div>
                    <button style="font-size:15px;"type="submit" class="btn btn-success" name="update">Update</button>
                    <button style="font-size:15px;"><a href="afterpayment.php " class="btn btn-danger"></a>Cancel</button>
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