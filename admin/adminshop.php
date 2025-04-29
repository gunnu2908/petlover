<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Admin Panel</title>



    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>      
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <title>ADMIN PET CARE HUB</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<?php
$con=mysqli_connect("localhost","root","","petcarehub")or die(mysqli_error());
$data="select * from ptemp";
$result=mysqli_query($con,$data);
while($row=$result->fetch_assoc())
{
$b=$row['pcode'];
}
$c="";
$d="";
$e="";
$f="";
$g="";
$h="";

if(isset($_POST['b1']))
{
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
	$f=$_POST['t6'];
	$g=$_POST['t7'];
	$h=$_POST['t8'];
$data="insert into shop values('$a','$b','$c','$d','$e','$f','$g','$h')";
mysqli_query($con,$data);
$data="delete from ptemp";
$result=mysqli_query($con,$data);
$b=$b+1;
$data="insert into ptemp values('$b')";
mysqli_query($con,$data);
$data="select * from ptemp";
$result=mysqli_query($con,$data);
while($row=$result->fetch_assoc())
{
$b=$row['pcode'];
}
$c="";
$d="";
$e="";
$f="";
$g="";
$h="";
}
if (isset($_POST['b2']))
{
	$a=$_POST['t1'];
$data="select *from shop where Productcode ='$b'";
$result=mysqli_query($con,$data);
while($row=$result->fetch_assoc())
{
$a=$row[Currentdate];

$c=$row[Productname];
$d=$row[weight];
$e=$row[Type];
$f=$row[Rate];
$g=$row[photo1];
$h=$row[photo2];
}
}
if(isset($_POST['b3']))
{
	$a=$_POST['t1'];
$data="delete from shop where currentdate ='$a'";
mysqli_query($con,$data);

$c="";
$d="";
$e="";
$f="";
$g="";
$h="";
}
if(isset($_POST['b4']))
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];
$g=$_POST['t7'];
$h=$_POST['t8'];
$data="update shop set name='$a',productcode='$b',productname='$c',weight='$d',type='$e',rate='$f',photo1='$g'where photo2='$h'";
mysqli_query($con,$data);

$c="";
$d="";
$e="";
$f="";
$g="";
$h="";
}

?>
</head>
<body>


    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               

                 <h2><font color="green"> Pet Care Hub</font></h2>
               
            </div>

            <div class="right-div">
                <a href="../adminlogin.php" class="btn btn-danger pull-right">LOG ME OUT</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.php" class="menu-top-active">Home</a></li>
                           
                            <li><a href="services.php">Services</a></li>
                            <li><a href="adminpetconfirm.php">Pet Confirmed</a></li>
                            <!-- FOOTER SECTION END
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Options <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="ui.html">Option1</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Option2</a></li>
                                </ul>
                            </li> -->
                            <li><a href="adminshop.php">Shop</a></li>
                             <li><a href="adminorder.php">Orders</a></li>
                          

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">SHOP</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          SHOP
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Current Date</label>
                                            <input class="form-control" type="text" name="t1" value="<?php echo date('d-m-Y'); ?>" required />
                                          
                                        </div>
                                 <div class="form-group">
                                            <label>Product Code</label>
                                            <input class="form-control" type="text" name="t2" value="<?php echo $b; ?>"required />
                                  
                                        </div>
					 <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control" type="text" name="t3" required />
                                  
                                        </div>
                                            <div class="form-group">
                                            <label>Weight</label>
                                            <input class="form-control" type="text" name="t4" required />
                                        </div>
					 <div class="form-group">
                                            <label>Type</label>
                                            <input class="form-control" type="text" name="t5" required />
                                  
                                        </div>
                                         <div class="form-group">
                                            <label>Rate</label>
                                            <input class="form-control" type="text" name="t6"required />
                                  
                                        </div>
                                            <div class="form-group">
                                            <label>Photo 1</label>
                                            <input class="form-control" type="file" name="t7" required />
                                        </div>
                                              <div class="form-group">
                                            <label>photo 2</label>
                                            <input class="form-control" type="file" name="t8" required />
                                  </div>

                                    
                                  <button type="submit" class="btn btn-info" name="b1">Send message</button>
                               
                                        <button type="submit" class="btn btn-info" name="b2">SAVE</button>
                                        <button type="submit" class="btn btn-info" name="b3">SEARCH</button>
                                        <button type="submit" class="btn btn-info" name="b4">DELETE </button>
                                        <button type="submit" class="btn btn-info" name="b5">UPDATE </button>


                                    </form>
                            </div>
                        </div>
                            </div>
<div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                       About Shop
                        </div>
                        <div class="panel-body">
                           <p align="justify"><b>Our pet care hub is a heaven for furry friends,where their well being is our top priority.We offer a comprehensive range of products and services,from premium pet food and toys to expert grooming and veterinary care.Our team of passionate professionals is dedicated to providing the highest quality care,ensuring your beloved companion receives the love and attention they deserve.A one stop shop for all your pet needs.</b></p>
                           <img src="assets/img/g11.jpg" width="100%">
                            </div>
                        </div>
                            </div>
        </div>
                <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; Petcarehub |<a href="http://www.Petcarehub.com/" target="_blank"  > Designed by : GUNNPREET KAUR</a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
