<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Petcarehub- Pet Care Hub</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <?php if(isset($_SESSION['client_Name'])): ?>
                <div class="d-inline-flex align-items-center">

                    <a class="text-white pr-3" href=""></a>
                    <span class="text-white">Welcome: <?php echo htmlspecialchars($_SESSION['client_Name']); ?></span>
                    <a class="text-white px-3" href=""></a>
                   
                </div>
            </div>
       
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
               
       
           
            <a class="text-white px-3" href="logout.php">Logout</a>
        <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Pet</span>carehub</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6>Opening Hours</h6>
                        <p class="m-0">8.00AM - 9.00PM</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email Us</h6>
                        <p class="m-0">@petlover.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Call Us</h6>
                        <p class="m-0">+9914595271</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="petshop.php" class="nav-item nav-link">Pet Buy</a>
                    <a href="petsale.php" class="nav-item nav-link">Pet Sell</a>
                    <a href="shop.php" class="nav-item nav-link">Shop</a>
		      <div class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                      <div class="dropdown-menu rounded-0 m-0">
                      <a href="clientlogin.php" class="dropdown-item">Client Login</a>
                      <a href="adminlogin.php" class="dropdown-item">Admin Login</a>
		
                           
                        </div>
                    </div>
					
					
                   
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <?php
$con = mysqli_connect("localhost", "root", "", "petcarehub") or die(mysqli_error());
$result = mysqli_query($con, "SELECT COUNT(*) as count FROM cart");
$row = mysqli_fetch_assoc($result);
$cart_count = $row['count'];
?>
<?php if(isset($_SESSION['client_Name'])): ?>
<a href="cartview.php" class="nav-link text-white position-relative">
    <i class="fa fa-shopping-cart fa-lg"></i>
    <span class="badge badge-danger position-absolute" style="top: -5px; right: -10px;">
        <?php echo $cart_count; ?>
    </span>
</a><?php endif; ?>
                <a href="booking.php" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Booking</a>
            </div>
        </nav>
    </div>
   
    <!-- Navbar End -->
<!-- Team Start -->

    <div class="container mt-5 pt-5 pb-3">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Team Members</h4>
            <h1 class="display-4 m-0">Meet Our <span class="text-primary">Team</span></h1>
        </div>
        <div class="row g-4"> <!-- Added Bootstrap gutter spacing -->
            
            <!-- Team Member 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="team card h-100 position-relative overflow-hidden border-0">
                    <img class="card-img-top" src="img/team-16.jpg" alt="Parampreet">
                    <div class="card-body text-center p-3 bg-light">
                        <h5 class="mb-1">PARAMPREET</h5>
                        <small class="text-muted">CEO</small>
                    </div>
                    <div class="team-social d-flex justify-content-center bg-dark py-2">
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="team card h-100 position-relative overflow-hidden border-0">
                    <img class="card-img-top" src="img/team-2.jpg" alt="Gunnpreet Kaur">
                    <div class="card-body text-center p-3 bg-light">
                        <h5 class="mb-1">Gunnpreet Kaur</h5>
                        <small class="text-muted">Founder</small>
                    </div>
                    <div class="team-social d-flex justify-content-center bg-dark py-2">
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="team card h-100 position-relative overflow-hidden border-0">
                    <img class="card-img-top" src="img/team-3.jpg" alt="Sahreet Sandha">
                    <div class="card-body text-center p-3 bg-light">
                        <h5 class="mb-1">Sahreet Sandha</h5>
                        <small class="text-muted">Manager</small>
                    </div>
                    <div class="team-social d-flex justify-content-center bg-dark py-2">
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="team card h-100 position-relative overflow-hidden border-0">
                    <img class="card-img-top" src="img/team-66.jpg" alt="Gurnim Kaur">
                    <div class="card-body text-center p-3 bg-light">
                        <h5 class="mb-1">Gurnim Kaur</h5>
                        <small class="text-muted">Student</small>
                    </div>
                    <div class="team-social d-flex justify-content-center bg-dark py-2">
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light mx-1 rounded-circle" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <!-- Team End -->


    <!-- About Start -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">About Us</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Boarding</span> & <span class="text-secondary">Daycare</span></h1>
                <h5 class="text-muted mb-3">.</h5>
                <p class="mb-4"></p>
                <ul class="list-inline">
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Services offered</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Emergency Services</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>24/7 Customer Support</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Proper Care</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Trusted & Reliable<h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Passionate About Pets</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Easy & Hassle-Free Experience</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>One-Stop Pet Hub</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Pet Adoption & Rescue Support</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Customer Reviews & Testimonials</h5></li>
                    

                </ul>
                
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="img/about-1.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-2.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    
    <!-- Features End -->


    
    <!-- Footer Start -->
   <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="img/feature.jpg" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Why Choose Us?</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Special Care</span> On Pets</h1>
                <p class="mb-4">We treat every pet like family,ensuring personalized care that nurtures both their health and happiness.We provide and create safe environment that pet lovers can trust.</p>
                <div class="row py-2">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Pet Adoption</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Pet Training</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-care font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Special Care</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Customer Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Pet</span>Care hub</h1>
                <p class="m-0">Our pet care hub is a one step destination offering comprehensive services from grooming and training to nutrition and boarding.We ensure every pet receives personalised,compassionate care and heartfelt services,making us the ultimate choice for pet care.</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Hno:-3506/9 Bhagtan wala,amritsar</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+9914595271</p>
                        <p><i class="fa fa-envelope mr-2"></i>petlover@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                   
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Any Query</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Pet Care Hub</a>. All Rights Reserved. Designed by
                    <a class="text-white font-weight-bold" href="">Gunnpreet Chawla</a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>