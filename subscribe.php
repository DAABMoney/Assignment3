<?php
include_once 'includes/session.php'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='icon' href='favicon.ico' type='image/x-icon'/ >
    <script src="https://kit.fontawesome.com/4c31ea56e4.js" crossorigin="anonymous"></script>
    <title>Subscribe</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
	<link href="css/main.css" rel="stylesheet">
	 <link href="css/responsive.css" rel="stylesheet">
	
  </head>
  <body class="homepage">   
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/Logo/Logo.png" width="72" height="45"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php">Gallery</a></l>
                        <li><a href="products.php">Products & Services</a></li>
                        <li><a href="viewrec.php">View Subs</a></li>
                        <li class="active"><a href="subscribe.php">Subscribe</a></li>
                        <li><a href="about-us.php">About Us</a></li> 
                        <li><a href="contact-us.php">Contact</a></li>  
                        <li><?php
                        if(!isset($_SESSION['userid'])){
                        ?>
                    <a class="nav-item nav-link" href="login.php">Login</a>
                    <?php } else { ?>
                        <a class="nav-item nav-link" href="#"><span>Hi <?php echo $_SESSION['username']?></span></a>
                        <a class="nav-item nav-link" href="logout.php">Logout</a>
                        <?php }?> </li>                     
                    </ul>
                </div>
            </div>
        </nav>
		
    </header>
    <?php    
    require_once 'db/dbconn.php';
    ?>
	<section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Subscribe</h2>
               <p class="lead">Get the latest inventory, parts and general updates.</p>
            </div>

            <fieldset>
                <legend>Contact Information:</legend>
                <form method="post" action="success.php" enctype="multipart/form-data" 
                onsubmit="return validateForm()">
                <table style="width:100%" cellspacing="0" padding="2">
                <tr>
                    <td>
               <div class="form-group">
                <div class="col-sm-6">
                <i class="fa-solid fa-user"></i>
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" required>                
                </div>
                </div>
                    </td>
                        <td>
                <div class="form-group">
                    <div class="col-sm-8">
                <i class="fa-solid fa-user"></i>
                <label for="lname" class="form-label" >Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" required>                
                </div>
            </div>
            </td>
            </tr>
                <tr>
                <td>
                <div class="form-group">
                <div class="col-sm-6">
                    <i class="fa fa-gears"></i>
                    <label for="select">Gender</label>    
                    <select class="form-control" id="select" name="gender" required>
                    <option value="">--Select Gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>                
                </div>
                </div>
                    </td>                                
                    <td>
                    <div class="from-group">
                    <div class="col-sm-8">
                    <i class="fa-solid fa-envelope"></i>
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text"></div>
                        </div>
                    </div>
                    </td>
                    <tr>
                        <td>
                    <div class="form-group">
                <div class="col-sm-6">
                <i class="fa fa-address-book"></i>
                <label for="address1" class="form-label">Address Line1</label>
                <input type="text" class="form-control" id="address1" name="address1" required>                
                </div>
                </div>
                    </td>
                        <td>
                <div class="form-group">
                    <div class="col-sm-8">
                <i class="fa fa-address-book"></i>
                <label for="address2" class="form-label" >Address Line2</label>
                <input type="text" class="form-control" id="address2" name="address2" required>                
                </div>
            </div>
            </td>
            </tr>
            <tr>        
                <td>
                <div class="custom-file">
                <div class="col-sm-8">
                    <i class="fa fa-image"></i>
                    <input type="file" accept="image/*" class="custom-file-input" id="subimgs" name="subimgs" ><br/>
                    <label >
                    <small id="subimgs" class="form-text text-warning">File upload is optional</small> 
                </div>
                </div>
                </td>
                    <td>                
                <div class="form-group">
                    <br/>    
                    &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit" class="btn btn-primary" value="Submit">
                    Subscribe &nbsp;<i class="fa fa-send-o fa-fly"></i></button>
                    <button type="reset" name="reset" class="btn btn-primary" value="Reset">
                    Reset &nbsp;<i class="fa fa-refresh"></i></button>                    
                </div>
                </td>
                </tr>
                </table>
                    </form>
                </fieldset>                
    </section>
	<br/>
	<section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                          <h3>Company</h3>
                        <ul>
                            <li><a href="about-us.php">About us</a></li>
                            <li><a href="contact-us.php">We are hiring</a></li>
                            <li><a href="about-us.php">Meet the team</a></li>
                            <li><a href="contact-us.php">Copyright</a></li>                           
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="contact-us.php">Faq</a></li>
                            <li><a href="contact-us.php">Tips</a></li>
                            <li><a href="contact-us.php">Request Documentation</a></li>                          
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Manufacturers</h3>
                        <ul>
                          <li><a href="https://www.koenigsegg.com/" target="_blank">Partner Development</a></li>
                            <li><a href="contact-us.php">Marketing</a></li>
                            
                            <li><a href="contact-us.php">Development</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="https://www.koenigsegg.com/" target="_blank">Koenigsegg</a></li>
                            <li><a href="https://www.ferrari.com/en-EN/auto" target="_blank">Ferrari</a></li>
                            <li><a href="https://www.bugatti.com/" target="_blank">Bugatti</a></li>
                            <li><a href="https://www.toyota.com/" target="_blank">Toyota</a></li>                           
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
	
	<div class="top-bar">
		<div class="container">
			<div class="row">
			    <div class="col-lg-12">
				   <div class="social">
						<ul class="social-share">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
						</ul>
				   </div>
                </div>
			</div>
		</div>
	</div>
	
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2022 <a target="" href="#" title=""></a>. All Rights Reserved.
                </div>                
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="contact-us.php">Faq</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
	
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>   
    <script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
  </body>
</html>
