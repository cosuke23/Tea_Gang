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
<form action="edit_c.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
	 CUstomization Status:<br>
	<select name="status" class="ed">
	<option>Pending</option>
	<option>To Deliver</option>
	<option>Cancelled</option>
	<option>Claimed</option>
	</select>
	<br>
	<input type="submit" value="Edit" id="button1">
</form>