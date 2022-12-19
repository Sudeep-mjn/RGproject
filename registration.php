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

    <title>regisration</title>
</head>


<body class="body">
<?php
    require('config/dbcon.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['name'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users` (name, password, email,phone,address)
                     VALUES ('$name', '" .($password) . "', '$email','$phone','$address')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <header>
        <section class="nav">
            <nav class="navbar">
                <a href="homepage.php"><img src="pic/logo1.png" class="logo" alt="logo"></a>
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



    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 mx-auto">
                    <div class="">
                        <h2 class="mt-4 no-border" align="center">
                            Sign-Up
                        </h2>
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                                    placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="adderss" aria-describedby="helpId"
                                    placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">phone</label>
                                <input type="number" class="form-control" name="phone" id="phone"
                                    aria-describedby="emailHelpId" placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    aria-describedby="emailHelpId" placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="" placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Confirm-Password</label>
                                <input type="password" class="form-control" name="confirmpassowrd" id="confirmpassword"
                                    placeholder="" required>
                            </div>
                            <button style="margin-bottom: 30px ; margin-left:14rem ; " type="submit" id="submit"
                                class="btn btn-primary btn-fresh">Submit</button>
                            </div>
                            <div style="margin-left:11rem;">
                                <p>Already have a account<a href="login.php" style="margin-left:8px;"> Login</a></p>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>

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
<?php
    }
    ?>
</html>