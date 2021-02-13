<?php

$conn = new mysqli('localhost', 'root', '', 'registration');
	if ($conn->connect_error) {
		die('Connection Failed : '.$conn->connect_error);
	}

?>