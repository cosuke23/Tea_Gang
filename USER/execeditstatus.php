<?php
include 'dbc.php';

	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	mysql_query("UPDATE tbl_reservation SET status='$status' WHERE id='$roomid'");
	header("location: userquery.php");
?>



