<?php
	include_once('db.php');
	include_once('db1.php');
	$id=$_GET['cnt'];
	$url=$_GET['url'];


	mysqli_query($conn,"DELETE from reservation where reservation_id='$id' ");
	header('location:'.$url);

?>