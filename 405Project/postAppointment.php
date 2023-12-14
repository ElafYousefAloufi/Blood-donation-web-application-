<?php    

	//Start Session, to save User Information
	session_start();
	
?>

<!DOCTYPE html>
<html>

	<body>
		
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
			
			
			//Information from appointment Form
			$_ID = $_SESSION["ID"];
			$Centers = $_POST['centers'];
			$Time = $_POST['time'];
			$Date = $_POST['from-date'];
			
			
			//SQL Query
			$sql = "INSERT INTO appointments (userId, location, time, date) VALUES('$_ID', '$Centers', '$Time', '$Date');";
			
			//appointment create check
			if($conn->query($sql) === TRUE){  
				
				echo "<script>;
						alert('Appointment created succsfually');
						window.location.href='bookAppointment.php';
					  </script>";	  

			}  
			else{  
				echo "<script>;
						alert('Appointment could not be created');
						window.location.href='bookAppointment.php';
					  </script>";		
			}  
			
			
			//close connection
			$conn->close();
			
		?>
		
	</body>
	
</html>
