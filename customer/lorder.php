<?php
include('db.php');
// include('welcome.php');

$ids=$_GET['ids'];
$_SESSION['name']=$_GET['name'];
$result2 = mysql_query("SELECT * FROM lavander WHERE flower_id='$ids'");
while($row2 = mysql_fetch_array($result2))
	{
      $flower=$row2['flower_id'];
	$price=$row2['price'];
	$name=$row2['name'];
  $img=$row2['img'];
	echo '<span><img src="assets/img/slider/lavander/'.$row2['img'].'" alt="Wall-E" title="'.$_SESSION['name'].'" /></span><br>';
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

</form>