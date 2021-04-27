<?php
include_once("db.php");
include('welcome.php');
      $cnames=$_SESSION['Name'];
 
mysql_query("DELETE from customization where cus_name ='$cnames' ");
  header('Location:customization.php');                                  
?>