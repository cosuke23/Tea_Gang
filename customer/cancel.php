<?php
include_once('db.php');
session_start()
mysql_query("delete from tempappoint where Email='".$_SESSION['account']['email']."' ");
mysql_query("delete from cart where Email='".$_SESSION['account']['email']."' ");

header('location:dashboard.php');

?>