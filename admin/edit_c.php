<?php
	include('db.php');
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	mysql_query("UPDATE cus_temp SET status='$status' WHERE cnt='$roomid'");
	header("location: c_pending.php");
?>