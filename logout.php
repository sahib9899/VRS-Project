<?php

	include 'session.php';
	echo "<script> alert('User logged out successfully.'); </script>";
	header('location: login.php');
    session_destroy();

?>