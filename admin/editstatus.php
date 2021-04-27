<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<form action="execeditstatus.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
	<input type="hidden" name="cus_name" value="<?php echo $c_name=$_GET['c_name'] ?>">
	Status:<br>
	<select name="status" class="ed">
	<option>Pending</option>
	<option>To Deliver</option>
	<option>Cancelled</option>
	<option>Claimed</option>
	</select>
	<br>
	<input type="submit" value="Edit" id="button1">
</form>