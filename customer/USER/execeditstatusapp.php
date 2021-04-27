<?php
include 'dbc.php';

	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	mysql_query("UPDATE tbl_appointment SET status='$status' WHERE appointment_number='$roomid'");
	header("location: userquery.php");
?>



