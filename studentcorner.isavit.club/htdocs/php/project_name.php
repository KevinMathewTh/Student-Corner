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
    *
    {
        font-family: 'Lato', sans-serif;
        font-family: 'Roboto', sans-serif;
    }

    .projects {
    margin-top:20px;
    margin-bottom:20px;
}

.row
{
    margin-bottom: 20px;
}

.projects .projects-img {
    position: relative;
    display:block;
    margin-bottom:20px;
    border-radius:4px;
    overflow:hidden;
}

.projects .projects-img > img {
    width:100%;
    height:200px;
}

.projects-img:after {
    content:"";
    position:absolute;
    left:0;
    right:0;
    bottom:0;
    top:0;
    background-color:#FF6700;
    opacity:0;
    -webkit-transition:0.2s opacity;
    transition:0.2s opacity;
}

.projects .projects-img:hover:after {
    opacity:0.7;
}

.projects .projects-img .projects-link-icon {
    position:absolute;
    left:50%;
    top:50%;
    -webkit-transform: translate(-50% , calc(-50% - 15px));
        -ms-transform: translate(-50% , calc(-50% - 15px));
            transform: translate(-50% , calc(-50% - 15px));
    width:40px;
    height:40px;
    line-height:40px;
    text-align:center;
    border:2px solid #fff;
    color:#fff;
    border-radius:50%;
    opacity:0;
    z-index:10;
    -webkit-transition:0.2s all;
    transition:0.2s all;
}

.projects .projects-img:hover .projects-link-icon {
    -webkit-transform: translate(-50% , -50%);
        -ms-transform: translate(-50% , -50%);
            transform: translate(-50% , -50%);
    opacity:1;
}

.projects .projects-title {
    display:block;
    text-transform:uppercase;
    height:20px;

}

.projects .projects-details {
    margin-top: 20px;
    padding-top: 10px;
    border-top: 1px solid #EBEBEB;
}

.projects .projects-details .projects-price {
    float: right;
}

.projects .projects-details .projects-price.projects-like {
    color: green;
}

.projects .projects-details .projects-price.projects-premium {
    color: #FF6700;
}

#project .center-btn {
    text-align:center;
    margin-top:40px;
}

@media screen and (max-width: 600px) {
    projects .projects-img > img {
        height:150px;
    }

    .projects .projects-title {
    display:block;
    text-transform:uppercase;
    height:70px;
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
                  <li  class="active"><a href="project_name.php">Projects</a></li>
                  <li><a href="login.php">Launch </a></li>
                  <li style="margin-right: 10px;"><a href="#footer" id="button">Contact Us</a></li>
                  <!--
                  <li style="margin-right: 10px;"><a><form action="logout.php" method="POST">
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
  <h1 align="center">LIST OF PROJECTS</h1>
  <section class="search">
    
  </section>
  <section>
    <div id="project" class="section">

                <div class="container">

                 <div class="row">
                    <div class="section-header text-center">
                        <h2>Explore project</h2>
                        <p class="lead">By living the books of eloquence from the right, nor is anything that have clearly not so.</p>
                    </div>
                </div>
                
    
    <div id="project-wrapper">

      <?php 

include_once 'dbh.inc.php';

$sql = "SELECT project_id,name,imgname FROM project ORDER BY project_id DESC LIMIT 8";
$result = mysqli_query($conn,$sql);
$result_check = mysqli_num_rows($result);

if ($result_check > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $project_id = $row['project_id'];
?>

    <div class="col-md-4 col-sm-6 col-xs-6" id="load_data">
                            <div class="projects">
                                
                                <a href="<?php echo"project.php?name={$row['name']}" ?>" class="projects-img">
                                    <img src="images/<?php echo "$row[imgname]" ?>" alt="">
                                    <i class="projects-link-icon fa fa-link"></i>
                                </a>
                             <?php echo "<a class='projects-title' href='project.php?name={$row['name']}'> {$row['name']}</a>\n"; ?>
                                
                            </div>
                        </div>
<?php
  }
} else {
  echo "No projects to display";
}

 ?>
                   </div>
                <!--    <div class="row">-->
                <!--          <div id="remove_row">-->
                            <!-- pagination -->
                <!--            <div class="col-md-12">-->
                <!--                <button name="btn-more" id="btn_more" data_vid="<?php echo $project_id; ?>" class="btn btn-success form-control">More</button>-->
                <!--            </div>-->
                            <!-- pagination -->
                <!--            </div>-->
                <!--        </div>-->
                        <!-- /row -->
                <!--</div>-->
        </section>

<br>
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

