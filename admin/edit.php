<?php 
include 'db.php';


?>




<?php

//error_reporting(E_ALL);
//ini_set('display errors','1');
?>
<?php

if(isset($_GET['id'])){
      $targetId=$_GET['id'];
	 
	  $sql=mysqli_query($conn,"SELECT * FROM milk_tea WHERE tea_id='$targetId'");
	  $count= mysqli_num_rows($sql);
	  if($count>0){	
	  while($row=mysqli_fetch_array($sql)){
	  
	   $pid = $row["tea_id"];
			 $img=$row["img"];
			 $name=$row["name"];
			 $price=$row["price"];
			 $qty=$row["qty"];
			 }
	  }else{
	 echo "Unable to fetch Records";
	  exit();
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
#contactform input[type="text"]
{
    width:250px;
	height:30px;
	font-size:15px;

}

#contactform select
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
<title>JQuery Ajax Contact Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
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
<form id="submitform" action="proedit.php" method="post" enctype="multipart/form-data" name="submitform" >
<input name="id" type="hidden" class="ed" id="brnu" value="" />
<input type="hidden" name="type" type="text" class="ed" id="Student_ID" value="<?php echo $type?>" />
<input type="hidden" name="milk_teaid" type="text" class="ed" id="Student_ID" value="<?php echo $pid?>" />
<h3><b>Edit Product</b></h3>
<br>

name <br />
<input name="name" type="text" class="ed" id="Last_Name" value="<?php echo $name?>"/>
<input name="url" type="hidden" class="ed" id="Last_Name" value="<?php echo $url?>"/>
<br>
price <br />
<input name="price" type="text" class="ed" id="First_Name" value="<?php echo $price?>" />
<br>
qty <br />
<input name="qty" type="text" class="ed" id="Middle_Name" value="<?php echo $qty?>" />
<br>
<br />


<input type="submit" class="button" name="doRegister" value="save" id="doRegister" />
</form>
    </div>
	<div id="error">

	</div>
<div class="clear"></div>
</div>
</body>
</html>

