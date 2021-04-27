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
                if($rose>0&&$lavander<2){ 
                $minus=(35*$lavander); 
$presyo=($price-$minus);
mysql_query("UPDATE customization set code='r$rose',img='r$rose.png',price='$presyo',count=0 where id = '".$_SESSION['id']."' ");
  }
  else
  {

    if($rose>0){
        $minus=(35*$lavander); 
$presyo=($price-$minus);
      mysql_query("UPDATE customization set code='r$rose',img='r$rose.png',price='$presyo',count=0 where id = '".$_SESSION['id']."' ");
    }
    else{
mysql_query("DELETE FROM customization  where id = '".$_SESSION['id']."' ");
}
  }
  header('Location:customization.php');                                  
?>