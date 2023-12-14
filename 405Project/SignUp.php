<!DOCTYPE html>
<html>

	<body>
		
		
	<!-- ---------- Sign up New User ---------- -->
	
		<?php
					
			     require 'includes/PHPMailer.php';
	             require 'includes/SMTP.php';
	             require 'includes/Exception.php';
              
	             use PHPMailer\PHPMailer\PHPMailer;
	             use PHPMailer\PHPMailer\SMTP;
	             use PHPMailer\PHPMailer\Exception;
					
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
			
			
			//Information from Sign Up Form
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$BloodType = $_POST['BloodType'];
			
			$sql="select * from users where email='$email';";

			$res=mysqli_query($conn,$sql);

			if (mysqli_num_rows($res) > 0) {
			
				$row = mysqli_fetch_assoc($res);
				
				if($email==isset($row['email'])){
					echo "<script>;
						    alert('email already exists');
						    window.location.href='Newlogin.html';
					      </script>";
				}
			}
			
			else {
			     $code = rand(999999, 111111);
                 $status = "notverified";
				
				$sql = "INSERT INTO users (username,password, valid, email, phone, BloodType,code,statues) VALUES('$username', '$password', '0', '$email', '$phone', '$BloodType','$code','$status');";
				$data_check = mysqli_query($conn, $sql);
                if($data_check){
			    
	            $mail = new PHPMailer();
                $mail->isSMTP();
               	$mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "tls";
                $mail->Port = "587";
          
	           $mail->Username = "cpit405test@gmail.com";
               $mail->Password = "bymcqvtdvvwdhbkw";
               $mail->Subject = "Email Verification Code";
               $mail->setFrom('cpit405test@gmail.com');
               $mail->Body = "Your verification code is $code";
               $mail->addAddress($email);

	if ( $mail->send() ) {
		    //    $_SESSION['email'] = $email;
            //    $_SESSION['password'] = $password;
               header('location: Verification.html');
               exit(); 
	}else{
		echo "<script>;
							alert('Failed while sending code!');
						
						  </script>";
	}

	$mail->smtpClose();

        }else{
		echo "<script>;
							alert('Failed while inserting data into database!');
						
						  </script>";
           
        }
			
			
			}	
			
			
			//Close Connection
			$conn->close();
						
		?>
	</body>
	
</html>
