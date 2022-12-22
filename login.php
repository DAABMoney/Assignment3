<?php
include_once 'includes/session.php'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/4c31ea56e4.js" crossorigin="anonymous"></script>
    <link rel='icon' href='favicon.ico' type='image/x-icon'/ >
    <title>RsND Automotive Ltd. - Login</title>

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
                        <li><a href="subscribe.php">Subscribe</a></li> 
                        <li><a href="about-us.php">About Us</a></li> 
                        <li><a href="contact-us.php">Contact</a></li> 
                        <li class="active"><?php
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
    <br />
    <br />
    <br />
<br />
<br />
<?php    
    require_once 'db/dbconn.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);
        $result = $user->getUser($username,$new_password);
        if(!$result){
            echo '<div class="alert alert-danger">Username or password incorrect, try again. </div>';
        }else{
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['id'];
            header("Location: viewrec.php");
        }

    }
?>
<br />
<br />
<br />
<fieldset class="col-sm-6" >
<legend>User Login:</legend>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<table style="width: 100%" cellspacing="0">
    <tr>
       <td>
<div class="form-group">
    <div class="col-sm-10">
    <i class="fa-solid fa-user"></i>
    <label for="username" >Username*</label>
    <input type="text" class="form-control" id="username" name="username" 
    value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username'];?>">
    </div>
</div>
    <td>    
<div class="form-group">
    <div class="col-sm-10">
    <i class="fa-solid fa-user"></i>
    <label for="password" >Password*</label>
    <input type="password" class="form-control" id="passsword" name="password">
    <?php if (empty($password) && isset($password_error)) echo "<p class='text-danger'> $password_error</P> "?>
    </div>
</div>
</td>
</tr>
</table>
<br/>
    <div class="d-grid gap-1">    
        &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" value="Login">Login &nbsp;<i class="fa fa-key"></i></button>
        <br />
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="#"> Forgot password </a>
    </div>
</fieldset>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
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
