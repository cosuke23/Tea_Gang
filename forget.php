<?php 
include 'db.php';

include 'header.php';
 error_reporting(0);
?>

<?php session_start();  
                                         ?>
                                    



<?php

?>
<?php 

			
		if(isset($_GET["doUpdateP"]))
{
$pass=$_GET['nPword'];
$uname=$_GET['uname'];

	mysql_query("UPDATE customers set Password='$pass' where Username='$uname'")or die(mysql_error());;
}
			
if(isset($_GET["doRegister"]))
{


			$uname=$_GET['U_Name'];
			$fname=$_GET['First_Name'];
	
	
	$res=mysql_query("SELECT * from customers where Name='$fname' and Username='$uname'");
$count= mysql_num_rows($res);
if($count==true){
	
	echo'<form>';
	echo 'Change Password<br>';
echo 'Enter User Name<br />';
echo '<input name="uname" type="text" class="ed" id="nPword" />*';
echo'<br>';
echo 'New Password<br />';
echo '<input name="nPword" type="password" class="ed" id="nPword" />*';
echo '<br>';
echo '<input type="submit" name="doUpdateP" value="save" id="doRegister" />';
echo '</form>';

    echo '</div>';
	echo '<div id="error">';

	echo '</div>';

}
else{
	$err[] = "Invalid Login. Please try again with correct User ID and password.";
   echo "<div class=\"msg\">";
    foreach ($err as $e) {
      $echo = "<script type='text/javascript'>alert('Wrong Username or Password!'); window.location.href = 'forget.php';</script>";
      echo "$echo <br>";
      }
    echo "</div>";  
     
    
}

}
?>












<style type="text/css">
<!--
div#contact { 
position:fixed;
top:200px;
right:0; 

 }
.contimage{
filter: alpha(opacity=80);-moz-opacity:.80;opacity:.80;
}
h1{
color:#fff;
margin:0 0 30px 0;
font-size:36px;
font-family:"Times New Roman", Times, serif;
font-style:italic;
}
 /*  Contact Form Styling */
 #contactform #error ul{
 padding-left:0px;
 line-height:20px;
 }
 #contactform #error span{
 color:green;
 padding:5px 0 5px 0;
 position:absolute;
 top:60px;
 right:10px;
 width:150px;
 }
 #contactform #error ul li{
  color:#BF0B0B;
  font-weight:normal;
  }
 h2#contacth2{
 font-size:18px;
 color:#000;
 margin:0 0 10px 0;
 font-weight:normal;
 padding-bottom:10px;
 border-bottom:1px dotted #ccc;
 }
 #contactform fieldset{
 border:none;
 }
 #contactform #formleft{
 float:left;
 }
 #contactform #error{
 float:right;
 }
 #contactform .button{
	  margin-left:80px;
 background:#eded;
 color:#666;
 border:1px solid #ccc;
 padding:5px 20px 5px 20px;
 outline:none;
 }
 #contactform{
 color:#666;
 margin-left:50px;

 }
.clear{clear:both;}
.download{
display:block;
padding:20px 0 20px 0;
background:#222;
text-align:center;
border:1px solid #000;
color:#fd398f;
font-size:18px;
}
.download:hover{
background:#000;
}
#error{
color:#fd398f;
}
input[type="text"]
{
    width:250px;
	height:30px;
font-size:15px;
}
input[type="password"]
{
    width:250px;
	height:30px;
	font-size:15px;

}

select
{
    width:250px;
	height:30px;
	font-size:15px;

}
-->
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Account Setting</title>
<script type="text/javascript">
	$(document).ready(function() {
		$('#submitform').ajaxForm({
			target: '#error',
			success: function() {
			$('#error').fadeIn('slow');
			}
		});
	});

</script>
</head>
<body>

<div id="contactform">
<div id="formleft">
<form >
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id;?>" />
<h3><b>Answer security question </b></h3>
<br>
Username <br />
<input name="U_Name" type="text" class="ed" id="U_Name" value="" required/>*
<br>
Lastname <br />
<input name="Last_Name" type="text" class="ed" id="Last_Name" value=""  pattern="[A-Za-z]{2,}" required/>*
<br>
Firstname <br />
<input name="First_Name" type="text" class="ed" id="First_Name" value=""  pattern="[A-Za-z]{2,}" required/>*
<br>

Email <br />
<input name="email" type="text" class="ed" id="" value="" required/>*
<br>
Address <br />
<input name="address" type="text" class="ed" id="Middle_Name" value=""  pattern="[A-Za-z]{2,}" required/>*
<br>
City <br />
<input name="city" type="text" class="ed" id="Middle_Name" value=""  pattern="[A-Za-z]{2,}" required/>*
<br>
<br>

Contact<br />
<input name="Contact" type="text" class="ed" id="Contact" value="" />*
<br>



<input type="submit" name="doRegister" value="Check" id="doRegister" />
</form>




<br><br><br>
<div class="clear"></div>
</div>
</body>
</html>
