<meta http-equiv="refresh" content="1; url=customize.php">
<?php
include('db.php');
include('welcome.php');
		


			
			$qty=$_POST['select2'];
						$price=$_POST['select1'];
			$names=$_POST['pname'];
			$img=$_POST['img'];
			$flower=$_POST['number'];
		
			$total=$price*$qty;

			mysql_query("INSERT INTO temp (flower_id,img, name,price, qty, total,id, cus_name) VALUES('$flower','$img', '$names','$price', '$qty', '$total','$id', '$name')");
			


?>
