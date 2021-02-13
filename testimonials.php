<?php 
     include 'session.php';  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Testimonials | Vehicle Rental Service</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="icon" type="image/png" href="images/icons/car2.ico"/>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Vehicle Rental Service</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php">Home</a></li>
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rent<span class="caret"></span></a>
                              
                              <ul class="dropdown-menu">
                                   <li><a href="fleet.php">Cars</a></li>
                                   <li><a href="fleet2.php">Bikes</a></li>
                              </ul>
                         </li>
                         <li><a href="offers.php">Offers</a></li>
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                              
                              <ul class="dropdown-menu">
                                   <li><a href="blog-posts.php">Blog</a></li>
                                   <li><a href="about-us.php">About Us</a></li>
                                   <li><a href="team.php">Team</a></li>
                                   <li class="active"><a href="testimonials.php">Testimonials</a></li>
                                   <li><a href="terms.php">Terms</a></li>
                              </ul>
                         </li>
                         <li><a href="contact.php">Contact Us</a></li>
                        <?php if($check == 1){
                         echo "<li> <a href='signup.php'> Login/Signup</a></li>"; }
                         else{
                          echo "<li> <a href='logout.php'> Logout ".$_SESSION['name']."</a></li>"; }
                         ?>
               </div>

          </div>
     </section>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Testimonials</h1>

                    <br>

                    <p class="lead">Customer Satisfaction is our Main Goal. Few of our happy customers write something about us! take a look</p>
               </div>
          </div>
     </section>

     <!-- TESTIMONIAL -->
    <!-- <section id="testimonial" class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-sm-4 col-xs-12">
                         <div class="item">
                              <div class="tst-image">
                                   <img src="images/tst-image-1-200x216.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="tst-author">
                                   <h4>Jackson</h4>
                                   <span>Shopify Developer</span>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex assumenda culpa animi aspernatur provident at inventore aperiam itaque esse impedit.</p>
                              <div class="tst-rating">
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                              </div>
                         </div>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                         <div class="item">
                              <div class="tst-image">
                                   <img src="images/tst-image-2-200x216.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="tst-author">
                                   <h4>Camila</h4>
                                   <span>Marketing Manager</span>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dolores placeat nisi ab nobis soluta tempora minus laudantium adipisci, ex fugiat nemo culpa minima unde? Itaque delectus, alias possimus fugiat.</p>
                              <div class="tst-rating">
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                              </div>
                         </div>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                         <div class="item">
                              <div class="tst-image">
                                   <img src="images/tst-image-3-200x216.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="tst-author">
                                   <h4>Barbie</h4>
                                   <span>Art Director</span>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ea nihil accusamus mollitia officia tempora, sapiente explicabo, molestiae officiis blanditiis consectetur nostrum! Repellat maiores, perspiciatis repudiandae nostrum eaque dolores distinctio id est natus, quibusdam quaerat.</p>
                              <div class="tst-rating">
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                              </div>
                         </div>
                    </div>
               </div>
               
               <div class="row">
                    <div class="col-sm-4 col-xs-12">
                         <div class="item">
                              <div class="tst-image">
                                   <img src="images/tst-image-1-200x216.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="tst-author">
                                   <h4>Jackson</h4>
                                   <span>Shopify Developer</span>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex assumenda culpa animi aspernatur provident at inventore aperiam itaque esse impedit.</p>
                              <div class="tst-rating">
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                              </div>
                         </div>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                         <div class="item">
                              <div class="tst-image">
                                   <img src="images/tst-image-2-200x216.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="tst-author">
                                   <h4>Camila</h4>
                                   <span>Marketing Manager</span>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dolores placeat nisi ab nobis soluta tempora minus laudantium adipisci, ex fugiat nemo culpa minima unde? Itaque delectus, alias possimus fugiat.</p>
                              <div class="tst-rating">
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                              </div>
                         </div>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                         <div class="item">
                              <div class="tst-image">
                                   <img src="images/tst-image-3-200x216.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="tst-author">
                                   <h4>Barbie</h4>
                                   <span>Art Director</span>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ea nihil accusamus mollitia officia tempora, sapiente explicabo, molestiae officiis blanditiis consectetur nostrum! Repellat maiores, perspiciatis repudiandae nostrum eaque dolores distinctio id est natus, quibusdam quaerat.</p>
                              <div class="tst-rating">
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section> -->

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>212 VRS HQ <br>SG Highway, Ahmedabad</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 VRS</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+91 757 378 3393</p>
                                   <p><a href="mailto:contact@company.com">contact@vrs.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="terms.php">Terms & Conditions</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>