<?php 

     include 'session.php';  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title> Terms | Vehicle Rental Service</title>

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
                                   <li><a href="testimonials.php">Testimonials</a></li>
                                   <li class="active"><a href="terms.php">Terms</a></li>
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
                    <h1>Terms</h1>

                    <br>

                    <p class="lead"> Here is few Terms and conditions for VRS rental service, Read it full.</p>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="about-info">
                    <h4>This Vehicle Rental Agreement is made and entered on the Date by and between the LESSOR legally conducting business within the State of Gujarat; and VRS collectively referred to herein as the “Parties.”
</h4>

                    <figure>
                         <figcaption>
                              <h3>1. EQUIPMENT SUBJECT TO LEASE.
</h3>
                              <p>The Lessor shall rent the equipment listed herein to the Lessee whom must adhere to the terms and conditions within this Agreement.</p>

                             
                         </figcaption>
                    </figure>

                    <figure>
                         <figcaption>
                              <h3>2. PAYMENT TERMS. </h3>
                              <p> The rental fee is based on a rate of [WRITTEN RUPEES AMOUNT] dollars ([NUMERICAL RUPEES AMOUNT]) per day, plus any additional fees incurred.  Additional charges shall be added in the event the equipment is damaged, missing any parts, or returned later than [DATE AND TIME].  All charges shall commence from the Effective Date of this Agreement.  Lessee shall pay to the Lessor an additional service charge of [WRITTEN RUPEES AMOUNT] dollars ([NUMERICAL RUPEES AMOUNT]) per day for each day the equipment has not been returned, in addition to the daily rental fee.  Lessor shall invoice the client on a [TIME PERIOD] basis and all invoices are due upon receipt.</p>

                             
                         </figcaption>
                    </figure>

                    <figure>
                         <figcaption>
                              <h3>3. RETURNED CHECKS.</h3>
                              <p>The Lessee shall be charged [WRITTEN RUPEES AMOUNT] dollars (RUPEES AMOUNT]) for each check that is returned to the Lessor for insufficient funds.</p>

                             
                         </figcaption>
                    </figure>

                    <figure>
                         <figcaption>
                              <h3>4. SECURITY DEPOSIT.</h3>
                              <p>In addition to the rental fee, the Lessee shall pay a security deposit of Written Amount ([NUMERICAL RUPEES AMOUNT]) prior to receiving any equipment and at the time this Agreement is signed.  This deposit shall be returned to the Lessee upon termination of this Agreement, subject to the option of the Lessor to apply it against any charges or damages incurred. </p>

                              <p> Any amounts refundable to the Lessee shall be paid at the time this Equipment Rental Agreement is terminated.  The security deposit shall bear interest at an annual rate of [PERCENTAGE RATE]% from the date paid to the Lessor until the date refunded, based on the total amount of the security deposit.</p>
                         </figcaption>
                    </figure>

                    <figure>
                         <figcaption>
                              <h3>5. LEASE TERM.  </h3>
                              <p>This Equipment Rental Agreement shall begin on the above Effective Date and shall terminate on [DATE], unless otherwise terminated in a manner consistent within these terms.  At the end of the Lease term, the Lessee shall be obligated to return the equipment to the Lessor at the Lessee’s expense.</p>

                              
                         </figcaption>
                    </figure>

                    <figure>
                         <figcaption>
                              <h3>6. LOCATION.</h3>
                              <p>The equipment shall be located at [CUSTOMER ADDRESS] during the term of this Agreement, and shall not be removed from that location without the Lessor’s prior written consent.

</p>
     
                         </figcaption>
                    </figure>
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
                                   <p>212, Crest Building<br>SG Highway, Ahmedabad </p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 VRS Group</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+91 757 387 3393</p>
                                   <p><a href="mailto:contact@company.com">contact@vrshelp.com</a></p>
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