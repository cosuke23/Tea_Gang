<?php 
include 'db.php';

include 'header_admin.php';
?>

<?php session_start();  
                                         ?>
                                    



<?php

?>
<?php 
			$id=$_SESSION['id'];
	$sqlad = mysql_query("SELECT * FROM admin Where id='$id'");

   



	while($rowad= mysql_fetch_array($sqlad)){ 
           
			 $name=$rowad["Name"];
			 $email=$rowad["Email"];
			 
			 $contact=$rowad["Contact"];
			 $address=$rowad["Address"];
			  $username=$rowad["Username"];
			   $Password=$rowad["Password"];
		
			
		
			

    }
	



?>

<?php 
if(isset($_POST['subpic'])){
	

	 move_uploaded_file($_FILES['ppic']['tmp_name'],"images/".$_FILES['ppic']['name']);
              
	 	    mysql_query("UPDATE admin SET img = '".$_FILES['ppic']['name']."' WHERE id='".$id."'")or die(mysql_error());
			
			
}
mysql_close();
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

<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="ppic"><br>
<input type="Submit" name="subpic">
</form>
<form id="submitform" action="editadmin.php" method="post" enctype="multipart/form-data" name="submitform" >
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id;?>" />
<h3><b>Edit Your Profile</b></h3>
Upload Your Profile Picture
<br>
<br>
<?php echo $pic;?> 
<br>
<br>
<br>
Username <br />
<input name="U_Name" type="text" class="ed" id="U_Name" value="<?php echo $username;?>" required/>*
<br>
Firstname <br />
<input name="First_Name" type="text" class="ed" id="First_Name" value="<?php echo $name;?>"  pattern="[A-Za-z]{2,}" required/>*
<br>

Email <br />
<input name="email" type="text" class="ed" id="" value="<?php echo $email;?>" required/>*
<br>
Address <br />
<input name="address" type="text" class="ed" id="Middle_Name" value="<?php echo $address;?>"  pattern="[A-Za-z]{2,}" required/>*
<br>
<br>

Contact<br />
<input name="Contact" type="text" class="ed" id="Contact" value="<?php echo $contact;?>" />*
<br>



<input type="submit" name="doRegister" value="save" id="doRegister" />
</form>

<form id="submitform" action="updateadmin.php" method="post" enctype="multipart/form-data" name="submitform" >


<br><br><br>

Change Password<br>
Old Password<br />
<input name="oPword" type="password" class="ed" id="oPword"  />*
<br>

New Password<br />
<input name="nPword" type="password" class="ed" id="nPword" />*
<br>
<input type="submit" name="doUpdateP" value="save" id="doRegister" />
</form>

    </div>
	<div id="error">

	</div>
<div class="clear"></div>
</div>
</body>
</html>
