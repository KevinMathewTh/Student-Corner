<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/gif/png" href="../img/titlelogo.png">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/forgotpassword.css">
    <link rel="icon" type="image/gif/png" href="../img/titlelogo.png">
    <title>forgot password</title>
  </head>
  <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" id="leftpart">
                    <h1>WELCOME<br>TO STUDENT CORNER</h1>
                	<p>Facing any difficulties in making any project,or need to clear your basics.
                	No worries you're at the prefect place to get these things done!!!</p>
                	<button class="accountb"><a href="signup.php">Create an Account</a></button>
                	<p id="botpart">Here you'll get sample <a class="test" href="project_name.php" data-placement="top" data-toggle="tooltip" title="view projects!!"style="text-decoration: none;">Projects</a> with "Minute detailings step by step with all the basics that you need."</p>
                	<ul id="menu">
					   <li><a href="../index.html">Home</a></li>
            <li><a href="project_name.php">Projects</a></li>
            <li><a target="_blank" href="../faqs.html">Faqs</a></li>
					</ul> </div>
                 <div class="col-lg-1"></div>
                <div class="col-sm-12 col-lg-4 resetpassword">
                    <center><img id="isalogo" src="../img/isa-vit.jpeg" alt="isa"></center>
                    <center><div id="formContent">
                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                                <h4>Forgot Password?</h4>
                                <p>You can reset your password here.</p>
                              <form action="reset.inc.php" method="POST">
                                <input type="text" id="email" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?"  name="reset_email" placeholder="email id" required>
                                <input type="submit" value="Reset Password" name="submit"><br>
                              </form>
                              
                             
                              
                            </div>
                          </center>
                    <pre>
                              


                    </pre>
                </div>
                 <div class="col-1"></div>
            </div>
        </div>
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>