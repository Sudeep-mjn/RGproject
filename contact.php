
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



    <title>contact</title>
</head>


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
                            <li><a href="registration.php">Sign-Up</a></li>
                           <li><a href="#" style="margin-left: 10rem;"><i class="fa-solid fa-heart"></i></a></li>
                            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </section>
        </header>


       <div class="container" style="height:30rem ;">
        <div style="height:70rem ; overflow: hidden; margin-top:10px;" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1766.6906476758427!2d85.30768029580096!3d27.67460777194279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1833e6b3e205%3A0x76ca1abd0d699e69!2sDAV%20College!5e0!3m2!1sen!2snp!4v1669632636465!5m2!1sen!2snp" width="100%" height="40%" style="border:10px;" allowfullscreen="" loading="lazy"  referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

       </div>

       <main class="container">
			<h2><center>Contact Us</center></h2>
			<p style="font-size:23px;">Have a question or comment? We would love to hear from you!</p>
            <div style="items-align:center;">
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
                                <label for="message" class="form-label">message</label>
                                <!-- <input type="message" class="form-control" name="message" id="message"
                                aria-describedby="emailHelpId" placeholder="" required> -->
                                <textarea  name="message" id="message" required></textarea>
                            </div> 
                            <button style="margin-bottom: 30px ; margin-left:14rem ; " type="submit" id="submit"
                            class="btn btn-primary btn-fresh" id="button">Send Message</button>
                            </div>
            </div>
		</main>


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

</html

