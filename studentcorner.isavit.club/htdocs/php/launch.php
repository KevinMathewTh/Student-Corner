<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        if(!isset($_SESSION['login'])){
            header("Location: ../php/login.php?failed");
            exit();
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>StudentCorner || ISA-VIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <link rel="icon" type="image/gif/png" href="../img/titlelogo.png">
   <script type="text/javascript" src="../js/myjavascript.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
  <link rel='stylesheet prefetch' href='http://www.andrewwierzba.com/signature/css/madeBy.css'>
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0tNlWDeUDUn8peU0nFEKUazI8KfkjSIQ&callback=initMap"
    async defer></script>
    
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/footer-distributed-with-contact-form.css">
  

    
  <style type="text/css">
    *
    {
        font-family: 'Lato', sans-serif;
        font-family: 'Roboto', sans-serif;
    }
        
        .contact-form:after 
	content:"";
	display:block;
	clear:both;
}

.contact-form .input {
	margin-bottom:20px;
}

.contact-form textarea.input {
	height:200px;
}

.contact-details li  {
	margin-bottom:20px;
}

.contact-details li i {
	color: #FF6700;
	margin-right: 15px;
	border: 1px solid #EBEBEB;
	border-radius: 50%;
	width: 40px;
	height: 40px;
	line-height: 40px;
	text-align: center;
}

/* -- Contact Map -- */
#contact-map {
	height:260px;
	border-radius:4px;
}

input[type="text"], input[type="email"], input[type="password"], input[type="number"], input[type="date"], input[type="url"], input[type="tel"], textarea {
    height: 40px;
    width: 100%;
    border: 1px solid #EBEBEB;
	border-radius:4px;
	background: transparent;
    padding-left: 15px;
	padding-right: 15px;
	-webkit-transition:0.2s border-color;
	transition:0.2s border-color;
	margin:10px 0px ;
}
input[type="file"]
{
    height: 40px;
	border-radius:4px;
	background: transparent;
    padding-left: 15px;
	padding-right: 15px;
	-webkit-transition:0.2s border-color;
	transition:0.2s border-color;
}


textarea {
    padding: 10px 15px;
}

input[type="text"]:focus, input[type="file"]:focus, input[type="password"]:focus, input[type="number"]:focus, input[type="date"]:focus, input[type="url"]:focus, input[type="tel"]:focus, textarea:focus {
	border-color:#FF6700;
}
/* --- Buttons --- */
.main-button {
	position:relative;
	display:inline-block;
	padding:10px 30px;
	background-color: #FF6700;
	border: 2px solid transparent;
	border-radius: 40px;
	color: #FFF;
	-webkit-transition:0.2s all;
	transition:0.2s all;
}

.main-button:hover , .main-button:focus {
	background-color:#fff;
	border: 2px solid #FF6700;
	color:#FF6700;
}

.main-button.icon-button:hover , .main-button.icon-button:focus {
	padding-right: 45px;
}

.main-button.icon-button:after {
	content:"\f178";
	font-family:FontAwesome;
	position:absolute;
	width: 30px;
	right: 15px;
	text-align:center;
	opacity:0;
	-webkit-transition:0.2s all;
	transition:0.2s all;
}

.main-button.icon-button:hover:after , .main-button.icon-button:focus:after {
	opacity:1;
}

@media only screen and (max-width: 991px) {
	.contact-form  {
		margin-bottom:40px;
	}

	.contact-form button {
		float:none !important;
	}
}
  </style>
 
</head>

<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
          <a class="navbar-brand" href="#">Student Corner</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
                  <li><a href="../index.html">Home</a></li>        
                  <li  ><a href="project_name.php">Projects</a></li>
                  <li class="active"><a href="launch.php">Launch </a></li>
                  <li style="margin-right: 10px;"><a href="#footer" id="button">Contact Us</a></li>
                 <!-- <li style="margin-right: 10px;"><a><form action="logout.php" method="POST">
                        	<button style="border-width: 0px;
                        	background-color:Transparent;"type="submit" name="submit">Logout</button>
                        </form></a></li> -->
                </ul>
     </div>
    </div>
  </nav>
  
<br>
<br>
<br>
<br>

		<div id="contact" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="contact-form">
							<h4>Upload Here</h4>
							
							<!--<form action="logout.php" method="POST">-->
							<!--    <button type="submit" name="submit"><?php $_SESSION['first_name']; ?></button>-->
							<!--</form>-->
							
							<form action="form.inc.php" method="POST" enctype="multipart/form-data">
								<input class="input" type="text"  name="name" placeholder="Name">
								<br />
                                <span style="color:Red"></span>
								<input class="input" type="text" name="aim" ng-model="aim" placeholder="Aim of project">
								<textarea class="input" type="text" name="comreq" ng-model="comreq" placeholder="Componenets"></textarea>
								<textarea class="input" name="message" ng-model="message" placeholder="Short Description"></textarea>
								<label for="image">upload project thumbnail </label>
								<input type="file" name="image" accept="image/jpeg, image/png, image/jpg"/>
								<label for="pdf">upload project pdf</label>
								<input type="file" name="pdf" accept="pdf">
								<button class="main-button icon-button pull-right" name="submit">Submit</button>
							</form>

							<?php
            

                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if(strpos($fullurl, "sucess") == true) {
                    echo "Project submission successful !";
                    exit();
                } elseif(strpos($fullurl, "file=big") == true) {
                    echo "Incorrect Password !";
                    exit();
                } elseif(strpos($fullurl, "fileupload=error") == true) {
                    echo "Please try again !";
                    exit();
                } elseif(strpos($fullurl, "fileformat=false") == true) {
                    echo "Please try again !";
                    exit();
                } elseif(strpos($fullurl, "exists") == true) {
                    echo "Project with this title already exists. Try with modification.";
                    exit();
                }  elseif(strpos($fullurl, "failed") == true) {
                    echo "Please try again";
                    exit();
                }
            ?>

						</div>
					</div>
					
					<div class="col-md-5 col-md-offset-1">
						<h4>Contact Information</h4>
						<ul class="contact-details">
							<li><i class="fa fa-envelope"></i>isavitss@gmail.com</li>
							<li><i class="fa fa-phone"></i>9747274827</li>
							<li><i class="fa fa-map-marker"></i>Tecnology Tower</li>
						</ul>

						
						    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=technology%20tower%2Cvit%20university&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
						


					</div>
				</div>
			</div>
		</div>


<br>
<br>
<footer class="footer-distributed" id="footer">

			<div class="footer-left">

				<h3>ISA<span>  </span><span>  </span><span>VIT</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a target="_blank" href="https://blog.isavit.club/">Blog</a>
					·
					<a target="_blank" href="https://isavit.club/">About</a>
					·
					<a target="_blank" href="faqs.html">Faq</a>
					·
					<a target="_blank" href="https://isavit.club/#social-section">Contact</a>
				</p>

				<p class="footer-company-name">International Society of Automation &copy; 2019</p>

				<div class="footer-icons">

					<a target="_blank" href="https://www.facebook.com/isavitchapter/"><i class="fa fa-facebook"></i></a>
					<a target="_blank" href="https://www.linkedin.com/company/isa/"><i class="fa fa-linkedin"></i></a>
					<a target="_blank" href="https://www.instagram.com/isa_vit_/"><i class="fa fa-instagram"></i></a>
					<a target="_blank" href="#"><i class="fa fa-bar-chart-o"></i></a>
					

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email" />
					<textarea name="message" placeholder="Message"></textarea>
					<button>Send</button>

				</form>

			</div>

		</footer>

</body>
</html>
