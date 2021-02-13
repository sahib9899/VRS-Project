<?php
	include 'session.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>VRS Sign-in</title>
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

			<div class="login10-form validate-form">
				<form id="signin" action="" method="post" class="login10-form validate-form">
					<span class="login10-form-title">
						Member Login
					</span>

					<div class="wrap-input10 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						E-mail
						<input class="input10" type="text" name="login_email" placeholder="Email" required>
						<span class="symbol-input10">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input10 validate-input" data-validate = "Password is required">
						Password
						<input class="input10" type="password" name="login_pwd" placeholder="Password" required>
						<span class="symbol-input10">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login10-form-btn">
						<button name="signin" class="login10-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="signup.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>	

<?php
	include 'database.php';
	if(isset($_POST['signin'])){

		$login_email = $_POST['login_email'];
		$login_pwd = $_POST['login_pwd'];

			$fetch = "SELECT email, password, name, phone from userdata";
			$result = $conn -> query($fetch);
			$check = 0;

			if ($result-> num_rows > 0) 
			{
				while ($row = $result -> fetch_assoc()) 
				{
					if($login_email == $row["email"] && $login_pwd == $row["password"])
					{
					//	echo "E-mail is already Registered, Try with new E-mail.";
						echo "<script>alert('User Logged in successfully');</script>";
						$check = 1;
						$_SESSION['name'] = $row["name"];
						$_SESSION['phone'] = $row["phone"];
						$_SESSION['email'] = $row["email"];
						echo "<script> location.replace('index.php'); </script>";
						break;
					}
				}
				if ($check == 0){
						echo "<script>alert('Email or Password is incorrect.');</script>";
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