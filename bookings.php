
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
		<th>Pickup Location</th>
		<th>Return Location</th>
		<th>Pickup Date</th>
		<th>Return Date</th>
		<th>Pickup Time</th>
		<th>Return Time</th>
	</tr>
<?php

	include 'database.php';

	$fetch = "SELECT * from orders";
	$result = $conn -> query($fetch);

	if ($result-> num_rows > 0) {
		while ($row = $result -> fetch_assoc()) {
			echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["pilocation"]."</td><td>".$row["relocation"]."</td><td>".$row["pidate"]."</td><td>".$row["redate"]."</td><td>".$row["pitime"]."</td><td>".$row["retime"]."</td></tr>";
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