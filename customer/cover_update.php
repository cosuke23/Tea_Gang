<?php
include_once("db.php");
include('welcome.php');
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	$qty=$_POST['product_qty'];
			$names=$_POST['pname'];
			$price=$_POST['price'];
			$img=$_POST['img'];
			$flower=$_POST['product_code'];
			$typ=$_POST['typ'];
			$qty=$_POST['product_qty'];
		
			$total=($price*$qty);
			$cnames=$_SESSION['Name'];
$ral = 0;
$resultx = mysql_query("SELECT * FROM customization WHERE cus_name='$cnames'");
			while($rowx = mysql_fetch_array($resultx))
	{
$fcode=$rowx['code'];
$lavander=$rowx['count'];
$rose=$rowx['Ncount'];
$cover=$rowx['cover'];
$prices=$rowx['price'];
$count = mysql_query("SELECT cover FROM customization WHERE cus_name='$cnames'");
$counts= mysql_num_rows($count);

$ral=($rose + $lavander);
}
$max=7;
if($ral>$max){
	 if($counts==true){
	 	$pricex=($prices+$price);
    			mysql_query("UPDATE customization set code='r$rose-l$lavander$names',img='r$rose-l$lavander$names.png',cover='$names',price='$pricex' where  cus_name='$cnames' ");
}
else if($counts<false){
	 	$pricex=($prices+$price);
mysql_query("UPDATE customization set code='r$rose-l$lavander-$names',img='r$rose-l$lavander$names.png',cover='$names',price='$pricex' where  cus_name='$cnames' ");
}
header('Location:customization.php');
}
else
{
$err[] = "Add atleast 8 Flowers.";
   echo "<div class=\"msg\">";
    foreach ($err as $e) {
      $echo = "<script type='text/javascript'>alert('Add atleast 8 Flowers'); window.location.href = 'customization.php';</script>";
      echo "$echo <br>";
      }
    echo "</div>";  
    	}
    }
?>