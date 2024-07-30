<?php
include "config.php";

if (isset($_GET['AdminPassword'])) {
    $AdminPassword = $_GET['AdminPassword'];
}

if (isset($_POST['submit'])) {
    // Get data from the form
    $ProductID = $_POST['ProductID'];
    $Stock = $_POST['Stock'];
    $Sizes = $_POST['Sizes'];
    $Price = $_POST['Price'];
    $ProductName = $_POST['ProductName'];

    // Insert data into the product table
    $sqlproduct = "INSERT INTO `product`(`ProductId`, `Stock`, `Sizes`, `Price`, `ProductName`) 
                  VALUES ('$ProductID', '$Stock', '$Sizes', '$Price', '$ProductName')";

    // Execute the SQL query
    $resultproduct = mysqli_query($conn, $sqlproduct);

    if ($resultproduct) {
        header("Location: shopdashboard.php?AdminPassword=$AdminPassword");
        exit; // Add exit to stop further execution
    } else {
        die("Error: " . mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/jfif" href="images/whitelogo.png" class="center">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - Bash Fitness</title>
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
            <div class="logo">
                <a href="profilepage.html">
                    <img src="images/redlogo.png" style="width:80px;height:80px">
                </a>
            </div>
        </div>
    </div>
    <div class="bg">
        <form method="POST" action="addproduct.php">
            <div class="container">
                <h1>Adding Products</h1><br>
                <p>Enter product details</p><br>
                <hr>

                <label for="ProductID"><b>Product ID</b></label>
                <input type="text" placeholder="Enter product ID" name="ProductID" required>

                <label for="Stock"><b>Stock</b></label>
                <input type="number" placeholder="Enter stock quantity" name="Stock" required>

                <label for="Sizes"><b>Sizes</b></label>
                <input type="text" placeholder="Enter available sizes" name="Sizes" required>

                <label for="Price"><b>Price</b></label>
                <input type="text" placeholder="Enter product price" name="Price" required>

                <label for="ProductName"><b>Product Name</b></label>
                <input type="text" placeholder="Enter product name" name="ProductName" required>

                <div>
                    <a href="shopdashboard.php?AdminPassword=<?php echo $AdminPassword; ?>" onclick="alert('Product added');">
                        <button type="submit" name="submit">Add</button>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <div class="contactinfo">
            <p><h5>Email</h5> Bashfitness@gmail.com</p>
            <p><h5>Phone</h5> 0112345434</p>
            <p><h5>Instagram</h5> Bashfitness</p>
            <p><h5>Admin </h5> Bashadmin@gmail.com</p>
            <p><h5 style="margin-left:80px;">Copyright Reserved © Bash fitness 2023</h5></p>
        </div>
    </footer>
</body>

</html>
