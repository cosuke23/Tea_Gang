<?php
	include_once('db.php');
	include_once('db1.php');
	$id=$_GET['cnt'];

	
	mysql_query("DELETE from cus_temp where cnt='$id' ");
	header('location:dash_customized.php');

?>