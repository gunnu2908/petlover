<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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
                

                <h2><font color="Green">Pet Care Hub</font></h2>
              

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
                <h4 class="header-line">ADMIN DASHBOARD</h4>
                
                            </div>

        </div>
             
             <div class="row">
             <?php
$con=mysqli_connect("localhost","root","","petcarehub")or die(mysqli_error());
$data="select * from petsale where pettype='dog'";
$result=mysqli_query($con,$data);
$count=0;
while($row=$result->fetch_assoc())
{
$count=$count+1;
}
$data="select * from petsale where pettype='cat'";
$result=mysqli_query($con,$data);
$count1=0;
while($row=$result->fetch_assoc())
{
$count1=$count1+1;
}
$data="select * from petsale where pettype='bird'";
$result=mysqli_query($con,$data);
$count2=0;
while($row=$result->fetch_assoc())
{
$count2=$count2+1;
}
$data="select * from petsale ";
$result=mysqli_query($con,$data);
$count3=0;
while($row=$result->fetch_assoc())
{
$count3=$count3+1;
}
?>
                 <div class="row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="alert alert-info back-widget-set text-center">
            <i class="fa fa-dog fa-5x"></i>
            <h3><span id="dog-counter">0</span>+Dogs</h3>
            Total Dogs
        </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="alert alert-success back-widget-set text-center">
            <i class="fa fa-cat fa-5x"></i>
            <h3><span id="cat-counter">0</span>+ Cats</h3>
            Total Cats
        </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="alert alert-warning back-widget-set text-center">
            <i class="fa fa-dove fa-5x"></i>
            <h3><span id="bird-counter">0</span>+ Birds</h3>
            Total Birds
        </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="alert alert-danger back-widget-set text-center">
            <i class="fa fa-shopping-cart fa-5x"></i>
            <h3><span id="sale-counter">0</span> Pets</h3>
            Total Pets Sale
        </div>
    </div>
</div>

        </div>              
             <div class="row">

              <div class="col-md-8 col-sm-8 col-xs-12">
                    <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel" >
                   
                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="assets/img/1.jpg" alt="" />
                           
                        </div>
                        <div class="item">
                            <img src="assets/img/2.jpg" alt="" />
                          
                        </div>
                        <div class="item">
                            <img src="assets/img/3.jpg" alt="" />
                           
                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                </div>
              </div>
                 
                 <div class="col-md-4 col-sm-4 col-xs-12">
                    
                 <div class="panel panel-primary ">
                        <div class="panel-heading">
                            Recent Chat History
                        </div>
                        <div class="panel-body chat-widget-main">
                            <div class="chat-widget-left">
                               I Want to Buy Pug
                            </div>
           
                            <div class="chat-widget-name-left">
                                <img class="media-object img-circle img-left-chat" src="assets/img/user2.png" />
                                <h4>  Sonia Arora</h4>
                                <h5>I Want to Buy Pug</h5>
                            </div>
                            <hr />
                            <div class="chat-widget-right">
                            I Want to Buy Pug. I Want to Buy Pug.I Want to Buy Pug
                            </div>
                            <div class="chat-widget-name-right">
                                 <img class="media-object img-circle img-right-chat" src="assets/img/user2.png" />
                                <h4>  Harpreet Kaur</h4>
                                <h5>I Want to Buy Pug</h5>
                            </div>
                            <hr />
                            <div class="chat-widget-left">
                            I Want to Buy Pug
                            </div>
                            <div class="chat-widget-name-left">
                                 <img class="media-object img-circle img-left-chat" src="assets/img/user2.png" />
                                <h4>  Harpreet</h4>
                                <h5>I Want to Buy Pug</h5>
                            </div>
                            <hr />
                            <div class="chat-widget-right">
                            I Want to Buy Pug. I Want to Buy Pug. I Want to Buy Pug
                            </div>
                            <div class="chat-widget-name-right">
                               <img class="media-object img-circle img-right-chat" src="assets/img/user2.png" />
                                <h4>  Gautam</h4>
                                <h5>I Want to Buy Pug</h5>
                            </div>
                            <hr />
                        </div>

                    </div>
             </div>
             
                 </div>
            

             
             
             </div>
             
                        </div>
                </div>

            </div>

    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; PetCareHub |<a href="http://www.petcarehub.com/" target="_blank"  > Designed by :GUNNPREET KAUR</a> 
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
<script>
    function animateCounter(id, start, end, duration) {
        let obj = document.getElementById(id);
        let range = end - start;
        let increment = end > start ? 1 : -1;
        let stepTime = Math.abs(Math.floor(duration / range));
        let current = start;
        let timer = setInterval(function () {
            current += increment;
            obj.textContent = current;
            if (current == end) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    // Get values from PHP and animate counters
    let totalDogs = <?php echo $count; ?>;
    let totalCats = <?php echo $count1; ?>;
    let totalBirds = <?php echo $count2; ?>;
    let totalSales = <?php echo $count3; ?>;

    animateCounter("dog-counter", 0, totalDogs, 2000);
    animateCounter("cat-counter", 0, totalCats, 2000);
    animateCounter("bird-counter", 0, totalBirds, 2000);
    animateCounter("sale-counter", 0, totalSales, 2000);
</script>
</html>
