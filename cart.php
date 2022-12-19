
<?php
//add to cart php

//1. Check if the user is logged in
if(!isset($_SESSION['user_id'])) {
    header("location: login.php");
    exit();
}
 
//2. Get the product details from the database
$product_id = $_GET['product_id'];
$query = "SELECT * FROM products WHERE id = '$product_id'";
$result = mysqli_query($connect, $query);
$product = mysqli_fetch_assoc($result);
 
//3. Check if the product is already in the cart
if(isset($_SESSION['cart'][$product_id])) {
    $_SESSION['cart'][$product_id]['quantity']++;
} else {
    $_SESSION['cart'][$product_id] = array(
        "quantity" => 1,
        "price" => $product['price']
    );
}
 
//4. Redirect to the cart page
header("location: cart.php");
exit();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="pic/logo1.png" class="icon">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="cart/cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/2fa305419e.js" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <title>Cart</title>
</head>

<body>

    <body class="body" id="">
        <header>
            <section class="nav">
                <nav class="navbar">
                    <a href=""><img src="pic/logo1.png" class="logo" alt="logo"></a>
                    <div>
                    <ul class="ul">
                            <li><a href="homepage.php">Home</a></li>
                            <li><a href="categories.php">Products</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="signin.php">Sign-Up</a></li>
                           <li><a href="#" style="margin-left: 10rem;"><i class="fa-solid fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </section>
        </header>

        <div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">  
                

        <section>
            <div class="container-fluid">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                            <svg class="bi" width="30" height="24">
                                <use xlink:href="#bootstrap" /></svg>
                        </a>
                        <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Shoehouse, Inc</span>
                    </div>


                </footer>
            </div>
        </section>


       

    </body>

</html>