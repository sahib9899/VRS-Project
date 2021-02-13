<?php 
     include 'session.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Rent | Vehicle Rental Service</title>

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
                    <a href="index.php" class="navbar-brand">Vehicle Rental Service</a>
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
                    <h1>Choose the Best for you</h1>

                    <br>

                    <p class="lead">Select your favorite car for your precious journey within your budget. </p>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/i20_.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 4</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.php">Hyundai : i20 Sportz</a></h3>
                                   <p class="lead"><small>from</small> <strong>₹1300</strong> <small>per 24 hours</small></p>
                                   <p> Fully serviced hatchback with and latest functionality safety features.</p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/car2.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i>6</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 5</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.php">Chevrolet: Enjoy LX</a></h3>
                                   <p class="lead"><small>from</small> <strong>₹2100</strong> <small>per 24 hours</small></p>
                                   <p> Chevrolet Enjoy : Best in segment for small families.</p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/car3.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 12</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 6</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> M</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.php">Force : Traveller</a></h3>
                                   <p class="lead"><small>from</small> <strong>₹3600</strong> <small>per 12 hours</small></p>
                                   <p>Force Traveller is our Most comfy and big space vehicle.</p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>
                  </div>  

               </div>

          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/car6.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 4</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 2</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 2</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.php">Maruti : Swift</a></h3>
                                   <p class="lead"><small>from</small> <strong>₹2200</strong> <small>per 12 hours</small></p>
                                   <p>Maruti swift is our best in small segment with top class models available.</p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/car5.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 7</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> M</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.php">Toyota Innova</a></h3>
                                   <p class="lead"><small>from</small> <strong>₹3000</strong> <small>per 12 hours</small></p>
                                   <p>Toyota innova Crysta is best for touring upto 7 person. </p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/car4.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 4</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.php">Premium: First Class</a></h3>
                                   <p class="lead"><small>from</small> <strong>₹18000</strong> <small>per 12 hours</small></p>
                                   <p>Ford Mustang GT Line : Top class sporty performance </p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">
                    <!-- Contact Information -->
                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>212 VRS H <br>SG Highway,Ahmedabad</p>
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


     <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                    </div>
                    
                    <div class="modal-body">
                         <form action="" method="post" id="contact-form">
                              <div class="row">
                                   <div class="col-md-6">
                                         <select type="text" name="pilocation" class="form-control" placeholder="Pick-up location" required>
									<option value="VRS Majevadi Gate"> VRS Majevadi gate </option>
									<option value="VRS MG Road"> VRS MG Road </option>
									<option value="VRS Madhuram"> VRS Madhuram </option>
									<option value="VRS Zanzarda"> VRS Zanzarda </option>
									<option value="default" selected="true"> Pick-up location </option>
								 </select>
                                   </div>

                                   <div class="col-md-6">
							   <select type="text" name="relocation" class="form-control" placeholder="Return location" required>
									<option value="VRS Majevadi Gate"> VRS Majevadi gate </option>
									<option value="VRS MG Road"> VRS MG Road </option>
									<option value="VRS Madhuram"> VRS Madhuram </option>
									<option value="VRS Zanzarda"> VRS Zanzarda </option>
									<option value="default" selected="true"> Return location </option>
							     </select>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                       Pick-up Date <input type="date" name="pidate" class="form-control" placeholder="Pick-up date" required>
                                   </div>

                                   <div class="col-md-6">
                                       Return Date <input type="date" name="redate" class="form-control" placeholder="Return date/time" required>
                                   </div>
								  
								  <div class="col-md-6">
                                       Pick-up Time <input type="time" name="pitime" class="form-control" placeholder="Pick-up time" required>
                                   </div>
								  
								  <div class="col-md-6">
                                      Return Time  <input type="time" name="retime" class="form-control" placeholder="Return time" required>
                                   </div>
								  
                              </div>
                             <?php if ($check == 1) {
                                  echo "<input type='name' class='form-control' name='name' placeholder='Enter full name' required>";
                             }else{
                              echo "<input type='text' class='form-control ' name='name' placeholder='Enter full name' value='".$_SESSION['name']."' required>";
                              } ?>

                              <div class="row">
                                   <div class="col-md-6">
                                <?php    if ($check == 1) {
                                  echo "<input type='email' class='form-control' name='email' placeholder='Enter Email address' required>";
                             }else{
                              echo "<input type='text' class='form-control ' name='email' placeholder='Enter Email address' value='".$_SESSION['email']."' required>"; }
                              ?>
                                   </div>

                                   <div class="col-md-6">
                                 <?php    if ($check == 1) {
                                  echo "<input type='phone' class='form-control' name='phone' placeholder='Enter phone number' required>";
                             }else{
                              echo "<input type='text' class='form-control ' name='name' placeholder='Enter phone number' value='".$_SESSION['phone']."' required>"; }  
                              ?> 
                                   </div>
                              </div>
                              
                         
                    </div>

                    <div class="modal-footer">
                         <?php
                         if ($check == 1) {
                         echo "<button class='section-btn btn btn-primary' name='clone'> Book Now </button>";
                         }else{
                         echo "<button class='section-btn btn btn-primary' name='booknow'>Book Now</button>"; }
                         ?>
                    </div>
               </div>
          </div>
          </form>
     </div>
     


<?php
  
     include 'database.php';
     
     if(isset($_POST['clone'])){
          echo "<script>alert('User Login is required for bookings !!');</script>";
     }
    if(isset($_POST['booknow'])) {
      
     $pilocation = $_POST['pilocation'];
     $relocation = $_POST['relocation'];
     $pidate = $_POST['pidate'];
     $redate = $_POST['redate'];
     $pitime = $_POST['pitime'];
     $retime = $_POST['retime'];
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     /* else
          if (1==1) {
     $fetch = "SELECT email from orders";
     $result = $conn -> query($fetch);

          <if ($result-> num_rows > 0) {
               while ($row = $result -> fetch_assoc()) {
                    while($email == $row["email"]){
                         echo "E-mail is already Registered, Try with new E-mail.";
                         break;
                    }
               }
          }
                    die('Email is already registered, Try with another E-mail.' .$conn->connect_error);
          }  */

          $stmt = $conn->prepare("insert into orders(pilocation, relocation, pidate, redate, pitime, retime, name, email, phone) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("ssssssssi" ,$pilocation, $relocation, $pidate, $redate, $pitime, $retime, $name, $email, $phone);
          $stmt->execute();
          echo "<script>alert('Your Trip is registered successfully...');</script>";

          //$booking = fopen("booking.txt", "w");

          $stmt->close();
          $conn->close();
     }
?>
     </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
    <!--Confirm Box 
     <script>
          function confirmbox() {
          var txt;
           if (confirm("Press a button!")) {
                 txt = "You pressed OK!";
                } else {
                         txt = "You pressed Cancel!";
                          document.getElementById("demo").innerHTML = txt;
                }
     </script> -->

</body>
</html>