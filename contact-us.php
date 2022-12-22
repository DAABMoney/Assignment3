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
    <title>Contact Us</title>

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
                   <a class="navbar-brand" href="index.html"><img src="images/Logo/Logo.png" width="72" height="45"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php">Gallery</a></l>
                        <li><a href="products.php">Products & Services</a></li>
                        <li><a href="viewrec.php">View Subs</a></li>
                        <li><a href="subscribe.php">Subscribe</a></li> 
                        <li><a href="about-us.php">About Us</a></li> 
                        <li class="active"><a href="contact-us.php">Contact</a></li>    
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
		
	<div class="map">
		
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18576.054393367085!2d-76.74771765906996!3d18.02692912341643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edb3ed230a1d1f9%3A0xd05acd895429b661!2sVocational%20Training%20Development%20Institute!5e0!3m2!1sen!2sjm!4v1583803928178!5m2!1sen!2sjm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> 
        
	</div>
	
	<section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Us A Line</h2>
                <p class="lead">Kindly fill out the form below, we will contact you within 24 - 48 hours.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
   <div class="col-sm-5 col-sm-offset-1">
      <form name="htmlform" method="post" action="formsubmit\html_form_send.php">
<table width="450px">
<tr>
 
 <td valign="top">
   <p><i class="fa fa-user icon"></i>
     <input  type="text" name="name" maxlength="50" size="30"placeholder=" Name*" required>
   </p>
   </td>
</tr>
 
<tr>
 
 <td valign="top">
 	<p><i class="fa fa-font icon"></i>
  <input  type="text" name="subject" maxlength="50" size="30" placeholder="Subject*" required>
  </p>
 </td>
</tr>
<tr>

 <td valign="top">
 <p><i class="fa fa-envelope icon"></i>
  <input  type="text" name="email" maxlength="80" size="30" placeholder="yourmail@mail.com*" required >
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 <p><i class="fa fa-phone icon"></i>
  <input  type="text" name="telephone" maxlength="30" size="30" placeholder="8761234567">
  </p>
 </td>
</tr>
<tr>
 <td valign="top"><i class="fa fa-file-text icon"></i>
 <p>
 <textarea  name="comments" maxlength="1000" cols="50" rows="6" placeholder="Question or request*" required></textarea>
 </p>
 </td>
 
 
</tr>
<tr>
 <td colspan="2" style="text-align:center">
 
  <div class="form-group">
 <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>  
                            
 <button type="reset" name="reset" class="btn btn-primary btn-lg" required="required">Reset</button></td>
</tr>
</table>
</form>    
            </div>
        </div>
    </section>

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
