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
	$con=mysqli_connect("localhost","root","","petcarehub")or die(mysqli_error());
if(isset($_POST['b1']))
{
$email=$_POST['t1'];
$pass=$_POST['t2'];
if (($email=="gunnu789@gmail.com") and ($pass=="ibc123")) {
    echo '<script type="text/javascript">';
    echo 'alert("Login Succed")';  
    echo '</script>';
    echo "<script> location.href='./admin/index.php';</script>";  
}

else
{
    echo'<script type="text/javascript">';
    echo'alert("Login Not Succesful")';
    echo'</script>'; 
}
}

?>
</head>


<body>
 
    
   


   

       
            <div class="row align-items-center" style="margin-left:500px;margin-top:55px">
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                         <h1>Admin Login</h1>
                        <form class="py-5" method="POST">
                            <div class="form-group">
                           
                                <input type="email" name="t1"class="form-control border-0 p-4" placeholder="Email" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="t2" class="form-control border-0 p-4" placeholder="Password" required="required" />
                            </div>
                           
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit" name="b1">Login</button>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Reset</button>
                            </div>
                        </form>
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