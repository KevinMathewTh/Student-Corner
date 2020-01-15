<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="login.css">
	 <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />

</head>
<body>
	<div class="mainpage" id="mainpageid">
	
	<div class="frontpage">
		<p class="textoffrontpage">LOGIN OR SIGNUP</p>
	</div>

	<div class="header">Welcome To Student Corner</div>
	
	<div class="headoftexts">Read Me!!</div>
	
	<div class="texts">
		
		Facing any difficulties in making any project,or need to clear your basics. No worries you're at the prefect place to get these things done!!!
		<br>
		<br>
		<p>Here you'll get sample Projects with "Minute detailings step by step with all the basics that you need."</p>
	</div>

	<form method="post" class="login" id="loginid">
		<p class="loginhead">LOGIN</p>
		<input type="text" name="email" placeholder="Email" class="emailinputs" />
		<input type="password" name="password" placeholder="Password" class="passwordinputs" />
		<input type="submit" name="submitbtn" value="Login" class="loginbtn" />
		<a href="forgetpassword.php" class="fpswd" onclick="showfpcard()">ForgetPassword?</a>
		<p class="signuptext">Don't have an account?</p>
		</form>
		<div><button class="signupbtn2" onclick="showsignup()">Sign Up</button></div>


	<form method="post" class="signup" id="signupid">
		<p class="loginhead">SIGN UP</p>
		<input type="text" name="sname" placeholder="Name" class="emailinputs" />
		<input type="text" name="semail" placeholder="Email" class="emailinputs" />
		<input type="password" name="spassword" placeholder="Password" class="passwordinputs" />
		<input type="password" name="scpassword" placeholder="Confirm Password" class="passwordinputs" />
		<input type="submit" name="submitbtn2" value="Register" class="loginbtn" />

	</form>
		<div><div><button class="signupbtn3" id="signupbtnid" onclick="hidesignup()">Go Login</button></div>
</div>

	<div id="firebaseui-auth-container" class="apiblock" style="position:relative;top: 20vw;left:2vw;"></div>
	<div id="loader">Loading...</div>
  



</div>
 <script type="text/javascript" src="loginsignup.js"></script>
 

  <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <!-- <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-analytics.js"></script> -->

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-auth.js"></script>
  <!-- <script src="https://www.gstatic.com/firebasejs/7.5.2/firebase-firestore.js"></script> -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAzqsgs0rtR6D4ZXJJR-vyNCTkJMOcZOk4",
    authDomain: "company-fxxvpg.firebaseapp.com",
    databaseURL: "https://company-fxxvpg.firebaseio.com",
    projectId: "company-fxxvpg",
    storageBucket: "company-fxxvpg.appspot.com",
    messagingSenderId: "809088579298",
    appId: "1:809088579298:web:b3f19aaef9576e54b7d0bb"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

	var ui = new firebaseui.auth.AuthUI(firebase.auth());


	var uiConfig = {
  callbacks: {
    signInSuccessWithAuthResult: function(authResult, redirectUrl) {
      // User successfully signed in.
      // Return type determines whether we continue the redirect automatically
      // or whether we leave that to developer to handle.
      return true;
    },
    uiShown: function() {
      // The widget is rendered.
      // Hide the loader.
      document.getElementById('loader').style.display = 'none';
    }
  },
  // Will use popup for IDP Providers sign-in flow instead of the default, redirect.
  signInFlow: 'popup',
  signInSuccessUrl: 'index.php',
  signInOptions: [
    // Leave the lines as is for the providers you want to offer your users.
     firebase.auth.GoogleAuthProvider.PROVIDER_ID,
     //firebase.auth.FacebookAuthProvider.PROVIDER_ID,
     //firebase.auth.TwitterAuthProvider.PROVIDER_ID,
     //firebase.auth.GithubAuthProvider.PROVIDER_ID,
     firebase.auth.EmailAuthProvider.PROVIDER_ID,
     //firebase.auth.PhoneAuthProvider.PROVIDER_ID
  ],
  // Terms of service url.
  tosUrl: '<your-tos-url>',
  // Privacy policy url.
  privacyPolicyUrl: '<your-privacy-policy-url>'
};

ui.start('#firebaseui-auth-container', uiConfig);
</script>

</body>
</html>
<?php

include("dbcon.php");
error_reporting(0);

$loginemail=$_POST["email"];
$loginpassword=$_POST["password"];
$loginbtn=$_POST["submitbtn"];

$signupname=$_POST["sname"];
$signupemail=$_POST["semail"];
$signuppassword=$_POST["spassword"];
$signupconfirmpassword=$_POST["scpassword"];
$signupregisterbtn=$_POST["submitbtn2"];

$condu=false;
$cond1=false;
$cond2=false;


if(isset($signupregisterbtn)==true){
	if($signupname=='' || $signupemail=='' || $signuppassword=='' || $signupconfirmpassword==''){
		echo '<h1 style="color:black;position:relative;top:-165vw;z-index:2;text-align:center;left:3%;font-size:200%;font-family:karla;">'."Please Enter valid details!!".'</h1>';
			end;
	}
	else if($signuppassword==$signupconfirmpassword && ($signupname!='' || $signupemail!='' || $signuppassword!='' || $signupconfirmpassword!='')){
		
		$query12="SELECT email FROM details;";

		$finale10=mysqli_query($conn,$query12);

		while ($temp4=mysqli_fetch_array($finale10)) {
			if ($signupemail!=$temp4["email"]) {
				$condu=true;
			}
		}

		if ($condu==true) {
		$query1="insert into details values('$signupname','$signupemail','$signuppassword','$signupconfirmpassword',0);";
		$final1=mysqli_query($conn,$query1);
		}
		if ($final1==true) {
			echo '<h1 style="color:black;position:absolute;top:65%;left:40%;font-size:200%;font-family:karla;">'."Successfully Registered!!".'</h1>';
		}
		else{
			echo '<h1 style="color:black;position:absolute;top:65%;left:40%;font-size:200%;font-family:karla;">'."Please Enter The Valid Details".'</h1>';
		}
	}
}

if(isset($loginbtn)==true){

	$query2="select email  from details where email='$loginemail';";

	$query3="select password from details where password='$loginpassword';";

	$final2=mysqli_query($conn,$query2);

	$final3=mysqli_query($conn,$query3);

	while ($temp1=mysqli_fetch_array($final2)) {
		if ($loginemail==$temp1["email"]) {
			$cond1=true;
		}
		
	}

	while ($temp2=mysqli_fetch_array($final3)) {
		if ($loginpassword==$temp2["password"]) {
			$cond2=true;
		}
	}
		
	if($cond1==true && $cond2==true){
		echo '<h1 style="color:black;position:absolute;top:65%;left:40%;font-size:200%;font-family:karla;">'."welcome".'</h1>';
	}
	else{
		echo '<h1 style="color:black;position:absolute;top:65%;left:40%;font-size:200%;font-family:karla;">'."Please Enter Valid Details".'</h1>';

	}
}
?>