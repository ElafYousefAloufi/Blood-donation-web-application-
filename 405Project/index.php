<!DOCTYPE html>
<html>

<!-- -------------------- Head section -------------------- -->
	<head>

		<!-- --- Title section  --- -->
		<title>HOME</title>

		<!-- -- StyleSheets Link -- -->
		<link href="home.css" rel="stylesheet"/>
		<link href="pagestyle.css" rel="stylesheet"/>
			 
	</head>


<!-- -------------------- Body section -------------------- -->
	<body>
		
		<?php
		
			//Varaibles   - myDB has been added after create the database, to refer to the created one -
			$servername = "localhost";
			$username = "root";
			$password = "";
		    $myDB = "BloodDonationDB";
			
			// Create connection
			$conn = new mysqli($servername, $username, $password,$myDB);
			
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			/*
			// Create database
			$sql = "CREATE DATABASE BloodDonationDB";
			
			if ($conn->query($sql) === TRUE) { echo "Database created successfully"; } 
			else { echo "Error creating database: " . $conn->error; }
			*/
			
			/*
			//Create Users Table
			$sql = "CREATE TABLE Users (
						id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
						username VARCHAR(30) NOT NULL,
						password VARCHAR(30) NOT NULL,
						valid BOOLEAN,
						email VARCHAR(50),
						phone INT(15),
						BloodType VARCHAR(10),
						code INT(255),
						statues VARCHAR(50)
					)";
			
			if ($conn->query($sql) === TRUE) { echo "Table Users created successfully"; } 
			else { echo "Error creating table: " . $conn->error; }
			*/
			
		?>

	<!-- --------------- Header section --------------- -->
		<header>
		
			<nav class="topnav">
				<img src="Image/Logo.png" alt="logo">
				<a href="Index.php">Home</a>
				<a href="process.html">Donation Procees</a>
				<a href="RequirementQuiz.php">Requirement Quiz</a>
				<a href="bookAppointment.php">Book Appointment</a>
				<button onclick="document.location='Newlogin.html'" class="button" type="button">Login</button>
				<button onclick="document.location='Signup.html'" class="button" type="button">Sign up</button>
			</nav>
			
		</header>


	<!-- ------------ Introduction section ------------ -->
		<div class="section1">
			
			
		<!-- -- Introduction heading--  -->
			<h1>
				<span>When</span>   <span>you</span>         <span>donate</span>   <span>blood,</span>
				<span>you</span>    <span>are</span>         <span>more</span>     <span>than</span>
				<span>just</span>   <span>a donor</span>     <span> you</span>     <span>are</span>    
				<span>the</span>    <span>lifeblood</span>   <span>of</span>       <span>the</span>    
				<span>KSA</span>
			</h1>
				
				
		<!-- -- Introduction Image--  -->
			<img class="img" src="Image/HomePage.png" alt="user" /> 
			
			
		</div>


	<!-- --------------- Donate section --------------- -->
		<div class="section1">
		
		
		<!-- ------ Start Donating ------ -->
			<div class="title">
			 
				To save lives: 

				<br><br>
				
				<!-- Donate Button, link to another page -->
				<button onclick="document.location='process.html'" class="button" type="button">Donate</button>
				
				<br><br>
				 
			</div>	

			<img class="img2" src="Image/home2.png" alt="user" /> 
			
		</div>

		<br /><br /><br /><br /><br /><br /><br />


	<!-- --------------- Footer section --------------- -->
		<footer class="footer-distributed">
		
			<div class="footer-left">
			
				<p class="footer-links">
				<a href="Index.php">Home</a>
				<a href="process.html">Donation Procees</a>
				<a href="RequirementQuiz.php">Requirement Quiz</a>
				<a href="bookAppointment.php">Book Appointment</a>
				</p>
				
			</div>
				
			<div class="footer-center">
				<h2>For more information:<a href="https://wateenapp.org/">Wateen</a></h2>
			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Group Members:</span>
						  Elaf Aloufi, Manar Altaiary, Raghad Alzahrani , Khlood Alamri<br>
						  Ealoufi0015@stu.kau.edu.sa, Maltaiary0001@stu.ka.edu.sa, Ralzahrani0689@stu.kau.edu.sa, kalamri0078@stu,kau,edu,sa
				</p>					

			</div>

		</footer>

<!-- ---------------------- Body End ---------------------- -->
	</body>
</html>