<?php

include_once("db.php");
include('welcome.php');
			$cnames=$_SESSION['Name'];
  


                                    $query=mysql_query("SELECT * from customization where id = '".$_SESSION['id']."' ");
                                    while($row=mysql_fetch_array($query)) {
$id=$row['id'];
$flower=$row['flower_id'];
$img=$row['img'];
$price=$row['price'];
$qty=1;
$total=$row['total'];
$name=$row['cus_name'];
$code=$row['code'];
$names="Customized";
$status="On Que";
                                    
        mysql_query("INSERT INTO cus_temp (flower_id,img,price, qty, total,id,name, cus_name,code,status) VALUES('$flower','$img','$price', '$qty', '$total','$id','$names', '$name','$code','$status')");

 mysql_query("INSERT INTO temp (flower_id,img,price, qty, total,id,name, cus_name) VALUES('$flower','$img','$price', '$qty', '$total','$id','$names', '$name')");
mysql_query(" DELETE from customization where id = '".$_SESSION['id']."' ");
                                    } 
                                    header('Location:cus_info.php');


                                    ?>   
                             