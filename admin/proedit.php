<?php 
include 'db.php';


?>

<?php 

$errors="";
$success="";
if(isset($_POST['doRegister'] )== 'Register') {

$pid=$_POST['milk_teaid'];
$name = $_POST['name'];
$qty = $_POST['qty'];
$price =$_POST['price'];


$url="product.php?flavor=Matcha";
 $sql=mysqli_query($conn,"SELECT * from milk_tea WHERE tea_id='$pid' ");
	  $count= mysqli_num_rows($sql);
	  if($count<0){	
	   $errors.= 'No Changes or The Student is Exist!';
	  }else{
	$sql_insert=mysqli_query($conn,"UPDATE milk_tea SET name='$name', qty='$qty', price='$price'  WHERE tea_id='$pid'")or die(mysqli_error());

			
mysqli_query($sql_insert,$link);
$success.="SUCCESS- product Edited Successfully.";
header('Location:'.$url);


	  
	  }	 








	 
	 
	 }
 	

?>
<div id='emailerror'>
	<ul>
		<?php echo $errors; ?>
		<div style="color:green"><?php echo $success; ?></div>
	</ul>
</div>