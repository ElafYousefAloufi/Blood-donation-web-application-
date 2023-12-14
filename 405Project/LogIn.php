<?php    
	
	//Start Session, to save User Information
	session_start();
	
?>

<!DOCTYPE html>
<html>

	<body>
			
		<!-- ---------- LogIn New User ---------- -->

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
			
			//Information from LogIn Form
			$email = $_POST['email'];  
			$password = $_POST['password'];  
			  
			//to prevent from mysqli injection  
			$email = stripcslashes($email);  
			$password = stripcslashes($password);  
			$email = mysqli_real_escape_string($conn, $email);  
			$password = mysqli_real_escape_string($conn, $password);  
			  
			//SQL Query
			$sql = "select * from users where email = '$email' and password = '$password'";  
			
			//Run the query
			$result = mysqli_query($conn, $sql);  
			
			//Fetch a row
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

			//Rows Number
			$count = mysqli_num_rows($result);  
				
			//LogIn check
			if($count == 1){  
				$_SESSION["ID"] = $row["id"];
				header("Location: RequirementQuiz.php");  
			}  
			else{  
				echo "<script>;
						alert('You do not have an account');
						window.location.href='Signup.html';
					  </script>";		
			}     
			
		?> 
	</body>
	
</html>