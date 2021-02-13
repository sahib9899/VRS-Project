
<html>
<head>
	<title> User Datatable</title>
     
    <link rel="icon" type="image/png" href="images/icons/car2.ico"/>
	<script src="js/jquery.js"></script>
	<script src="js/datatables.min.js"></script>
	<link rel="stylesheet" href="js/datatables.min.css">

	<script>
		$(document).ready(function(){
			$("#mytable").dataTable();
		})
	</script>
</head>
<body> 
<table cellspacing="5" cellpadding="4" id="mytable">
	<tr>
		<th>Name</th>
		<th>E-mail</th>
		<th>Phone</th>
		<th>Password</th>
		<th>Re-password</th>
	</tr>
<?php

	include 'database.php';
	$fetch = "SELECT name, email, phone, password, repassword from userdata";
	$result = $conn -> query($fetch);

	if ($result-> num_rows > 0) {
		while ($row = $result -> fetch_assoc()) {
			echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["password"]."</td><td>".$row["repassword"]."</td></tr>";
		}
	}

	else{
		echo "0 Data result.";	
		}
	$conn->close();
?>
</table>
</body>
</html>