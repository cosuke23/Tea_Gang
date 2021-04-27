
<?php
require "db1.php";
include('db.php');

	session_start();
$id=$_POST['flow_id'];	
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$cnum=$_POST['cnum'];
$transnum=mt_rand(1000000,9999999);
$paddress=$_POST['paddress'];
$daddress=$_POST['daddress'];
$date=$_POST['ddate'];
$city=$_POST['city'];
$status='Pending';
$rpaddress=$_POST['rpaddress'];
$rdaddress=$_POST['rdaddress'];
$pmethod=$_POST['pmethod'];
$rfname=$_POST['rfname'];
$rlname=$_POST['rlname'];
$remail=$_POST['remail'];
$rcnum=$_POST['rcnum'];
$cm=$_POST['cm'];
$da=$_POST['da'];
	


if($pmethod=='BDO'){
$accountnum='2617 2008 1809 2224';
}
else if($pmethod=='Metro Bank'){
$accountnum='1722 0629 1418 2308';
}
else if($pmethod=='Smart Padala'){
$accountnum='1211 5623 1973 2189';
}
else if($pmethod=='Cash On Delivery'){
$accountnum='Cash On Delivery';
}
$results = mysql_query("SELECT * from cus_temp where id = '".$_SESSION['id']."' ");
			while($row2 = mysql_fetch_array($results)){
			$flower=$row2['flower_id'];
			$img=$row2['img'];
			$name=$row2['name'];
			$qty=$row2['qty'];
			$price=$row2['price'];
			$total=$row2['total'];
			$cname=$row2['cus_name'];
			$type=$row2['type'];	

			$statusx="On Que";
	                                     $query=mysql_query("SELECT * from cus_temp where status = '$statusx' ");
                                    while($row=mysql_fetch_array($query)) {

                                   $cntx=$row['cnt'];
                                    }
$querys=mysql_query("SELECT sum(total) as totals from cus_temp where id = '".$_SESSION['id']."' ");
while($rows=mysql_fetch_array($querys)) {
 
 $tot=$rows['totals'];
                                      } 
$id=$_SESSION['id'];
mysql_query("INSERT INTO reserve (Flower_id,img,name,qty,total,cus_name,id,price,type) VALUES ('$flower','$img','$rfname,$rlname','$qty','$total','$cname','$id','$cm','$rpaddress')");


}
mysql_query("INSERT INTO reservation (firstname, lastname, city, address, email, contact, confirmation, status, payable, delivery, date, payment) VALUES ('$fname','$lname','$city','$paddress','$email','$cnum','$transnum','$status','$tot','$daddress','$date','$pmethod')");




header("location: cus_save.php?cnt=$cntx&id=$transnum");
echo $total;
$mail_To = $email;
$mail_Subject = "Order notification From MCJ-Flower Shop";
$mail_Body = "First Name: $fname\n".
"Cnt: $cntx \n".
"Last Name: $lname\n".
"Email: $email \n".
"City: $city \n".
"Date: $date \n".
"Contact Number: $cnum\n".
"Payable amount: $total\n ".
"Delivery Method: $dmethod\n".
"Payment Method: $pmethod\n ".
"$pmethod Account: $accountnum\n ".
"Confirmation Number: $transnum\n ".
"Valid ID: $location\n";
mail($mail_To, $mail_Subject, $mail_Body);


?>