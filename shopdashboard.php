<?php
include "config.php";




if (isset($_GET['AdminPassword'])) {
    $AdminPassword = $_GET["AdminPassword"];
    if (isset($_GET['AdminName'])) {
        $AdminName = $_GET["AdminName"];
        {
            if ($AdminPassword !== $AdminName) {
                // Redirect to an error page or crash the website
                header("Location: error.php");
                exit;
            }
        }
}
}


  
?>

<!DOCTYPE html>

<html>

<head>
    <link rel="icon" type="image/jfif" href="images/whitelogo.png" class="center">
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
    <div class="bg">
        <div class="container"  style="margin-left:20%;margin-right:20%;">
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
                <thead>
                    <tr>
                        <th scope="col">Product ID</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Sizes</th>
                        <th scope="col">Price</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `product`";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row["ProductId"] ?></td>
                            <td><?php echo $row["Stock"] ?></td>
                            <td><?php echo $row["Sizes"] ?></td>
                            <td><?php echo $row["Price"] ?></td>
                            <td><?php echo $row["ProductName"] ?></td>
                            <td><a href="removeproduct.php?AdminPassword=<?php echo $AdminPassword; ?>&AdminName=<?php echo $AdminName; ?>&ProductId=<?php echo $row["ProductId"]; ?>">Remove product</a></td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <h1 style="margin: 20px; text-decoration: none;"><a href="addproduct.php?AdminPassword=<?php echo $AdminPassword; ?>" style="margin: 50px; text-decoration: none;color:white;">Add a Product</a></h1>
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
