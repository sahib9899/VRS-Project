<?php 
     include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>About us | Vehicle Rental Service</title>

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
                                   <li class="active"><a href="about-us.php">About Us</a></li>
                                   <li><a href="team.php">Team</a></li>
                                   <li><a href="testimonials.php">Testimonials</a></li>
                                   <li><a href="terms.php">Terms</a></li>
                              </ul>
                         </li>
                         <li><a href="contact.php">Contact Us</a></li>
                        <?php if($check == 1){
                         echo "<li> <a href='signup.php'> Login/Signup</a></li>"; }
                         else{
                          echo "<li> <a href='logout.php'> Logout ".$_SESSION['name']."</a></li>"; }
                         ?>
                    </ul>
               </div>

          </div>
     </section>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>About Us</h1>

                    <br>

                    <p class="lead">We are the country's largest providers of vehicles on Rent just on your Fingertips.</p>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-1 col-md-4 col-xs-12 pull-right">
                         <img src="images/about-1-720x720.jpg" class="img-responsive img-circle" alt="">
                    </div>

                    <div class="col-md-7 col-xs-12">
                         <div class="about-info">
                              <h2>You must be that why to chose us, right? Here is why.. </h2>

                              <figure>
                                   <figcaption>
                                        <p>No matter the purpose and situation in whatever you are, at some time and some situation you need a vehicle for your work, Travelling reasons or any Function purpose right? then why to go places to places to find the perfect vehicle for your requirements and purpose when you can get all avilable options near your place on your mobile and on your Fingertips. Thats what we do, Make things easy for you.</p>

                                    
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section>
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-xs-12">
                         <img src="images/about-2-720x720.jpg" class="img-responsive img-circle" alt="">
                    </div>

                    <div class="col-md-offset-1 col-md-7 col-xs-12">
                         <div class="about-info">
                              <h2></h2>

                              <figure>
                                   <figcaption>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, deserunt beatae praesentium veniam. Aperiam assumenda quas qui officiis, minima laudantium?</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis saepe quos repellat eum tempore magnam molestiae. Minus atque, aliquid assumenda, vero non recusandae illum optio, sint dignissimos praesentium ducimus repudiandae eius, nulla. Pariatur magnam alias est voluptatibus distinctio voluptate culpa, iste quisquam! Iure itaque rerum sequi, tenetur voluptatibus nihil quaerat, quisquam non in autem ducimus tempore impedit. Odit, corporis, praesentium.</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <div class="text-center">
                              <h2>Lorem ipsum dolor sit amet</h2>

                              <br>

                              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore molestias ipsa veritatis nihil iusto maiores natus dolor, a reiciendis corporis obcaecati ex. Totam assumenda impedit aut eum, illum distinctio saepe explicabo. Consequuntur molestiae similique id quos, quasi quas perferendis laboriosam, fugit natus odit totam! Id dolores saepe, sint debitis rerum dolorem tempora aliquid, pariatur enim nisi. Quia ab iusto assumenda.</p>
                         </div>
                    </div>
               </div>
          </div>
     </section>

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