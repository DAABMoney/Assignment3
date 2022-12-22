<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='icon' href='favicon.ico' type='image/x-icon'/ >
    <title>RsND Automotive Ltd.</title>

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
                        <li class=""><a href="index.php">Home</a></li>
                        <li><a href="gallery.php">Gallery</a></l>
                        <li><a href="products.php">Products & Services</a></li>
                        <li><a href="viewrec.php">View Subs</a></li>
                        <li><a href="subscribe.php">Subscribe</a></li> 
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

   

    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $origin_file = $_FILES["subimgs"]["tmp_name"];
        $ext = pathinfo($_FILES["subimgs"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'files/';
        $destination = "$target_dir$email.$ext";
        move_uploaded_file($origin_file,$destination);

        $isSuccess = $crud->insert($fname, $lname, $gender, $email, $address1, $address2, $destination);
        if($isSuccess){
            echo '<br/><br/><br/><br/><h2 class="text-center text-success">Subscription successful.</h2><br/><br/>';
            echo '<h2 class="text-center text-success">Thank you for subcribing. Click the link 
            to return<a href="index.php">Home</a></h2>';
        }
        else{
            echo '<br/><br/><br/><br/><h2 class="text-center text-danger">Sorry subscription unsuccessful.</h2><br/><br/>';
            echo '<h2 class="text-center text-danger">Click the link to return<a href="index.php">Home</a>
            or try again.</h2>';
            
        }
    }
?>
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
