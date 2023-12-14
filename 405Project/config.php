<?php

	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$myDB = "BloodDonationDB";
			
	// Create connection
	$conn = new mysqli($servername, $username, $password, $myDB);
			
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
?>