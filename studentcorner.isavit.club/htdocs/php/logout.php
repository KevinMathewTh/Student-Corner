<?php 

session_start();
session_destroy();
unset($_session['login']);
unset($_session['flag']);
header("location: ../index.html");

 ?>