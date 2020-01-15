<!DOCTYPE html>
<html>
<head>
	<title>Re-Enter Password</title>
 	<link rel="stylesheet" type="text/css" href="login.css">
</head>


<body>
		<div class="header">Welcome To Student Corner</div>


	<form method="post"  class="reenterpasword" id="reenterpaswordid">
		<p class="loginhead">Re-Enter Password</p>
		<input type="password" name="newpassword" placeholder="New Password" class="emailinputs" />
		<input type="password" name="cnewpassword" placeholder="Confirm Password" class="passwordinputs" />
		<input type="submit" name="submitbtn" value="Confirm" class="loginbtn" />
	</form>
</body>
</html>

<?php

error_reporting(0);
session_start();
include("dbcon.php");

$newpasswordp=$_POST["newpassword"];
$cnewpasswordp=$_POST["cnewpassword"];
$submitbtnp=$_POST["submitbtn"];


if (isset($submitbtnp)==true) {
	if($newpasswordp==$cnewpasswordp){ 
	$sesstemp=$_SESSION["email"];

	$query10="UPDATE details SET password='$newpasswordp' , confirmpassword='$cnewpasswordp' WHERE email='$sesstemp';";

	$finale5=mysqli_query($conn,$query10);

	if ($finale5==true) {
		?> <script type="text/javascript">alert("done bro");</script>    <?php

		header("location:login.php");
	}
}



}

?>