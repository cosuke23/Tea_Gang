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
                if($lavander>0&&$rose<2){ 
                $minus=(35*$rose); 
$presyo=($price-$minus);
mysql_query("UPDATE customization set code='l$lavander',img='l$lavander.png',price='$presyo',Ncount=0 where id = '".$_SESSION['id']."' ");
  }
  else
  {

  if($lavander>0){
        $minus=(35*$rose); 
$presyo=($price-$minus);
      mysql_query("UPDATE customization set code='l$lavander',img='l$lavander.png',price='$presyo',Ncount=0 where id = '".$_SESSION['id']."' ");
    }
    else{
mysql_query("DELETE FROM customization  where id = '".$_SESSION['id']."' ");
}
  }
  

  header('Location:customization.php');                                  
?>