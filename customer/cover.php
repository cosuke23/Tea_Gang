<?php
include('db.php');
include('welcome.php');

$ids=$_GET['ids'];
$result2 = mysql_query("SELECT * FROM cover WHERE cover_id='$ids'");
while($row2 = mysql_fetch_array($result2))
	{
    $cover=$row2['cover_id'];
  $img=$row2['img'];
    $qty=$row2['qty'];
	$price=$row2['price'];
	$name=$row2['name'];
  
	echo '<img src="assets/img/slider/cover/'.$row2['img'].'" alt="Wall-E" title="'.$row2['name'].'" /><br>';
	echo '<span style="color:#B80000; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">'.$row2['name'].'</span><br>';
	//echo '<span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">'.$row2['description'].'</span>';
	}
?>
<script type="text/javascript" language="Javascript">
	var sum=0;
	price = document.frmOne.select1.value;
	document.frmOne.txtDisplay.value = price;
    function OnChange(value){
		
		price = document.frmOne.select1.value;
		quantity = document.frmOne.select2.value;
        sum = price * quantity;
		
		document.frmOne.txtDisplay.value = sum;
    }
</script>
<SCRIPT language=Javascript>
			  <!--
			  function isNumberKey(evt)
			  {
				 var charCode = (evt.which) ? evt.which : event.keyCode
				 if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;

				 return true;
			  }
			  //-->
		</SCRIPT>
<form NAME = "frmOne" action="initiatecover.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="number" value="<?php echo $cover?>" />
  <input type="hidden" name="img" value="<?php echo $img ?>" />
 <input type="hidden" name="customer" value=" <?php echo $_SESSION['Name']; ?>"/>
 <input type="hidden" name="cus" value=" <?php echo $cus ?>"/>
	<input type="hidden" name="transnum" value="<?php echo $_GET['trnasnum'] ?>" />
	<INPUT TYPE = "Text" name = "select1" size = "35" value ="<?php echo $price ?>" style="display:none;">
	<INPUT TYPE = "Text" name = "pname" size = "35" value ="<?php echo $name ?>" style="display:none;">
    <br>
    <span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">Quantity : </span>
	<input type="text" name="select2" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" style="width:60px;" /> 
	
	 <span style="color:#B80000; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">=</span> 
    <INPUT TYPE = "Text" name = "txtDisplay" size = "35" value ="" style="border:#999999 solid 1px; background-color:#FFF; width:100px; height:20px;" readonly><br>
    <span style="font-size:10px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">
    <br />
    <?php
    if($name=='rose')
    {
    ?>
        &nbsp;&nbsp;Note: min is 10pcs  <br />
    *quotes here about rose<br />
    &nbsp;&nbsp;color available("","")<br />
   <?php
   }
   ?>
   <?php
    if($name=='lavander')
    {
    ?>
            &nbsp;&nbsp;Note: min is 10pcs <br />
    *quotes about lavander<br />
    &nbsp;&nbsp; color available("","")<br />
    <?php
   }
   ?>
    <br />
    </span>
	<input type="submit" value="ADD" style="padding:10px; border-radius:15px; background-color:pink; border:none; color:#ffffff; font-weight:bold; border: 1px solid #000000"/>
</form>