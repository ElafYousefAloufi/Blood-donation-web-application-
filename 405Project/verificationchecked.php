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
			
			
			//Information from Sign Up Form
			$code = $_POST['code'];
			
			$sql="select * from users where code='$code';";
			
	      
           $code_res = mysqli_query($conn, $sql);
           if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE users SET code = $code, statues = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($conn, $update_otp);
            if($update_res){
              
				header("Location: Newlogin.html");  
			     exit();
            }else{
                echo "Failed while updating code!";
            }
        }else{
            echo "You've entered incorrect code!";
        }
    



	?>