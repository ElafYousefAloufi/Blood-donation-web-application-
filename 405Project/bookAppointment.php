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

<!-- -------------------- Head section -------------------- -->
	<head>

		<!-- ---------- Title section ---------- -->
		<title>Book appointment</title>

		<!-- --StyleSheets Link -- -->
		<link href="Book.css" rel="stylesheet"/>
		<link href="pagestyle.css" rel="stylesheet"/>
	 
	</head>
	
<!-- -------------------- Body section -------------------- -->

	<body>
	
	<?php
		
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

			/*
			//Create Users Table
			$sql = "CREATE TABLE appointments (
						id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
						userId INT(6) UNSIGNED, CONSTRAINT fk_userId FOREIGN KEY (userId) REFERENCES users(id),
						location VARCHAR(30) NOT NULL,
						time VARCHAR(30) NOT NULL,
						date VARCHAR(30) NOT NULL
					)";
			
			if ($conn->query($sql) === TRUE) { echo "Table appointments created successfully"; } 
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
		
	 <!-- ---------------  Body section  ---------------  -->
	<div class="section1">
	<div class="title">
	<p>Find nearest center and<br> make an appointment</p>
	
	</div>
	<img class="img" src="Image/book.jpg" alt="user" /> 
	
	<div class="plane">
	 <p> Book Appointment NOW </p>
	 <form action="postAppointment.php" method="post">
	 
	 <div class="locationPlane">
     <img  style="width:50px; float:left; position:relative;top:20px;"src="Image/location.png" alt="user" /> 
     <h2 class="locationPlaneTitle">&nbsp; Location</h2>
    <select style="border-radius:20px; width:155px; height:30px; position:relative; left:9px; top:15px " name="Centers" id="centers">
		<option>Centers</option>
            <option value="kah">KAH center (2km)</option>
            <option value="imc">IMC center (9km)</option>
            <option value="Fakeeh">Fakeeh center (15km)</option>
            <option value="KFAFH">KFAFH center (30km)</option>
     </select>
	</div>
	
	 <div class="TimePlane">
     <img  style="width:40px; float:left; position:relative;top:35px; padding-left:10px;"src="Image/time.png" alt="user" /> 
	 <h2 class="TimePlaneTitle">&nbsp; Time</h2>
	  <select style="border-radius:20px; width:155px; height:30px; position:relative; left:30px; top:10px " name="time" id="time">
		<option>Hours</option>
            <option value="00:00">00:00</option>
            <option value="00:05">00:05</option>
            <option value="00:10">00:10</option>
            <option value="00:15">00:15</option>
            <option value="00:20">00:20</option>
            <option value="00:25">00:25</option>
            <option value="00:30">00:30</option>
            <option value="00:35">00:35</option>
            <option value="00:40">00:40</option>
            <option value="00:45">00:45</option>
            <option value="00:50">00:50</option>
            <option value="00:55">00:55</option>
            <option value="01:00">01:00</option>
            <option value="01:05">01:05</option>
            <option value="01:10">01:10</option>
            <option value="01:15">01:15</option>
            <option value="01:20">01:20</option>
            <option value="01:25">01:25</option>
            <option value="01:30">00:30</option>
            <option value="01:35">01:35</option>
            <option value="01:40">01:40</option>
            <option value="01:45">01:45</option>
            <option value="01:50">01:50</option>
            <option value="01:55">01:55</option>
            <option value="02:10">02:00</option>
            <option value="02:05">02:05</option>
            <option value="02:10">02:10</option>
            <option value="02:15">02:15</option>
            <option value="02:20">02:20</option>
            <option value="02:25">02:25</option>
            <option value="02:30">02:30</option>
            <option value="02:35">02:35</option>
            <option value="02:40">02:40</option>
            <option value="02:45">02:45</option>
            <option value="02:50">02:50</option>
            <option value="02:55">02:55</option>
            <option value="03:10">03:00</option>
            <option value="03:05">03:05</option>
            <option value="03:10">03:10</option>
            <option value="03:15">03:15</option>
            <option value="03:20">03:20</option>
            <option value="03:25">03:25</option>
            <option value="03:30">03:30</option>
            <option value="03:35">03:35</option>
            <option value="03:40">03:40</option>
            <option value="03:45">03:45</option>
            <option value="03:50">03:50</option>
            <option value="03:55">03:55</option>
            <option value="04:00">04:00</option>
            <option value="04:05">04:05</option>
            <option value="04:10">04:10</option>
            <option value="04:15">04:15</option>
            <option value="04:20">04:20</option>
            <option value="04:25">04:25</option>
            <option value="04:30">04:30</option>
            <option value="04:35">04:35</option>
            <option value="04:40">04:40</option>
            <option value="04:45">04:45</option>
            <option value="04:50">04:50</option>
            <option value="04:55">04:55</option>
            <option value="05:10">05:00</option>
            <option value="05:05">05:05</option>
            <option value="05:10">05:10</option>
            <option value="05:15">05:15</option>
            <option value="05:20">05:20</option>
            <option value="05:25">05:25</option>
            <option value="05:30">05:30</option>
            <option value="05:35">05:35</option>
            <option value="05:40">05:40</option>
            <option value="05:45">05:45</option>
            <option value="05:50">05:50</option>
            <option value="05:55">05:55</option>
            <option value="06:10">06:00</option>
            <option value="06:05">06:05</option>
            <option value="06:10">06:10</option>
            <option value="06:15">06:15</option>
            <option value="06:20">06:20</option>
            <option value="06:25">06:25</option>
            <option value="06:30">06:30</option>
            <option value="06:35">06:35</option>
            <option value="06:40">06:40</option>
            <option value="06:45">06:45</option>
            <option value="06:50">06:50</option>
            <option value="06:55">06:55</option>
            <option value="07:10">07:00</option>
            <option value="07:05">07:05</option>
            <option value="07:10">07:10</option>
            <option value="07:15">07:15</option>
            <option value="07:20">07:20</option>
            <option value="07:25">07:25</option>
            <option value="07:30">07:30</option>
            <option value="07:35">07:35</option>
            <option value="07:40">07:40</option>
            <option value="07:45">07:45</option>
            <option value="07:50">07:50</option>
            <option value="07:55">07:55</option>
            <option value="08:10">08:00</option>
            <option value="08:05">08:05</option>
            <option value="08:10">08:10</option>
            <option value="08:15">08:15</option>
            <option value="08:20">08:20</option>
            <option value="08:25">08:25</option>
            <option value="08:30">08:30</option>
            <option value="08:35">08:35</option>
            <option value="08:40">08:40</option>
            <option value="08:45">08:45</option>
            <option value="08:50">08:50</option>
            <option value="08:55">08:55</option>
            <option value="09:10">09:00</option>
            <option value="09:05">09:05</option>
            <option value="09:10">09:10</option>
            <option value="09:15">09:15</option>
            <option value="09:20">09:20</option>
            <option value="09:25">09:25</option>
            <option value="09:30">09:30</option>
            <option value="09:35">09:35</option>
            <option value="09:40">09:40</option>
            <option value="09:45">09:45</option>
            <option value="09:50">09:50</option>
            <option value="09:55">09:55</option>
            <option value="10:00">10:00</option>
            <option value="10:05">10:05</option>
            <option value="10:10">10:10</option>
            <option value="10:15">10:15</option>
            <option value="10:20">10:20</option>
            <option value="10:25">10:25</option>
            <option value="10:30">10:30</option>
            <option value="10:35">10:35</option>
            <option value="10:40">10:40</option>
            <option value="10:45">10:45</option>
            <option value="10:50">10:50</option>
            <option value="10:55">10:55</option>
            <option value="11:00">11:00</option>
            <option value="11:05">11:05</option>
            <option value="11:10">11:10</option>
            <option value="11:15">11:15</option>
            <option value="11:20">11:20</option>
            <option value="11:25">11:25</option>
            <option value="11:30">11:30</option>
            <option value="11:35">11:35</option>
            <option value="11:40">11:40</option>
            <option value="11:45">11:45</option>
            <option value="11:50">11:50</option>
            <option value="11:55">11:55</option>
            <option value="12:00">12:00</option>
            <option value="12:05">12:05</option>
            <option value="12:10">12:10</option>
            <option value="12:15">12:15</option>
            <option value="12:20">12:20</option>
            <option value="12:25">12:25</option>
            <option value="12:30">12:30</option>
            <option value="12:35">12:35</option>
            <option value="12:40">12:40</option>
            <option value="12:45">12:45</option>
            <option value="12:50">12:50</option>
            <option value="12:55">12:55</option>
            <option value="13:00">13:00</option>
            <option value="13:05">13:05</option>
            <option value="13:10">13:10</option>
            <option value="13:15">13:15</option>
            <option value="13:20">13:20</option>
            <option value="13:25">13:25</option>
            <option value="13:30">13:30</option>
            <option value="13:35">13:35</option>
            <option value="13:40">13:40</option>
            <option value="13:45">13:45</option>
            <option value="13:50">13:50</option>
            <option value="13:55">13:55</option>
            <option value="14:00">14:00</option>
            <option value="14:05">14:05</option>
            <option value="14:10">14:10</option>
            <option value="14:15">14:15</option>
            <option value="14:20">14:20</option>
            <option value="14:25">14:25</option>
            <option value="14:30">14:30</option>
            <option value="14:35">14:35</option>
            <option value="14:40">14:40</option>
            <option value="14:45">14:45</option>
            <option value="14:50">14:50</option>
            <option value="14:55">14:55</option>
            <option value="15:00">15:00</option>
            <option value="15:05">15:05</option>
            <option value="15:10">15:10</option>
            <option value="15:15">15:15</option>
            <option value="15:20">15:20</option>
            <option value="15:25">15:25</option>
            <option value="15:30">15:30</option>
            <option value="15:35">15:35</option>
            <option value="15:40">15:40</option>
            <option value="15:45">15:45</option>
            <option value="15:50">15:50</option>
            <option value="15:55">15:55</option>
            <option value="16:00">16:00</option>
            <option value="16:05">16:05</option>
            <option value="16:10">16:10</option>
            <option value="16:15">16:15</option>
            <option value="16:20">16:20</option>
            <option value="16:25">16:25</option>
            <option value="16:30">16:30</option>
            <option value="16:35">16:35</option>
            <option value="16:40">16:40</option>
            <option value="16:45">16:45</option>
            <option value="16:50">16:50</option>
            <option value="16:55">16:55</option>
            <option value="17:00">17:00</option>
            <option value="17:05">17:05</option>
            <option value="17:10">17:10</option>
            <option value="17:15">17:15</option>
            <option value="17:20">17:20</option>
            <option value="17:25">17:25</option>
            <option value="17:30">17:30</option>
            <option value="17:35">17:35</option>
            <option value="17:40">17:40</option>
            <option value="17:45">17:45</option>
            <option value="17:50">17:50</option>
            <option value="17:55">17:55</option>
            <option value="18:00">18:00</option>
            <option value="18:05">18:05</option>
            <option value="18:10">18:10</option>
            <option value="18:15">18:15</option>
            <option value="18:20">18:20</option>
            <option value="18:25">18:25</option>
            <option value="18:30">18:30</option>
            <option value="18:35">18:35</option>
            <option value="18:40">18:40</option>
            <option value="18:45">18:45</option>
            <option value="18:50">18:50</option>
            <option value="18:55">18:55</option>
            <option value="19:00">19:00</option>
            <option value="19:05">19:05</option>
            <option value="19:10">19:10</option>
            <option value="19:15">19:15</option>
            <option value="19:20">19:20</option>
            <option value="19:25">19:25</option>
            <option value="19:30">19:30</option>
            <option value="19:35">19:35</option>
            <option value="19:40">19:40</option>
            <option value="19:45">19:45</option>
            <option value="19:50">19:50</option>
            <option value="19:55">19:55</option>
            <option value="20:00">20:00</option>
            <option value="20:05">20:05</option>
            <option value="20:10">20:10</option>
            <option value="20:15">20:15</option>
            <option value="20:20">20:20</option>
            <option value="20:25">20:25</option>
            <option value="20:30">20:30</option>
            <option value="20:35">20:35</option>
            <option value="20:40">20:40</option>
            <option value="20:45">20:45</option>
            <option value="20:50">20:50</option>
            <option value="20:55">20:55</option>
            <option value="21:00">21:00</option>
            <option value="21:05">21:05</option>
            <option value="21:10">21:10</option>
            <option value="21:15">21:15</option>
            <option value="21:20">21:20</option>
            <option value="21:25">21:25</option>
            <option value="21:30">21:30</option>
            <option value="21:35">21:35</option>
            <option value="21:40">21:40</option>
            <option value="21:45">21:45</option>
            <option value="21:50">21:50</option>
            <option value="21:55">21:55</option>
            <option value="22:00">22:00</option>
            <option value="22:05">22:05</option>
            <option value="22:10">22:10</option>
            <option value="22:15">22:15</option>
            <option value="22:20">22:20</option>
            <option value="22:25">22:25</option>
            <option value="22:30">22:30</option>
            <option value="22:35">22:35</option>
            <option value="22:40">22:40</option>
            <option value="22:45">22:45</option>
            <option value="22:50">22:50</option>
            <option value="22:55">22:55</option>
            <option value="23:00">23:00</option>
            <option value="23:05">23:05</option>
            <option value="23:10">23:10</option>
            <option value="23:15">23:15</option>
            <option value="23:20">23:20</option>
            <option value="23:25">23:25</option>
            <option value="23:30">23:30</option>
            <option value="23:35">23:35</option>
            <option value="23:40">23:40</option>
            <option value="23:45">23:45</option>
            <option value="23:50">23:50</option>
            <option value="23:55">23:55</option>
			</select>
	
	</div>
	
	 <div class="DatePlane">
     <img  style="width:40px; float:left; position:relative;top:35px; padding-left:10px;"src="Image/date.png" alt="user" /> 
	 <h2 class="DatePlaneTitle">&nbsp; Date</h2>
	
		 
		 <div class="row justify-content-md-center">
 <div class="form-group">
  <div class="input-group mb-4 constrained">
 <input style="border-radius:20px; width:140px; height:30px; position:relative; left:70px; top:10px "  type="date" class="form-control ppDate" id="from-date" aria-describedby="date-design-prepend">
   </div>
         </div>
     	</div>
	</div>


	
	


	</div>
 <div class="button">
	<input type="submit" name="Submit" id="Submit" value="Submit">
	</div>
	</div>	
	
		</form>
	<br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br />
      <footer class="footer-distributed">

			<div class="footer-left">
	<p class="footer-links">
				    <a href="Index.html">Home</a>
        <a href="process.html">Donation Procees</a>
        <a href="bookAppointment.html">Requirement Quiz</a>
        <a href="bookAppointment.html">Book Appointment</a>
				</p>

			
			</div>
<div class="footer-center">

				  <h2>For more information:<a href="https://wateenapp.org/">Wateen</a></h2>
			</div>
			

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Group Members:</span>
				 Elaf Aloufi, Manar Altaiary, 
				 Raghad Alzahrani , Khlood Alamri
                 Ealoufi0015@stu.kau.edu.sa, Maltaiary0001@stu.ka.edu.sa,
                 Ralzahrani0689@stu.kau.edu.sa,
                kalamri0078@stu,kau,edu,sa
			
				</p>

				
					
			

			</div>

		</footer>
</body>

</html>