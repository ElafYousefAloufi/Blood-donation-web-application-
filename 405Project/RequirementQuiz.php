<?php    

	//Start Session, to save User Information
	session_start();
	
	if(!(isset($_SESSION['ID']))){
		echo "<script>
				alert('Login First');
				window.location.href='Newlogin.html';
			  </script>";	
	}
	$_SESSION["Valid"] = "0";
?>

<!DOCTYPE html>
<html>

<!-- -------------------- Head section -------------------- -->
	<head>

		<!-- --- Title section --- -->
		<title>Requirement Quiz</title>


		<!-- --StyleSheets Link -- -->
		<link href="RequrStyle.css" rel="stylesheet"/>
		<link href="pagestyle.css" rel="stylesheet"/>
		
		
		<!-- -- javaScript Link -- -->
		<script src = "FormProsses.js"></script>
 
	</head>
	
<!-- -------------------- Body section -------------------- -->
	<body>
	
		
	
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
		<div class="section1"> <div class="title"> 
			<p>You must take the Quiz <br> below to see if you are <br> eligible  to donate or not:</p> 
		</div> </div>
		
		<img class="img" src="Image/Quiz.png" alt="user" />
		
		<br><br><br>
    
	
	<!-- ----------------- Form section --------------- -->
		<div class="box">
     
			<table class="tableform"> <!--Form table-->
			 
			
			<!-- ------------ Form Detail ------------ -->
				<form id="RequirmentForm" action="ReqQuizResult.php" method="post" onsubmit="return FormValidation()">
				
				
				<!-- ---------- Caution raw ---------- -->
					<tr id="cautionRow" style="visibility:collapse; height: 40px; background-color:#FF6F6F;">
						<div id="caution" style="text-align: center; font-size: 25px;"></div>
					</tr>
					
				<!-- ------------ Age raw ------------ -->
					<tr>
						<td>
							<div>
								<label class="tablelabel" for="Age" style="width:50%"><b>Age:</b></label>
								<input style="font-size: 30px; margin:10px 90px;" type="text" onkeydown="color('red')" onkeyup="color('black')" id="Age" name="Age" required />
							</div>
						</td>
					</tr>
					
				<!-- ----------- Weight raw ---------- -->
					<tr>
					   <td>
							<div>
								<label class="tablelabel" for="Weight"><b>Weight:</b></label>
								<input style="font-size: 30px; color: red;margin:10px 90px;" onchange="fontcolor()" type="text" id="Weight" name="Weight" required />
							</div>
						</td>
					</tr>

				<!-- ------- Last Donation raw ------- -->
					<tr>
						<td>
							<div>
								<label class="tablelabel" for="LastDon"><b>Last Donation:</b></label> 
								
								<select class="selectt" style="font-size: 30px;margin:10px 90px;" name="LastDonation" id="LastDonation"> 
									<option value="1year">1 Year</option>			
									<option value="9Mon">9 Months</option>			
									<option value="6Mon">6 Months</option>    
									<option value="3Mon">3 Months</option>    
									<option value="None" selected="selected">None</option>    
								</select> 
							</div>
						</td>
					</tr>
					
				<!-- -------- Antibiotics raw -------- -->
					<tr>
					   <td>
							<div>
								<label class="tablelabel" for="TakeAnti" style="margin-bottom:10px;"><b>Taking antibiotics?</b></label>
								<input type="radio" id="Yes" name="answer" value="Yes"><label style="font-size: 35px;"for="Yes">Yes</label>
								<input type="radio" id="No" name="answer" value="No"><label style="font-size: 35px;" for="No">No</label>
							</div>
						</td>
					</tr>
					

				<!-- ------ Submet or Reset raw ------ -->
					<tr>
						<td>
							<div>
								<p id="helpText" style="margin-left: 30px; color: gray;"></p>
								
								<td style="margin-right: 10px;">
									<input class="btn" id = "Reset" type = "reset" onclick="hideRow()">
									<input class="btn" id="Submit" type="submit"> 
								</td>
							</div>
						</td> 
					</tr>
					
			-
			<!-- ------------- Form end ------------- -->
				</form>
			</table>
			
		</div>
		
		
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
			
			<div class="footer-center"><h2>For more information:<a href="https://wateenapp.org/">Wateen</a></h2></div>
			

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Group Members:</span>
						  Elaf Aloufi, Manar Altaiary, Raghad Alzahrani , Khlood Alamri<br>
						  Ealoufi0015@stu.kau.edu.sa, Maltaiary0001@stu.ka.edu.sa, Ralzahrani0689@stu.kau.edu.sa,
						  kalamri0078@stu,kau,edu,sa
				</p>			

			</div>

		</footer>
      
	</body>
	
	<script>
	
		function FormValidation(){
		  
			var caution = document.getElementById("caution");
			var cautionRow = document.getElementById("cautionRow");
			var age = document.getElementById("Age");
			var weight = document.getElementById("Weight");
			var lastDonation = document.getElementById("LastDonation");
			var date = lastDonation.options[lastDonation.selectedIndex]
			var antibiotics = document.getElementById("Yes");
			
			//Older that 18
			if(age.value < 18){
				cautionRow.style.visibility="visible";
				caution.style.color="red";
				caution.innerHTML ="Sorry you are not eligible to donate, your age is under 18";
				age.focus();
				return false;
			} 
			
			//Younger Than 50
			else if(weight.value < 50){
				cautionRow.style.visibility="visible";
				caution.style.color="red";
				cautionRow.style.background="#FF6F6F";
				caution.innerHTML ="Sorry you are not eligible to donate, your weight is under 50";		
				weight.focus();
				return false;
			} 
			
			//Last Donation date to more that 3 month
			else if(date.text == "3 Months"){
				cautionRow.style.visibility="visible";
				caution.style.color="red";
				caution.innerHTML ="Sorry you are not eligible to donate, your last donation was 3 months ago";	
				lastDonation.focus();
				return false;
			} 
			
			//No antibiotics taken
			else if(antibiotics.checked){
				cautionRow.style.visibility="visible";
				caution.style.color="red";
				caution.innerHTML ="Sorry you are not eligible to donate, your are taking antibiotics";	
				antibiotics.focus();
				return false;
			}
			
			//Pass Everything
			else{ 
				setTimeout(function() {alert("That's great, you are eligible to donate!");}, 1000);
				return true;
				
			}  
			
		}
	  
		function hideRow(){
			var caution = document.getElementById("caution");
			var cautionRow = document.getElementById("cautionRow");
			setTimeout(function() {cautionRow.style.visibility="collapse";
			caution.style.display="none";}, 1000)
		}
		
	</script>
	
</html>