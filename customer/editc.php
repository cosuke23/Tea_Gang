<?php
include_once("db.php");
include('welcome.php');
      $cnames=$_SESSION['Name'];
 
$query=mysql_query("SELECT * from customization where cus_name ='$cnames' ");
                                    while($row=mysql_fetch_array($query)) {
$qty=$row['qty'];
$url="customization.php";
                  $lavander=$row['count'];
                  $rose=$row['Ncount'];
                  $price=$row['price'];
                }
$presyo=($price-25);
mysql_query("UPDATE customization set code='r$rose-l$lavander',img='r$rose-l$lavander.png',cover='',price='$presyo' where id = '".$_SESSION['id']."' ");
  
  header('Location:customization.php');                                  
?>