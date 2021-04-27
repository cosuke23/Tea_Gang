<?php
include('../db.php');
include('../db1.php');
$id=$_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM temp WHERE cnt='$id'");
while($row = mysqli_fetch_array($result))
	{
		echo '<img src="..assets/img/slider/milk_tea/'.$row['img'].'"><br>';
		echo '<a href="..assets/img/slider/milk_tea/'.$row['name'].'">download</a>';
	}

?>