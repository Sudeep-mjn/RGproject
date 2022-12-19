<?php 
include('config/dbcon.php');
$cid = $_GET['cid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="pic/logo1.png" class="icon">


    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2fa305419e.js" crossorigin="anonymous"></script>

    <title>products</title>
</head>

<body class="body">
    <header>
        <section class="nav">
            <nav class="navbar">
                <a href="homepage.html"><img src="pic/logo1.png" class="logo" alt="logo"></a>
                <div>
                    <ul class="ul">
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="categories.php">Products</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="registration.php">Sign-Up</a></li>
                        <li><a href="#" style="margin-left: 10rem;"><i class="fa-solid fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                    </ul>
                </div>
            </nav>
        </section>
    </header>


    <!-- <marquee direction="left" class="marquee">
        SALE SALE SALE SALE SALE SALE SALE
    </marquee> -->
    <div class="container">
<h2 ><center>Our Products</center></h2>

        <div class="row gy-3 my-2" style="margin-left:4px; margin-right:4px; margin-bottom: 9px; ">
            <?php
        $query = "SELECT * FROM products WHERE category_id = '$cid' ";
        $query_run = mysqli_query($con, $query);
        while($res = mysqli_fetch_array($query_run)){
        ?>
            <div class="col-sm-6 col-md-3 col-lg-3">
        <a href="product-view.php?pid=<?= $res['id']; ?>" style="text-decoration:none;color:black;">

                <div class="card" style="height:100%;" id="products-preview">
                    <img src="uploads/<?= $res['image']; ?>" class="card-img-top" alt="shoes1">
                    <div style="width: 100%;padding-right: 20px;" class="card-body ">
                        <h3 class="card-title"><?= $res['name']; ?></h3>
                        <p class="card-title"> <?= $res['selling_price']; ?> </p>
                        <a href="#" class="btn btn-primary" id="button" style="position: relative;">ADD TO CART</a>
                    </div>
                </div>
            </a>

            </div>
            <?php }  ?>
        </div>

    </div>
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

    <script>
        let addToCartButton = document.querySelector('#button');

        addToCartButton.addEventListener('click', function(){
            alert('Item has been added to cart!');
});
    </script>
</body>

</html>