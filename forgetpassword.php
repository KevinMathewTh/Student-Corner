<?php
	session_start();
error_reporting(0);
	require 'PHPMailer/PHPMailerAutoload.php';

include("dbcon.php");

$emailregisteredp=$_POST["emailregistered"];
$resendotpbtnp=$_POST["resendotpbtn"];
$verifybtnp=$_POST["verifybtn"];
$verifyemailbtnp=$_POST["verifyemailbtn"];
$otp=$_POST["otp"];
$otpvalue=rand(10000,90000);
$bool1=false;
$perm=$otpvalue;
$emailcatcher;


if(isset($verifyemailbtnp)==true || isset($resendotpbtnp)==true){

	$query4="select email from details where email='$emailregisteredp';";

	$final4=mysqli_query($conn,$query4);

	while ($temp5=mysqli_fetch_array($final4) ) {
		if ($emailregisteredp==$temp5["email"]   ) {
		

			$_SESSION["email"]=$emailregisteredp;

			echo "<style> .insidetxt{display:none;}</style>";
			echo "<h1 style='position: relative;
	top: 33vw;
	font-size: 120%;
	text-align: center;
	left: 17%;
	width: 50%;
	font-family: karla;z-index:2;'>"."Your OTP has Sent"."</h1>";

			

			$emailMsg="Your OTP for Student Corner is :".$perm;

			$emailto=$emailregisteredp;

		}
	}


   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; 
   $mail ->IsHTML(true);
   $mail ->Username = "irbaaz308@gmail.com";
   $mail ->Password = "irb@@z308!I";
   $mail ->SetFrom("irbaaz308@gmail.com");
   $mail ->Body = $emailMsg;
   $mail ->AddAddress($emailto);

   if(!$mail->Send())
   {
       echo "cant sent mail";
   }
   else
   {
       echo "Check Your Inbox";
   }

   $query5="UPDATE details SET otp='$perm' where email='$emailregisteredp'; ";

   $finale=mysqli_query($conn,$query5);

   if($finale==true){
   	echo "otp inserted!!";
   }
}

if (isset($verifybtnp)==true) {
	
	$query6="SELECT otp FROM details WHERE email='$emailregisteredp';";

	$finale2=mysqli_query($conn,$query6);

	while ($temp6=mysqli_fetch_array($finale2)) {
		if($otp==$temp6["otp"]){
			echo "welcome bitch";
			$query7="UPDATE details SET otp=0 where email='$emailregisteredp' ";

			$finale3=mysqli_query($conn,$query7);

			if($finale3){
				echo "deleted from database";

				header("location:reenterpassword.php");
			}
		}
	}

	
}




?>




<!DOCTYPE html>
<html>
<head>
 	<link rel="stylesheet" type="text/css" href="login.css">
 	<title>forgetpassword</title>
</head>
<body>
	<div class="bg">
	<div class="header">Welcome To Student Corner</div>

	<form  method="post" class="ForgetPasswordcard" id="fpswdcard">
		<p class="ForgetPasswordtxt">Forget Password</p>
		<input type="email" name="emailregistered" id="emailidss" class="emailreg" placeholder="Enter your registered emailid" />
		<input type="submit" name="verifyemailbtn" class="verifyemailbtns">
		<h4 class="insidetxt"  id="insidetxtid">Your OTP</h4>
		<input type="number" name="otp" placeholder="Enter OTP" class="otpinputs" />
		<button class="fpbtn" name="resendotpbtn" onclick="resendotp()">Resend OTP</button>
		<button class="fpbtn" name="verifybtn">Verify</button>
	</form>
</div>

	
<script type="text/javascript" src="loginsignup.js"></script>
</body>
</html>