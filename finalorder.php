<?php
session_start();
if (!isset($_SESSION['client_Email'])) {
    
    header("Location: clientlogin.php");
    exit(); 
}

$uemail=$_SESSION['client_Email'];
$namnt=$_SESSION['netbill'];
$con=mysqli_connect("localhost","root","","petcarehub")or die(mysqli_error());
$cartQuery = "SELECT * FROM clientreg where email='$uemail'"; 
$cartResult = mysqli_query($con, $cartQuery);


while ($cartRow = $cartResult->fetch_assoc()) {
$a = $cartRow['fullname'];
$b = $cartRow['email'];
$c = $cartRow['mobileno'];
$d = $cartRow['address'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <title>PetLover - Pet Care Website Template</title>
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
<?php
$con=mysqli_connect("localhost","root","","petcarehub")or die(mysqli_error());


if(isset($_POST['bb1']))
{
$name=$_POST['tt1'];
$email=$_POST['tt2'];

$data="Insert into query values('$name','$email')";
mysqli_query($con,$data);
$name="";
$email="";
}
?>
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


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h4 class="text-secondary mb-3">Client Register</h4>
            <h1 class="display-4 m-0">FIND YOUR <span class="text-primary">PERFECT PET MATCH</span></h1>
        </div>
		
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form method="POST">
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="t1" name="t1" value="<?php echo $a; ?>"required="required" />
                        </div><br/>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="t2" name="t2"value="<?php echo $b; ?>" required="required"  />
                        </div><br/>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="t3" name="t3"value="<?php echo $c; ?>" required="required" />  
                        </div><br/>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="t4" name="t4"value="<?php echo $d; ?>" required="required" />
                          
                        </div><br/>
                      
                        <div class="control-group">
    <input type="text" class="form-control p-4" id="t5" name="t5" value="<?php echo $namnt; ?>"required="required" />
    <br>
    <div class="form-check">
    <input class="form-check-input" type="checkbox" name="payment_method[]" id="upi" value="UPI" >
    <label class="form-check-label" for="upi">UPI</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="form-check-input" type="checkbox" name="payment_method[]" id="cash" value="CASH" >
    <label class="form-check-label" for="cash">CASH</label>
    <br>
</div>

<button class="btn btn-primary py-3 px-5" type="submit" id="b1" name="b1">Place Order</button>
</form>
<script>
    document.querySelector("form").addEventListener("submit", function (e) {
        let upiChecked = document.getElementById("upi").checked;
        let cashChecked = document.getElementById("cash").checked;

        if (cashChecked && !upiChecked) {
            e.preventDefault(); // Prevent form submission
            alert("Order Placed");
        }
    });
</script>

<?php 
$con = mysqli_connect("localhost", "root", "", "petcarehub") or die(mysqli_error($con));

if (isset($_POST['b1']))
 {
    $a = $_POST['t1'];
    $b = $_POST['t2'];
    $c = $_POST['t3'];
    $d = $_POST['t4'];
    $e = $_POST['t5'];
    //$p="UPI";
    $payment_methods = isset($_POST['payment_method']) ? $_POST['payment_method'] : [];
    $payment_method = in_array("UPI", $payment_methods) ? "UPI" : "CASH";
    $g = date('d-m-Y');
    $h = date('h:m:s');

    $data = "INSERT INTO placeorder VALUES('$a','$b','$c','$d','$e','$payment_method','$g','$h')";
    mysqli_query($con, $data);

    $data = "UPDATE cart SET Status='Yes' WHERE cemail='$uemail'";
    mysqli_query($con, $data);

    if ($payment_method == "UPI") {
        echo "<script>location.href='https://getupilink.com/upi/9216198153@pthdfc?am=$e';</script>";
       // echo "<script>window.open('https://getupilink.com/upi/9216198153@pthdfc?am=$e', '_blank');</script>";
    }
}
?>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Pet</span>Lover</h1>
                <p class="m-0">We have experienced and passinate staff who truly love animals.Our personalized care plans ensure that each pet gets the attention they need.We offer a variety of services in low budget from grooming to training ,all in one place.We have a great reviews from satisfied pet owners who trust us with furry friends.</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Hno:3506/9 bhagtan wale,Amritsar</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+9914595271</p>
                        <p><i class="fa fa-envelope mr-2"></i>petlover@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
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
                                <input type="text" class="form-control border-0" placeholder="Your Name" name="tt1"/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0" placeholder="Your Email"  name="tt2" />
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
                    <a class="text-white font-weight-bold" href="">Gunnpreet kaur</a>
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