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
    <title>Gallery</title>

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
                        <li class="active"><a href="gallery.php">Gallery</a></l>
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
		
	<section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Gallery</h2>
               <p class="lead">Browse our gallery to get a closer look at our plentiful options.</p>
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="class="btn btn-primary btn-lg" href="#" data-filter="*">View All</a></li>
                <li><a class="class="btn btn-primary btn-lg" href="#" data-filter=".bootstrap">Hypercars</a></li>
                <li><a class="class="btn btn-primary btn-lg" href="#" data-filter=".html">Supercars</a></li>
                <li><a class="class="btn btn-primary btn-lg" href="#" data-filter=".wordpress">Hyper-Super Cars</a></li>
            </ul>

            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">One:1 - Koenigsegg</a></h3>
                                    <p>The One:1 was introduced in 2014. Seven examples, including one prototype, were built during 2014 and 2015 </p>
                                    <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div>>

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">McLaren P1</a></h3>
                                    <p>Follows in the footsteps of the iconic McLaren F1, the car that pushed boundaries further than any of its rivals.</p>
                                    <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div>

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">2020 Toyota GR Supra </a></h3>
                                    <p>From start to finish, each aspect of GR Supra's creation was a true labor of love. </p>
                                    <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>        
                    </div>

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Mustang Shelby&reg;  GT500&reg; </a></h3>
                                    <p>The most powerful and fastest Mustang of all time -- the 2020 Ford Shelby GT500.</p>
                                    <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>           
                    </div>
          
                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Jesko - Koenigsegg</a></h3>
                                    <p>Megacar – the Jesko inherits the mantle left by the Agera RS as the leading track-focused, road-legal  high performance vehicle.</p>
                                    <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Lamborghini Urus</a></h3>
                                    <p>The soul of a super sports car and the functionality of a SUV, the Urus is the first Super Sport Utility Vehicle in the world.</p>
                                    <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div>

                    <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">LaFerrari</a></h3>
                                    <p>The LaFerrari's overall silhouette and proportions are the very natural product of its architecture.</p>
                                    <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div>

                    <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item8.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Bugatti Chiron </a></h3>
                                    <p>The CHIRON is the fastest, most powerful, and exclusive production super sports car in BUGATTI’s history. </p>
                                    <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div>
                </div>
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
