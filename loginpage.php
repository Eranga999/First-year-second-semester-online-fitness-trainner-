<?php
include "config.php";
$email = $_POST['email'];
$password = $_POST['psw'];

$sql= "SELECT * FROM user WHERE UserEmail =? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param ("s",$email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows==1){
    $row = $result->fetch_assoc();
    $stored_password = $row ['UserPassword'];
    if ($password ==$stored_password){
        
       header("Location: profilepage.php?email=" . urlencode($email));
       exit;
    }else{
        echo " _ Invalid password enter the password ";
    }
}else {
    echo " _ Invalid email enter again ";
}
$stmt->close();
$conn->close();










?>