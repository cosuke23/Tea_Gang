<meta http-equiv="refresh" content="1; url=custom.php">
<?php
include('db.php');
include('welcome.php');
		


			
			$qty=$_POST['select2'];
			$names=$_POST['pname'];
			$img=$_POST['img'];
			$flower=$_POST['number'];
		
			$total=$_POST['txtDisplay'];

			mysql_query("INSERT INTO temp (flower_id,img, name, qty, total,id, cus_name) VALUES('$flower','$img', '$names', '$qty', '$total','$id', '$name')");
			


?>
