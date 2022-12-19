 <?php
session_start();
include ('config/dbcon.php');

if(isset($_SESSION['id'])){
    // echo $_SESSION['id'];
    $id = $_SESSION['id'];
    $query= "SELECT * FROM users WHERE id = '$id'";
    $query_run =mysqli_query($con,$query);
    $fetch= mysqli_fetch_array($query_run);
    // echo $fetch['name'];
    // echo $fetch['email'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="pic/logo1.png" class="icon">
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/2fa305419e.js" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">

    </script>

    <title>homepage</title>
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
                            <li><a href="#about">About</a></li>
                            <li><a href="registration.php">Sign-Up</a></li>
                           <li><a href="#" style="margin-left: 10rem;"><i class="fa-solid fa-heart"></i></a></li>
                           <?php
                           if(!isset($_SESSION['id'])){ ?>
                            <li><a href="login.php">Login</a></li>
                            <!-- <li><a href="registration.php">Register</a></li> -->

                           <?php  }
                           else{ ?>
                           <li><a href=""><?= $fetch['name']; ?></a></li>
                           <li><a href="logout.php">Log Out</a></li>
                           <?php }
                           ?>
                            <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>

                        </ul>
                    </div>
                </nav> 
            </section>
        </header>


        <div class="container col-xxl-8 px-4 py-5 mt-3">
            <div class="row flex-lg-row-reverse align-items-center" style="margin-top: 0;">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="pic/hero-image.gif" class="d-block mx-lg-auto img-fluid" alt="Boots" width="500"
                        height="100" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3" style="padding-left: 80px;">Sasto damm ma kinxas ni naii
                    </h1>
                    <p class="lead" style="padding-left:30px;margin-bottom: 0; ">Wtih chitikka design comfortable modern
                        modern wears, Your foot our shoes, come and
                        get it as soon as possible.</p><br>
                    <div class="d-grid gap- d-md-flex justify-content-md-start  ">
                        <a href="categories.php"><button type="button" class="btn btn-primary btn-lg " id="button"
                                style="margin-left: 11rem;margin-top: 0%;">Shop Now</button>
                        </a>



                    </div>
                </div>
            </div>
        </div>


        <div class="container" style="height:43rem; width:75rem ;" id="about">

<p style="margin:2rem 2rem 2rem 2rem;font-size: 22px;">
Welcome to Shoehouse, your go-to online destination for all things footwear. We are passionate about shoes and committed to bringing you the latest and greatest styles from around the world. <br> <br>
At Shoehouse, we strive to offer you the best selection of shoes from the trendiest brands, at competitive prices. Our goal is to make it easy for you to find the perfect pair of shoes that can take your look to the next level. <br> <br>
We are constantly expanding our selection of shoes to keep up with the latest trends and fashions. Whether you’re looking for something casual and comfortable, or a sleek and stylish design, we have something for everyone. <br> <br>
We believe in providing excellent customer service and are committed to providing you with the best online shoe shopping experience. Our team is available to assist you with any questions you may have about our products or services. <br> <br>
 We look forward to helping you find the perfect pair of shoes!
</p>
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




    </body>

</html>