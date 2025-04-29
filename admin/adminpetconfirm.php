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
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<?php 
error_reporting(0);
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
            <div class="row">
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
                <h4 class="header-line">Pet Confirmation</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pet Sale Confirmation
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Regd. No</th>
                                            <th>Pet Type</th>
                                            <th>Breed</th>
                                            <th>Age</th>
                                            <th>Colour</th>
                                            <th>Weight</th>
                                            <th>Health</th>
                                            <th>Email</th>
                                            <th>Contact No</th>
                                            <th>Operation</th>
                                        

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $k="";
                                        $con=mysqli_connect("localhost","root","","petcarehub")or die(mysqli_error());
                                        $data="select * from petsale";
                                        $result=mysqli_query($con,$data);
                                        while($row=$result->fetch_assoc())
                                        {
                                        $a=$row['Regdno'];
                                        $b=$row['pettype'];
                                        $c=$row['Breed'];
                                        $d=$row['Age'];
                                        $e=$row['Gender'];
                                        $f=$row['Color'];
                                        $g=$row['Weight'];
                                        $h=$row['Healthstatus'];
                                        $i=$row['Customeremail'];
                                        $j=$row['Contactno'];
                                        $k=$row['Confirm'];
                                       
                                    
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $b; ?></td>
                                            <td><?php echo $c; ?></td>
                                            <td><?php echo $d; ?></td>
                                            <td><?php echo $f; ?></td>
                                            <td><?php echo $g; ?></td>
                                            <td><?php echo $h; ?></td>
                                           
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $j; ?></td>
                                            <form method="POST">
                                            <td><button type="submit"name="confirm">Confirm</button></td></form>
                                        </tr>
                                       
                                    
                                       
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <?php
                                        $con=mysqli_connect("localhost","root","","petcarehub")or die(mysqli_error());
                                      
                                            if(isset($_POST['confirm']))
                                        {
                                            
                                        $data="update petsale set Confirm='Yes' where Regdno='$a'";
                                        $result=mysqli_query($con,$data);
                                        echo '<script type="text/javascript">';
                                        echo 'alert("Pet Confirmed  Succesfully")';  
                                        echo '</script>';
                                        $k="";
                                        }
                                        ?>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                
                
               
               
                <!-- /. ROW  -->
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
