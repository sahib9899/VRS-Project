<?php 

include 'database.php';

	if(isset($_POST['booknow'])) {

	$pi_location = $_POST['Pi_location'];
	$re_location = $_POST['re_location'];
	$pi_date = $_POST['Pi_date'];
	$re_date = $_POST['re_date'];
	$pi_time = $_POST['Pi_time'];
	$re_time = $_POST['re_time'];
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

		

		$stmt = $conn->prepare("insert into orders(pickup location, return location, pickup date, return date, pickup time, return time, name, email, phone) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssddssssi" ,$pi_location, $re_location, $pi_date, $re_date, $pi_time, $re_time, $name, $email, $phone);
		$stmt->execute();
		echo "Your Trip is registered successfully...";
		$stmt->close();
		$conn->close();
	}
}
 ?>