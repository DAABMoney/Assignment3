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
                        <li class="active"><a href="index.php">Home</a></li>
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
	
	<div class="slider">
		<div class="container">
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="images/slider_1.jpg" class="img-responsive" alt=""> 
					   </div>
					   <div class="item">
							<img src="images/slider_2.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/slider_3.jpg" class="img-responsive" alt="" aling="center"> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> 
			</div>
		</div>
	</div>

	 <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>What is Our Offerings?</h2>
                <p class="lead"><b>&lsquo;<em>RsND Automotive Ltd.</em></b><em> -</em>We are aware that image is of paramount importance to our customers therefore we  pay close attention to obtaining the professional look through;<br>
           <table>
            <ul>
            <tr>
            <li>Classy and stylish vehicles</li>
            <li>Durability and reliability</li>
            <li>Luxury and comfort</li>
            </ul>
            </tr>
            </table>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-laptop" style="color:#000"></i>
                            <h2>Fresh and Clean</h2>
                            <h3>No need to sweat, we got you.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments" style="color:#CCC"></i>
                            <h2>Quick tips</h2>
                            <h3>Gettting you the tips, facts and advices you need.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download" style="color:#0CF"></i>
                            <h2>Customizable</h2>
                            <h3>To suit your taste and needs.</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf" style="color:#093"></i>
                            <h2>EV friendly</h2>
                            <h3>Going green to protect our environment.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cogs" style="color:#666"></i>
                            <h2>Know your ride</h2>
                            <h3>All the help and information you need about your ride.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart" style="color:#F00"></i>
                            <h2>We Care</h2>
                            <h3>It's not just about making a sale. We are here for you.</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div>   
        </div>
    </section>
	
	 <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Preview</h2>
                <p class="lead">Just a glimpse of our wonderful offerings to you.</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">One:1 - Koenigsegg</a> </h3>
                                <p>The One:1 was introduced in 2014. Seven examples, including one prototype, were built during 2014 and 2015.</p>
                                <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">McLAREN P1</a></h3>
                                <p>Follows in the footsteps of the iconic McLaren F1, the car that pushed boundaries further than any of its rivals.</p>
                                <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">2020 Toyota GR Supra </a></h3>
                                <p>From start to finish, each aspect of GR Supra's creation was a true labor of love. Go inside to see what went into the creation of an icon.</p>
                                <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
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
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Jesko - Koenigsegg</a></h3>
                                <p>Megacar – the Jesko inherits the mantle left by the Agera RS as the leading track-focused, road-legal high performance vehicle.</p>
                                <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Lamborghini Urus </a></h3>
                                <p>The soul of a super sports car and the functionality of a SUV, the Urus is the first Super Sport Utility Vehicle in the world.</p>
                                <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
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

                <div class="col-xs-12 col-sm-4 col-md-3">
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
    </section>	
	
                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>Why People like us?</h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Customer Service
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/accordion1.png">
                                        </div>
                                        <div class="media-body">
                                             <h4>They have great customer service.</h4>
                                             <p>Customer service is the backbone of a business and without that the business will not able to stand tall. The team is dedicated to providing honest, prompt and exceptional customer service always to the clients and their family.</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Experience
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                              
                           <h4>Great Experience</h4>
                              
                                <p>James “I worked along with Mr Beckford on my car purchase and I appreciate his candid no-pressure style. He is really a car guy and very knowledgeable in providing data that I didn’t know. Which made it quite easy to choose the right car. It was overall a great experience.” </p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Technology
                                  
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                              <h4>Advance Technology</h4>
                              
                                <p>Sarah “Advance In-Car, was easy to find. The cruise control was one of the features on my car good for average speed zones. GPS, dash cam, reverse cam, parking sensors and more upgrades. Thank you so much am loving it” </p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Affordability
                                  
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                              <h4>Affordability</h4>
                              
                                <p>Ryan “I have been to so many automotive places over the country. The one that I saw here at <span>RsND Automotive</span> was by far the cleanest and the best price I have seen. It was very affordable. Thanks for a great car!”</p>
                              </div>
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
