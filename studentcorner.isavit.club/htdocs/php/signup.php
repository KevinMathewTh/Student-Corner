<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="image/gif/png" href="../img/titlelogo.png">
    <title>signup</title>
    
  </head>
  <body>
        <div class="container-fluid h-100">
             
            <div class="row h-100">
                <div class="col-sm-4 col-lg-6" id="leftpart">
                   <h1>WELCOME<br>TO STUDENT CORNER</h1>
                	<p>Facing any difficulties in making any project,or need to clear your basics.
                	No worries you're at the prefect place to get these things done!!!</p>
                	<button class="accountb"><a href="login.php">Login to Launch projects</a></button>
                	<p id="botpart">Here you'll get sample <a class="test" href="project_name.php" data-placement="top" data-toggle="tooltip" title="view projects!!"style="text-decoration: none;">Projects</a> with "Minute detailings step by step with all the basics that you need."</p>
                	<ul id="menu">
					  <li><a href="../index.html">Home</a></li>
            <li><a href="project_name.php">Projects</a></li>
            <li><a target="_blank" href="../faqs.html">Faqs</a></li>
					</ul> 
                </div>
                <div class="col-lg-1"></div>
                <div class="sol-sm-8 col-lg-4 formsignup">
                    <center><img id="isalogo" src="../img/isa-vit.jpeg" alt="isa"></center>

                    <center><div id="formContent">
                        <h4>Sign Up</h4>
                      <form method="POST" action="signup.inc.php">

                            <input type="text" id="name"  name="first" placeholder="enter your name" required>

                        <input type="text" id="email"  name="email" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" placeholder="enter your email id" required>
                        
                        <input type="password" id="password"  name="pwd" placeholder="enter your password" required>
                        
                        <input type="password" id="confirm_password"  name="confirmpassword" placeholder="confirm your password" required>

                        <input type="submit" value="Sign Up" name="submit"><br>
                        <p class="text-center" style="padding: 10px;">Have an account? <a href="login.php">Log In</a> </p>                                                                 

                      </form>
                    </div>
                    <?php
            

                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if(strpos($fullurl, "signup=empty") == true) {
                          ?><div class="alert alert-warning">
                          <strong><?php  echo "You did not fill all the fields.";
                                        ?></strong>
                        </div>
                        <?php
                } elseif(strpos($fullurl, "signup=invalid") == true) {
                              ?><div class="alert alert-warning">
                              <strong><?php  echo "Your name should contain only alphabets.";
                                    ?></strong>
                            </div>
                            <?php
                } elseif(strpos($fullurl, "signup=usernametaken") == true) {
                    ?><div class="alert alert-info">
                              <strong><?php  echo "You are already Signed up !";
                                                exit();?></strong>
                            </div>
                            <?php
                } elseif(strpos($fullurl, "success") == true) {
                     ?><div class="alert alert-success">
                              <strong><?php   echo "You are signed up !";
                                            ?></strong>
                            </div>
                            <?php
                } elseif(strpos($fullurl, "reset") == true) {
                     ?><div class="alert alert-success">
                              <strong><?php   echo "Your original password is mailed to you.";
                                                ?></strong>
                            </div>
                            <?php
                } 
            ?>
                  </center>
                  
                </div>  
                <div class="col-lg-1"></div>                               
                </div>
            </div>

        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript">
        
       var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
          } else {
            confirm_password.setCustomValidity('');
          }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
  </body>
</html>