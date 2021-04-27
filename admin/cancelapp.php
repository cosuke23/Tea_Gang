<?php
	include_once('db.php');
	$id=$_GET['id'];
	$url="product.php";
	  $sql=mysqli_query($conn,"SELECT * FROM milk_tea WHERE tea_id='$id'");
	  $count= mysqli_num_rows($sql);
	  if($count>0){	
	  while($row=mysqli_fetch_array($sql)){
	  
	   $status = $row["status"];
			 }
	  }else{
	 echo "Unable to fetch Records";
	  exit();
	  }	  
if($status=="Active"){
	mysqli_query($conn,"UPDATE milk_tea set status='InActive' where tea_id='$id' ");

}else{
mysqli_query($conn,"UPDATE milk_tea set status='Active' where tea_id='$id' ");	
}
 echo"<script type='text/javascript'>alert('Status Change');
        window.location.href='dashboard/tables.php';</script>";
?>