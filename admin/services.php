<!DOCTYPE html>


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
$con=mysqli_connect("localhost","root","","petcarehub")or die (mysqli_error());
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
if(isset($_POST['b1']))
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];
$g=$_POST['t8'];
$h=$_POST['t7'];
$data="insert into adminservice values('$a','$b','$c','$d','$e','$f','$g','$h')";
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
if(isset($_POST['b2']))
{
$a=$_POST['t1'];
$data="select * from adminservice where name='$a'";
$result=mysqli_query($con,$data);
while($row=$result->fetch_assoc())
{
$a=$row[CurrentDate];
$b=$row[ServiceCode];
$c=$row[ServiceName];
$d=$row[ServiceDescription];
$e=$row[ServicePhoto1];
$f=$row[Photo2];
}
}
if(isset($_POST['b3']))
{
$a=$_POST['t1'];
$data="delete from adminservice where name is '$a'";
mysqli_query($con,$data);
$a="";
$b="";
$c="";
$d="";
$e="";
$f="";
}
if(isset($_POST['b4']))
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];
$data="update adminservice set name ='$b',message='$e',email='$c'where name ='$a'";
mysqli_query($con,$data);
$a="";
$b="";
$c="";
$d="";
$e="";
$f="";
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
                            <li><a href="adminshop.php">Services</a></li>
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
                <h4 class="header-line">ADMIN PANEL</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           SERVICES
                        </div>
                        <div class="panel-body">
                            <form method="POST">
                                        <div class="form-group">
                                            <label>Current Date</label>
                                            <input class="form-control" type="text" value="<?php echo date('d-m-Y'); ?>" name="t1"required />
                                          
                                        </div>
                    <div class="form-group">
                                            <label>Service Code</label>
                                            <input class="form-control" type="text"name="t2" value="<?php echo $b; ?>"required />
                                  
                                        </div>
					 <div class="form-group">
                                            <label>Service Name</label>
                                            <input class="form-control" type="text"name="t3" required />
                                  
                                        </div>
                                        <div class="form-group">
                                            <label>Service Long Description</label>
                                            <textarea class="form-control" rows="3" name="t4"required></textarea>
                                        </div>
                                            <div class="form-group">
                                            <label>Service Short Description</label>
                                           <input class="form-control" type="text"name="t7" required />
                                    </div>
					 <div class="form-group">
                                            <label>Service Photo1</label>
                                            <input class="form-control" type="file"name="t5" required />
                                  
                                        </div>
                                         <div class="form-group">
                                            <label>Photo2</label>
                                            <input class="form-control" type="file"name="t6" required />
                                  
                                        </div>
                                        <div class="form-group">
                                            <label>Service Rate</label>
                                            <input class="form-control" type="text"name="t8" required /> </div>
                                 
                                        <button type="submit" class="btn btn-info"name="b1">Send Message </button>
                                        <button type="submit" class="btn btn-info"name="b2">SAVE</button>
                                        <button type="submit" class="btn btn-info"name="b3">SEARCH </button>
                                        <button type="submit" class="btn btn-info"name="b4">DELETE</button>
                                        <button type="submit" class="btn btn-info"name="b5">UPDATE </button>

                                    </form>
                            </div>
                        </div>
                            </div>

                        
                        
                       
                                </form>
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
</htmL>
