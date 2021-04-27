
<?php
require "db1.php";
include('db.php');
include('session.php');
$id=$_POST['flow_id'];	
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$cnum=$_POST['cnum'];
$transnum=mt_rand(1000000,9999999);
$paddress=$_POST['paddress'];
$pmethod=$_POST['pmethod'];
$date=$_POST['date'];
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
$results = mysqli_query($conn,"SELECT * from temp where id = '".$_SESSION['id']."' ");
			while($row2 = mysqli_fetch_array($results)){
			$flower=$row2['flower_id'];
			$img=$row2['img'];
			$name=$row2['name'];
			$qty=$row2['qty'];
			$price=$row2['price'];
			$vat=($price*0.12);
									$vat_t=($price+$vat);
									$total=($price*$qty);
									$grand=($price+$vat);
			$total=$row2['total'];
			$cname=$row2['cus_name'];
			$type=$row2['type'];	
	 $query=mysqli_query($conn,"SELECT sum(price) as total from temp where id ='".$_SESSION['id']."'  ");
  $row=mysqli_fetch_array($query);
                                     
									$total=$row['total'];
									$vat=($total*0.12);
									$grand_t=($total+$vat)*$qty;
	 
$id=$_SESSION['id'];
mysqli_query($conn,"INSERT INTO reserve (Flower_id,img,name,qty,total,cus_name,id,price,type) VALUES ('$flower','$img','$rfname,$rlname','$qty','$grand','$cname','$id','$cm','$rpaddress')")or die(mysqli_error());


}
mysqli_query($conn,"INSERT INTO reservation (firstname, lastname, city, address, email, contact, confirmation, status, payable, delivery,d_date, payment) VALUES ('$fname','$lname','$city','$paddress','$email','$cnum','$transnum','Pending','$grand_t','$da','$date','$pmethod')")or die(mysqli_error());




header("location: print.php?id=$transnum");
echo $total;
$mail_To = $email;
$mail_Subject = "Order notification From Coffin Shop";
$mail_Body = "First Name: $fname\n".
"Last Name: $lname\n".
"Email: $email \n".
"City: $city \n".
"Country: $country \n".
"Contact Number: $cnum\n".
"Payable amount: $total\n ".
"Delivery Method: $dmethod\n".
"Payment Method: $pmethod\n ".
"$pmethod Account: $accountnum\n ".
"Confirmation Number: $transnum\n ".
"Valid ID: $location\n";
mail($mail_To, $mail_Subject, $mail_Body);


?>