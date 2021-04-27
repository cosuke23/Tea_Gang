<?php
$err[] = "Invalid Login. Please try again with correct User ID and password.";
   echo "<div class=\"msg\">";
    foreach ($err as $e) {
      $echo = "<script type='text/javascript'>alert('You must Sign-up first!'); window.location.href = 'regis.php';</script>";
      echo "$echo <br>";
      }
    echo "</div>";  
     ?>