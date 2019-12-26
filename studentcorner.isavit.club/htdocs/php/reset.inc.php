<?php 

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';
	include_once  'PHPMailer-5.2-stable/index.php';

	$email = mysqli_real_escape_string($conn, $_POST['reset_email']);
	
	$sql = "SELECT * FROM users WHERE user_email='$email';";
	$result = mysqli_query($conn, $sql);
	$resultcheck = mysqli_num_rows($result);
	$p = mysqli_fetch_assoc($result);
	$pwd = $p['user_first'];
	
	if ($resultcheck < 1){
	    header("location: login.php?noexist");
	    exit();
	} else{
	    $mail->Subject = 'Forgot Password: Student Corner.';
	    $a = "Your original password is:";
	    
        $mail->Body    = "$a $pwd";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->addAddress($email);
                    
        $mail ->send();
                    
        header("location: login.php?reset");
        exit();
	}
} else {
    header("location: login.php?error");
}

?>