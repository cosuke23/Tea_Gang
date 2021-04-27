<?php 
include 'db.php';



?>


<?php 
$errors="";
$success="";
					
if(isset($_POST['doRegister'] )== 'Register') {
$uname = mysql_real_escape_string($_POST['U_Name']);
$pid = mysql_real_escape_string($_POST['id']);
$lname = mysql_real_escape_string($_POST['Last_Name']);
$fname = mysql_real_escape_string($_POST['First_Name']);
$email = mysql_real_escape_string($_POST['email']);
$address = mysql_real_escape_string($_POST['address']);
$city = mysql_real_escape_string($_POST['city']);
$contact = mysql_real_escape_string($_POST['Contact']);













	
	$sql_insert=mysql_query("UPDATE customers SET Username='$uname', Lname='$lname', Name='$fname',Email='$email', Name='$fname',city='$city',  Contact='$contact' WHERE id='$pid'")or die(mysql_error());

			  
$success.="YOUR INFO UPDATED Successfully.";
	header('Location:index.php');

	  
	   
	 
	 
	 }
 	

?>
<?php 
session_start();
if(isset($_POST['doUpdateP']) == 'Update')  
{
$id=$_SESSION['id'];

$rs_pwd = mysql_query("select Password from customers where id='$id'");
list($old) = mysql_fetch_row($rs_pwd);


//check for old password in md5 format
	if($old === $_POST['oPword'])
	{
	$newsha1 = $_POST['nPword'];
	mysql_query("update customers set Password='$newsha1' where id='$id'")or die(mysql_error());;
	//	header('Location:dashboard.php');

		$success[] = "Invalid Login. Please try again with correct User ID and password.";
   echo "<div class=\"msg\">";
    foreach ($success as $ei) {
      $echo = "<script type='text/javascript'>alert('Password Updated!'); window.location.href = 'dashboard.php';</script>";
      echo "$echo <br>";
      }
    echo "</div>";  

	} else
	{
$errors[] = "Invalid password. Please try again with correct password.";
   echo "<div class=\"msg\">";
    foreach ($errors as $e) {
      $echo = "<script type='text/javascript'>alert('Wrong  Password!'); window.location.href = 'editcustomer.php';</script>";
      echo "$echo <br>";
      }
    echo "</div>";  
	}

}
?>
<div id='emailerror'>
	<ul>
		<?php echo $errors; ?>
		<div style="color:green"><?php echo $success; ?></div>

	</ul>
</div>