<?php 

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';
	include_once  'PHPMailer-5.2-stable/index.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	    
	    $sql = "INSERT INTO subscribers (user_email) VALUES ('$email');";
	    mysqli_query($conn,$sql);
	
	    $mail->Subject = 'Subscriptiond: Student Corner.';
	    $a = "Your subscription is successful !";
	    
        $mail->Body    = "$a";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->addAddress($email);
                    
        $mail ->send();
                    
        header("location: ../index.html");
        exit();
	
} else {
    header("location: ../index.html?error");
}

?>