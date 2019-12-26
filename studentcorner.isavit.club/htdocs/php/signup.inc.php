<?php 

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';
	include_once 'PHPMailer-5.2-stable/index.php';

	$first=mysqli_real_escape_string($conn,$_POST['first']);
	
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);

	//error handlers
	//check for empty fields
	if(empty($first)||  empty($email)||  empty($pwd)){
		header("Location: ../php/signup.php?signup=empty");
		exit();
	}else{
		//check if input char are valid
		if (!preg_match("/^[a-zA-Z]*$/",$first)) {
			header("Location: ../php/signup.php?signup=invalid");
			echo "Enter a valid Name";
			exit();
		}else{
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../php/signup.php?signup=email");
				echo "Enter a Valid Email ID";
				exit();
			}else{
				$sql = "SELECT * FROM users WHERE user_email='$email'";
				$result = mysqli_query($conn, $sql);
				$resultcheck = mysqli_num_rows($result);

				if($resultcheck > 0){
					header("Location: ../php/signup.php?signup=usernametaken");
					//echo "You've already Registered, Please Login";
 					exit();
				}else{
					//hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//insert the user into the database
					$sql = "INSERT INTO users (user_first, user_email, user_pwd) VALUES ('$first', '$email', '$hashedPwd');";
					mysqli_query($conn, $sql);
					
					$mail->Subject = 'Welcome to Student Corner.';
                    $mail->Body    = 'Welcome to Student Corner';
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    $mail->addAddress($email);
                    $mail ->send();
					
					header("Location: ../php/signup.php?success");
					exit();
				}
			}
		}
	}
}else{
	header("Location: ../php/signup.php?signup=no");
	exit();
}

 ?>
