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
			
			if (isset($_POST['reset'])) {
			//Information from reset password Form
			$email = $_POST['email'];
			$password2 = $_POST['password'];
			$conform = $_POST['conform'];
			
			if($password2 !== $conform){
				echo "<script>;
						    alert('Confirm password not matched!');
						    
					      </script>";
				}
		
			
			
			$sql="select * from users where email='$email';";
			
	      
           $email_res = mysqli_query($conn, $sql);
           if(mysqli_num_rows($email_res) > 0){
            $fetch_data = mysqli_fetch_assoc($email_res);
            $email = $fetch_data['email'];
		    $update_pass = "UPDATE users SET password = '$password2' WHERE email = '$email';";
            $update_res = mysqli_query($conn, $update_pass);
            if($update_res){
              
                header('location: Newlogin.html');
                exit();
            }else{
                echo "Failed reset password !";
            }
        }else{
            echo "You've entered incorrect code!";
        }
    
			}


	?>