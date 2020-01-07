<?php

    $link = mysqli_connect("localhost", "root", "", "isadb");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>