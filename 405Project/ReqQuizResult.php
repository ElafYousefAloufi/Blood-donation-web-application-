
<?php    

	//Start Session, to save User Information
	session_start();
	if(!(isset($_SESSION['ID']))){
		echo "<script>
				alert('Login First');
				window.location.href='Newlogin.html';
			  </script>";	
	}
	
?>

<!DOCTYPE html>
<html>

	<body>
		
	<!-- Set Valid Value to 1 witch is true -->
	
		<?php    
			
			//Database Information
			$servername = "localhost";
			$username = "root";
			$password = "";
			$myDB = "BloodDonationDB";
			
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $myDB);
			
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			//Save ID to Global Variable
			$_ID = $_SESSION["ID"];
			$_SESSION["Valid"] = "1";
			$_Valid = $_SESSION["Valid"];
			
			//Sql Query
			$query  = "UPDATE users SET valid = '1' WHERE id = '$_ID'";
	
			//If Sql correct: Link to another pagr
			if ($conn->query($query) === TRUE) {
				header("Location: bookAppointment.php");  
			}
								
		?> 
		
	</body>
	
</html>