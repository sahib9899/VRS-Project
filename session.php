<?php 

	global $check;
	$check = 0;
	 session_start();
     if (!isset($_SESSION['name'])) {
        $check = 1;  
	}elseif ($_SESSION['name'] == 'Admin') {
		$check = 2;
	}  

 ?>
