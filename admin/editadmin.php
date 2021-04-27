<?php 
include 'db.php';



?>


<?php 
$errors="";
$success="";
					
if(isset($_POST['doRegister'] )== 'Register') {
$uname = mysql_real_escape_string($_POST['U_Name']);
$pid = mysql_real_escape_string($_POST['id']);
$fname = mysql_real_escape_string($_POST['First_Name']);
$email = mysql_real_escape_string($_POST['email']);
$address = mysql_real_escape_string($_POST['address']);
$contact = mysql_real_escape_string($_POST['Contact']);













	
	$sql_insert=mysql_query("UPDATE admin SET Username='$uname', address='$address', Name='$fname',Email='$email', Name='$fname',  Contact='$contact' WHERE id='$pid'")or die(mysql_error());

			  
$success.="YOUR INFO UPDATED Successfully.";
	header('Location:index_admin.php');

	  
	   
	 
	 
	 }
 	

?>
<?php 
if(isset($_POST['doUpdateP']) == 'Update')  
{


$rs_pwd = mysql_query("select pwd from users1 where Staff_id='$session'");
list($old) = mysql_fetch_row($rs_pwd);
$old_salt = substr($old,0,9);

//check for old password in md5 format
	if($old === PwdHash($_POST['oPword'],$old_salt))
	{
	$newsha1 = PwdHash($_POST['nPword']);
	mysql_query("update users1 set pwd='$newsha1' where Staff_id='$session'")or die(mysql_error());;
	$success = "Your new password is Successfully Updated";
	
	} else
	{
	 $errors = "Your OLD password is not INVALID";

	}

}
?>
<div id='emailerror'>
	<ul>
		<?php echo $errors; ?>
		<div style="color:green"><?php echo $success; ?></div>
	</ul>
</div>