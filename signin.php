    <!-- <?php
    require('dbconnect.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `signup` (username, password, email)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
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
?> -->


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">

    </script>

    <title>signin</title>
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
                            <li><a href="products.php">Products</a></li>
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
            <section>
                <form action="dbconnect.php" method="post">
                <div class="container">
                    <div class="row" style="margin-bottom: 5rem; margin-top: 4rem; ">
                        <div class="col-sm-12 col-md-6 mx-auto">
                            <div class="col-sm-12 col-md-6 mx-auto">
                                <div class="">
                                    <h2 class="mt-4 no-border" align="center">
                                        Login
                                    </h2>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label" style="margin-left: 0px ;">Email</label>
                                <input type="email" class="form-control" name="Email" id=""
                                    aria-describedby="emailHelpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" name="Password" id="" placeholder="">
                            </div>

                            <button style="margin-bottom: 20px ; margin-left: 14rem; " type="submit" id="button"
                                class="btn btn-primary btn-fresh">Submit</button>
                        </div>
                    </div>
                    <hr>
                    <div class="col-12 text-center" style="margin-bottom: 2rem; ;">
                        <p class="mb-0">Don't have an account yet? <a href="registration.php"> Sign up here </a></p>
                      </div>
                </div>
                </div>
                <?php
    }
                ?>
            </section>
        </form>


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