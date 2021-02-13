<?php 

		include_once 'conncection.ini.php'
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title> VRS | User Table </title>
 </head>
 <body>
<?php

 	$user = "SELECT * FROM registration;";
 	$result = mysqli_query($conn, $user);
 	$resultCheck = mysqli_num_rows($result);


 	if ($resultCheck > 0) {
 		while ($row = mysqli_fetch_assoc($result)) {
 			echo $row['name']; 
 		}
 	}
 

 ?>
 </body>
 </html>