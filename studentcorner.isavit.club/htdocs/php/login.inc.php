<?php 

session_start();

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


	//error handlers
	if (empty($uid) || empty($pwd)) {
		header("Location: ../php/login.php?login=empty");
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_email='$uid';";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck < 1) {
			header("Location: ../php/login.php?login=notmatch");
			exit();
		}else{
			$row = mysqli_fetch_assoc($result);
				//de-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if($hashedPwdCheck == false){
					
					header("Location: ../php/login.php?pwderror");
					exit();

				} elseif ($hashedPwdCheck == true) {
				//log in the user here
				
				$_SESSION['first_name'] = $row['user_first'];
				$_SESSION['user'] = "yes";
				$_SESSION['login'] = "yes";
				$_SESSION['u_email'] = $row['user_email'];
				
				header("Location: ../php/launch.php");

			}
		}
	}
}else{
	header("Location: ../php/login.php?login=error");
	exit();
}
 
?>
