<?php
include "config.php";
//Janindu-Payment-Create

if (isset($_POST['submit']))
{

    $UserEmail=$_POST['email'];
    $UserPassword=$_POST['psw'];
    $CardNumber=$_POST['cardno'];
    $CVC=$_POST['cvc'];
    $TransactionDate=$_POST['TransactionDate'];
    $Types=$_POST['plantype'];
    $TrainerID=$_POST['trainer'];
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

    //Need to fill
    //transaction table : transactionID,useremail,transactiondate,amount,cardnumber,cvc
    //plan table :useremail,trainerId,types,plancost
    
    //inserting the data to transaction table
    $sqltransaction="INSERT INTO `transactions`( `UserEmail`, `Transactiondate`, `Amount`, `CardNumber`, `CVC`) VALUES ('$UserEmail','$TransactionDate','$Amount','$CardNumber','$CVC')";


    //inserting the data to plan table
    $sqlplan = "UPDATE `plan` SET `TrainerId` = '$TrainerID', `Types` = '$Types', `Plancost` = '$Plancost' WHERE `UserEmail` = '$UserEmail'";

    $resultplan = mysqli_query($conn,$sqlplan);
    $result = mysqli_query($conn, $sqltransaction);

       if ($result) {
          header("Location: afterpayment.php?msg=New record created successfully &UserEmail=$UserEmail &TransactionID=$TransactionID");
       } else {
        die("Error: " . mysqli_error($conn));
      } 
}
?>