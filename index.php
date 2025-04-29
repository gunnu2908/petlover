<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PetCareHub - Pet Care Amritsar Punjab</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  

    <link href="img/favicon.ico" rel="icon">

 
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

   
    <link href="css/style.css" rel="stylesheet">
	<?php
    error_reporting(0);
 
    $clientname=$_SESSION['client_Name'];
    $clientemail=$_SESSION['client_Email'];
	$con=mysqli_connect("localhost","root","","petcarehub")or die(mysqli_error());
if(isset($_POST['bb1']))
{
$name=$_POST['tt1'];
$email=$_POST['tt2'];

$data="Insert into query values('$name','$email')";
mysqli_query($con,$data);
$name="";
$email="";
echo'<script type="text/javascript">';
echo'alert("query submitted successful")';
echo'</script>';
}
?>
</head>


<body>
 
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
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Pet</span>Care Hub</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6>Opening Hours</h6>
                        <p class="m-0">8.00AM - 10.00PM</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email Us</h6>
                        <p class="m-0">petlover@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Call Us</h6>
                        <p class="m-0">+9914595271</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
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
$result = mysqli_query($con, "SELECT COUNT(*) as count FROM cart where cemail='$clientemail' and Status='No'");
$row = mysqli_fetch_assoc($result);
$cart_count = $row['count'];
?>
 <?php if(isset($_SESSION['client_Name'])): ?>

<a href="cartview.php" class="nav-link text-white position-relative">
    <i class="fa fa-shopping-cart fa-lg"></i>
    <span class="badge badge-danger position-absolute" style="top: -5px; right: -10px;">
        <?php echo $cart_count; ?>
    </span>
</a>
<?php endif; ?>
                <a href="booking.php" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Booking</a>
            </div>
        </nav>
    </div>
   


   
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                            <h1 class="display-3 text-white mb-3">Tails of Happiness</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Caring for a pet is a beautiful journey of love,wher every wag of the tail and purr of contentment fills our heart with joy and laughter.</h5>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                            <h1 class="display-3 text-white mb-3">Pet Spa & Grooming</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Life is better with a furry friend which makes the perfect combination.</h5>
                           </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    


   
    <div class="container-fluid bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 py-5 px-3">
                    <h4 class="text-secondary mb-3">Going for a vacation?</h4>
                    <h1 class="display-4 mb-4">Book For <span class="text-primary">Your Pet</span></h1>
                    <p></p>Check out our selection and prices that cover everything from training techniques to grooming tips and nutrition advice.Browse through our categories to find the perfect book that suits your pet's need and your interests.
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-house font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Pet Boarding</h5>
                                </div>
                                <p class="m-0"align="justify">Pet boarding can be a great solution when you need to be away from home.Knowing your pet is well cared for can give you peace of mind whoile you're happy.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-food font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Pet Feeding</h5>
                                </div>
                                <p class="m-0" align="justify">Feeding your pet a balanced diet is crucial for their overall health and vitality.Remember, a healthy diet leads to a happy and energetic pet.!</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-grooming font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Pet Grooming</h5>
                                </div>
                                <p class="m-0" align="justify">Regular grooming is essential for your pet's health and wellbeing.Always use pet friendly products and tools to ensure their comfort.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-toy font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Pet Training</h5>
                                </div>
                                <p class="m-0"align="justify">Training your pet is essential for building a strong bond and ensuring good behaviour.Patience and love go a long way in helping your pet become well behaved and happy!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   


  
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">About Us</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Boarding</span> & <span class="text-secondary">Daycare</span></h1>
                <h5 class="text-muted mb-3">A pets love is a salient poetry that speaks to the soul,unfetterd by words yet profound in devotion.The companionship of a pet is a sanctuary of unwavering affection,where hearts converse in a dialect of pure emotions.</h5>
                <p class="mb-4">To share one's life with a pet is to embrace unyielding loyalty,boundless joy,and a love that transcends language.A pets eyes hold a universe of unspoken words,where devotion,gratitute and an unbreakable bond rises.</p>
                <ul class="list-inline">
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Pet Grooming</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Pet Adoption</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>24/7 Customer Support</h5></li>
                </ul>
               
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="img/about-1.jpeg" alt="">
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
   


   
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Our Services</h4>
                <h1 class="display-4 m-0"><span class="text-primary">Premium</span> Pet Services</h1>
            </div>
            <div class="row pb-3">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Boarding</h3>
                        <p>Professional pet sitters ensure pets receive proper care and companionship at home.</p>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-food display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Feeding</h3>
                        <p>Proper pet feeding ensures a balanced diet,good health and overall well-being.</p>
                      
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Grooming</h3>
                        <p>A well groomed pet is a happy, healthy pet,enhancing their quality of life and owner's companionship.</p>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-cat display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Training</h3>
                        <p>Early training and socialization are crucial for preventing behavioral issues in pets</p>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-dog display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Nutrition Advice</h3>
                        <p>Regularly monitor our pet's diet and adjust based on activity level and medical conditions.</p>
                     
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-vaccine display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">VAETINARY CARE</h3>
                        <p>Regularly consult a veterinarian to ensure your pet's diet meets its specific health needs.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    


   
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
                <p class="m-0" align="justify">Our pet care hub is a one step destination offering comprehensive services from grooming and training to nutrition and boarding.We ensure every pet receives personalised,compassionate care and heartfelt services,making us the ultimate choice for pet care.</p>
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
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control border-0" placeholder="Your Name" required name="tt1"/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0" placeholder="Your Email" required name="tt2" />
                            </div>
                            <div>
                                <button class="btn btn-lg btn-primary btn-block border-0" type="submit" name="bb1">Submit Now</button>
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
   

   
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

   
    <script src="js/main.js"></script>
</body>

</html>