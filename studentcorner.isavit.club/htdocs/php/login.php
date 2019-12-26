<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bfoootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="image/gif/png" href="../img/titlelogo.png">
    <script src="login.js"></script>
    <title>login</title>
  </head>
  <body>
        <div class="container-fluid h-100">
             <div class="row h-100">
                <div class="col-lg-6" id="leftpart">
                    <h1>WELCOME<br>TO STUDENT CORNER</h1>
                	<p>Facing any difficulties in making any project,or need to clear your basics.
                	No worries you're at the prefect place to get these things done!!!</p>
                	<button class="accountb"><a href="signup.php">Create an Account</a></button>
                	<p id="botpart">Here you'll get sample <a class="test" href="project_name.php" data-placement="top" data-toggle="tooltip" title="view projects!!"style="text-decoration:none;">Projects</a> with "Minute detailings step by step with all the basics that you need."</p>
                	<ul id="menu">
					  <li><a href="../index.html">Home</a></li>
            <li><a href="project_name.php">Projects</a></li>
            <li><a target="_blank" href="../faqs.html">Faqs</a></li>
					</ul> </div>
                <div class=" col-lg-1"></div>
                <div class="col-sm-12 col-lg-4 formlogin">
                    <center><img id="isalogo" src="../img/isa-vit.jpeg" alt="isa"></center>

                    

                    <center><div id="formContent">
            
                              <form method="POST" action="login.inc.php">
                                <center>
                                    <br>
            <?php
			
			include_once 'loginG.php';
			session_start();
			if(isset($_GET['code'])){
				$gClient->authenticate($_GET['code']);
				$_SESSION['token'] = $gClient->getAccessToken();
				$_SESSION['login']='yes';
				header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
			}
			if (isset($_SESSION['token'])) {
				$gClient->setAccessToken($_SESSION['token']);
				
			}
			if ($gClient->getAccessToken()) 
			{
                echo "yes";
				$gpUserProfile = $google_oauthV2->userinfo->get();
				$_SESSION['oauth_provider'] = 'Google'; 
				$_SESSION['oauth_uid'] = $gpUserProfile['id']; 
				$_SESSION['first_name'] = $gpUserProfile['given_name']; 
				$_SESSION['last_name'] = $gpUserProfile['family_name']; 
				$_SESSION['email'] = $gpUserProfile['email'];
				
			} else {
				$authUrl = $gClient->createAuthUrl();
				$output= '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="../img/google.png" alt="Sign in with Google+" width=222/></a>';
			}
			echo $output;
		?>
       
		
                                </center>
                                <h4>Login</h4>
                                <input type="text" id="email"  pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" name="uid" placeholder="email id" required>
                                <input type="password" id="password"   name="pwd" placeholder="password" required>
                                <input type="submit" value="Log In" name="submit"><br>
                                <p class="text-center" style="padding: 10px;">Dont't Have an account? <a href="signup.php">Sign Up</a> </p>
                                
                                
                                
                              </form>
                              
                              <?php
            

                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if(strpos($fullurl, "login=notmatch") == true) {
                     ?><div class="alert alert-warning">
                              <strong><?php   echo "Please enter correct Email ID.";
                                                ?></strong>
                            </div>
                            <?php
                } elseif(strpos($fullurl, "pwderror") == true) {
                     ?><div class="alert alert-warning">
                              <strong><?php  echo "Incorrect Password !";
                                                ?></strong>
                            </div>
                            <?php
                } elseif(strpos($fullurl, "login=error") == true) {
                    ?><div class="alert alert-info">
                              <strong><?php  echo "Please try again !";
                                                ?></strong>
                            </div>
                            <?php
                } elseif(strpos($fullurl, "reset") == true) {
                            ?><div class="alert alert-success">
                              <strong><?php   echo "Your older password is emailed to you. If not received please check spam folder.";
                                                exit();?></strong>
                            </div>
                            <?php
                } elseif(strpos($fullurl, "noexist") == true) {
                            ?><div class="alert alert-success">
                              <strong><?php   echo "Please signup first.";
                                                exit();?></strong>
                            </div>
                            <?php
                } 
            ?>                
                              <div id="formFooter">
                                <a class="underlineHover" href="forgotpassword.php">Forgot Password?</a>
                              </div>
                            </div>
                      </center>

                      
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
