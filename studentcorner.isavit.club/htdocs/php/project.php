<!DOCTYPE html>
<html lang="en">
<head>
  
 <title>StudentCorner || ISA-VIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script type="text/javascript" src="../js/myjavascript.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
  <link rel='stylesheet prefetch' href='http://www.andrewwierzba.com/signature/css/madeBy.css'>
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/gif/png" href="../img/titlelogo.png">

  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/footer-distributed-with-contact-form.css">
    
  <style type="text/css">
    #display_box
    {
        margin:30px 40px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5);
    }
    
    .head
    {
        padding:20px
        padding-bottom:40px;
        
    }
    
    .content h4
    {
        font-weight:50;
        text-transform:uppercase;
        color:#FF6700;
    }
    
    .content .row
    {
         box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
    }
    
    .content p
    {
        padding:4px;
        
    }
    
    .content 
    {
        padding:20px 10px 30px 10px;
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
                  <li  class="active"><a href="project_name.php">Projects</a></li>
                  <li><a href="launch.php">Launch </a></li>
                  <li style="margin-right: 10px;"><a href="#footer" id="button">Contact Us</a></li>
             <!--     <li style="margin-right: 10px;"><a><form action="logout.php" method="POST">
                        	<button style="border-width: 0px;
                        	background-color:Transparent;"type="submit" name="submit">Logout</button>
                        </form></a></li> -->
                </ul>
     </div>
    </div>
  </nav>

<br>
<br>

<?php 

if(isset($_GET['name'])){

  include_once 'dbh.inc.php';

  $name = mysqli_real_escape_string($conn,$_GET['name']);

  $sql = "SELECT * FROM project WHERE name='$name';";
  $result = mysqli_query($conn,$sql);

  while($user=mysqli_fetch_assoc($result))
  {
 ?> 

<section id="display_box">
    <div class="container">
        <div clas="head">
            <h2 align="center"><?php echo "$user[name]";?></h2>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-3">
                    <h4>TITLE</h4>
                </div>    
                <div class="col-md-9">
                    <p><?php echo "$user[name]";?></p>
                </div>
            </div>
            
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <h4>AIM</h4>
                </div>    
                <div class="col-md-9">
                    <p><?php echo "$user[aim]";?></p>
                </div>
            </div>
            
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <h4>COMPONENETS REQUIRED</h4>
                </div>    
                <div class="col-md-9">
                    <p><?php echo nl2br("$user[comp]");?></p>
                </div>
            </div>
            
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <h4>SHORT DESCRIPTION</h4>
                </div>    
                <div class="col-md-9">
                    <p><?php echo "$user[message]";?></p>
                </div>
            </div>
            
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <h4>PROJECT</h4>
                </div>    
                <div class="col-md-9">
                    <embed src="uploads/<?php echo "$user[filename]" ?>#toolbar=0" type="application/pdf" width=100% height=600>
                </div>
            </div>
        
            <?php 
            }
            }

              ?>
            
        </div>
    </div>
</section>

    
 
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
