<html lang="en">
<head>

	<title>VRS Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/car2.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">


				<div class="login100-form validate-form">
					<form id="signup" action="" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-59"> Sign Up</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="name" placeholder="Name" required>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Email" required>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Phone Number is required">
						<span class="label-input100">Phone</span>
						<input class="input100" type="tel" name="phone" placeholder="Mobile Number" required>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="******" required>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="password" name="repassword" placeholder="******" required>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" required>
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="terms.php" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>
					</div>

						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button name="signup" class="login100-form-btn">
								 Sign Up 
								</button>
							</div>
							<a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in<i class="fa fa-long-arrow-right m-l-5"></i>
							</a>
							
						</div>			
						
					</form>
				</div>
				
	<?php 
		include 'database.php';

		if(isset($_POST['signup'])){

		if($_POST['password'] != $_POST['repassword']) {
			echo "<script>alert('Password does not Match!!');</script>";
		}
		else{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

			$fetch = "SELECT email from userdata";
			$result = $conn -> query($fetch);
			$check = 0;

			if ($result-> num_rows > 0) 
			{
				while ($row = $result -> fetch_assoc()) 
				{
					if($email == $row["email"])
					{
					//	echo "E-mail is already Registered, Try with new E-mail.";
						echo "<script>alert('E-mail is already registered, Try with another E-mail');</script>";
						die($conn->connect_error);
						$check = 1;
						break;
					}
				}
			}
			if($check == 0)
			{
					$stmt = $conn->prepare("insert into userdata(name, email, phone, password, repassword) 	values(?, ?, ?, ?, ?)");
					$stmt->bind_param("ssiss", $name, $email, $phone, $password, $repassword);
					$stmt->execute();
					echo "<script>alert('Registered Successfully,Log-in to Continue...');</script>";
					$stmt->close();
					$conn->close();
			}
		}
		
	}
	?>

			</div>
		</div>
	</div>	
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>