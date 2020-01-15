function showsignup(){
	document.getElementById("signupid").style.display="block";
	document.getElementById("signupid").style.animationName="movesignup";
	setTimeout(function(){	document.getElementById("signupbtnid").style.display="block";
	},2000);

}
function hidesignup(){
	
	document.getElementById("signupid").style.animationName="hidesignups";
	setTimeout(function(){	document.getElementById("signupid").style.display="none";
},1500);
	document.getElementById("signupbtnid").style.display="none";
}
function resendotp(){
	alert("OTP resended!!");
}