<?php
	include('db.php');
	include('db1.php');

	$roomid = $_POST['roomid'];
	$c_name = $_POST['cus_name'];
	$status=$_POST['status'];
	mysqli_query($conn,"UPDATE reservation SET status='$status' WHERE reservation_id='$roomid'")or die(mysqli_error());


if($status=="To Deliver"){


$temp_result = mysqli_query($conn,"SELECT * FROM temp where cus_name ='$c_name'")or die (mysqli_error());
  while($temp_row = mysqli_fetch_array($temp_result)){
  $product_code=$temp_row['flower_id'];
  $product_qty=$temp_row['qty'];
  $total=$temp_row['total'];
  $c_name=$temp_row['cus_name'];


	$resultz = mysqli_query($conn,"SELECT * FROM milk_tea where tea_id ='$product_code'")or die (mysqli_error());
  $row = mysqli_fetch_array($resultz);
  $c_qty=$row['qty'];
  $n_qty=$c_qty-$product_qty;

  $resultsz = mysqli_query($conn,"UPDATE milk_tea set qty='$n_qty' where tea_id ='$product_code'")or die (mysqli_error());

	 $resulty = $mysqli->query("UPDATE reservation set status='$status' where firstname='$c_name'")or die(mysqli_error());
	  $resultdel = $mysqli->query("DELETE from temp where cus_name='$c_name'")or die(mysqli_error());
	}

	header("location: Pending.php");
}else{
	header("location: Pending.php");
}
?>