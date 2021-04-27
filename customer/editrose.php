<?php
include_once("db.php");
include('welcome.php');
      $cnames=$_SESSION['Name'];
 
  $roomid = $_POST['id'];
  

                                    $query=mysql_query("SELECT * from customization where id = '".$_SESSION['id']."' ");
                                    while($row=mysql_fetch_array($query)) {
$qty=$row['qty'];
$url="customization.php";
                  $lavander=$row['count'];
                  $rose=$row['Ncount'];
                  $price=$row['price'];
                }
                  $count = $rose;
  $i=$count;
    $fcodes=--$i;
    $i--;
    if($rose==1){
      $err[] = "Ok.";
   echo "<div class=\"msg\">";
    foreach ($err as $e) {
      $echo = "<script type='text/javascript'>alert('Iku!'); window.location.href = 'customization.php';</script>";
      echo "$echo <br>";
      }
    echo "</div>";  
 

    }
    else{

 
   }
   if($rose>1){
$pricex=($price-35);
            mysql_query("UPDATE customization set code='r$fcodes',img='r$fcodes.png',Ncount='$fcodes',price='$pricex' where id = '".$_SESSION['id']."' ");
   }
   else{

   }
    if($lavander>0&&$rose>1){
           
            mysql_query("UPDATE customization set code='r$fcodes-l$lavander',img='r$fcodes-l$lavander.png',Ncount='$fcodes' where id = '".$_SESSION['id']."' ");
    }
    else{
  
 $err[] = "Ok.";
   echo "<div class=\"msg\">";
    foreach ($err as $e) {
      $echo = "<script type='text/javascript'>alert('Iku!'); window.location.href = 'customization.php';</script>";
      echo "$echo <br>";
      }
    echo "</div>";  
  

}
                           header('Location:'.$url);
                                ?>
                             