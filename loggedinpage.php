<html>
<?php

    session_start();

    if (array_key_exists("id", $_COOKIE) && $_COOKIE ['id']) {
        
        $_SESSION['id'] = $_COOKIE['id'];
        
    }

    if (array_key_exists("id", $_SESSION)) {
              
      include("connection.php");
      
      
    } else {
        
        header("Location: index.php");
        
    }

	include("header.php");

?>
<body>
<nav class="navbar navbar-light bg-faded navbar-fixed-top">
  

  <a class="navbar-brand" href="#"><strong>International Society of Automation</strong></a>

    <div class="pull-xs-right">
      <a href ='index.php?logout=1'>
        <button class="btn btn-success-outline" type="submit">Logout</button></a>
    </div>

</nav>
<div class="container">
<br><br><br><br><br><br><br><br>
<p class="display-1">Welcome</p>
</div>
<?php
    
    include("footer.php");
?>