<?php
 include_once('db.php');
 include('header.php');
 error_reporting(0);
session_start();
 ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart |MCJ Flower</title>

        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="shortcut icon" href="images/logo.png">
<!--Take a look -->
                <link rel="stylesheet" type="text/css" href="cssi/default.css" />
        <link rel="stylesheet" type="text/css" href="cssi/component.css" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
</head><!--/head-->


<style>
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */

.myform{
width:400px;
padding:14px;
float:left;
      margin-left:50px;
      margin-top:0px;
      border-left:50px;
      
}

.myform2{
margin:0 auto;
width:400px;
padding:14px;
float:left;
      margin-left:50px;
      margin-top:0px;
      border-left:50px;
      
}
.myform3{
width:400px;
padding:14px;
float:right;
      margin-right:40px;
      margin-top:0px;
      border-right:40px;
      
}
/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:url('../images/ft1.jpg');

}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized select{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form1"]["fname"].value;
if (x==null || x=="")
  {
  alert("Enter Firstname");
  return false;
  }
  var x=document.forms["form1"]["valid"].value;
if (x==null || x=="")
  {
  alert("Enter Firstname");
  return false;
  }
  var y=document.forms["form1"]["lname"].value;
if (y==null || y=="")
  {
  alert("Enter Lastname");
  return false;
  }
  var z=document.forms["form1"]["cnum"].value;
if (z==null || z=="")
  {
  alert("Enter Contact Number");
  return false;
  }
  var a=document.forms["form1"]["email"].value;
if (a==null || a=="")
  {
  alert("Enter Email Address");
  return false;
  }
    var b=document.forms["form1"]["paddress"].value;
if (b==null || b=="")
  {
  alert("Enter Address");
  return false;
  }
    var c=document.forms["form1"]["city"].value;
if (c==null || c=="")
  {
  alert("Enter City");
  return false;
  }
    var d=document.forms["form1"]["daddress"].value;
if (d==null || d=="")
  {
  alert("Enter Delivery Address");
  return false;
  }
  var con = confirm("Are You Sure? you want to proceed?");
if (con ==false)
{
return false;
}
}
</script>
<?php

?>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
<div id="stylized" class="myform">
<form method="post" action="csave.php" name="form1" onsubmit="validateForm()" enctype="multipart/form-data">
<input type="hidden" name="transnum" id="name" value="<?php echo $_POST['transnumber'] ?>" />
<input type="text" name="ototal" id="name" value="<?php echo $asas ?>" style="display:none;" />
      <?php
      $id=$_SESSION['id'];
       $res=mysql_query("SELECT * from customers WHERE id='$id'");
       while($row=mysql_fetch_array($res)){
        $Lname=$row['Lname'];
        $name=$row['Name'];
        $city=$row['city'];
        $email=$row['Email'];
        $contact=$row['Contact'];
        $address=$row['Address'];
       } 
       ?>
<input type="hidden" name="flow_id" id="name" value='<?php echo $_SESSION['id']; ?>' readonly />
<h1><center>Billing Details</center></h1>
</p>
<label>First Name* 
<span class="small">Add your first name</span>
</label>
<input type="text" name="fname" id="name" value='<?php echo $name; ?>' readonly />

<label>Last Name
<span class="small">Add your last name</span>
</label>
<input type="text" name="lname" id="name" value='<?php echo $Lname; ?>' readonly   />

<label>Contact No.
<span class="small">Add your Contact number</span>
</label>
<input type="number" name="cnum" id="name" value='<?php echo $contact; ?>' readonly  />

<label>Email
<span class="small">Add a valid Email address</span>
</label>
<input type="text" name="email" id="email" value='<?php echo $email; ?>' readonly  />

<label>Address
<span class="small">permanent address </span>
</label>
<input type="text" name="paddress" id="name"  value='<?php echo $address; ?>' readonly  />
<label>City
<span class="small">permanent address</span>
</label>
<input type="text" name="city" id="name" value='<?php echo $city; ?>' />


<div class="spacer"></div>
<label>Payment method<br>
 </label>             
                    <select name="pmethod" style="width: 75px">
<option>BDO</option>
<option>Metro Bank</option>
<option>Smart Padala</option>
<option>Cash on Delivery</option>
</select>

</div>
<div id="stylized" class="myform2">

<input type="hidden" name="transnum" id="name" value="<?php echo $_POST['transnumber'] ?>" />
<input type="text" name="ototal" id="name" value="<?php echo $asas ?>" style="display:none;" />
      
<input type="hidden" name="flow_id" id="name" value='<?php echo $_SESSION['id']; ?>' readonly />
<h1><center>Recipient's Details</center></h1>

</p>
                



<label>First Name 
<span class="small">Add Recipient's first name</span>
</label>
<input type="text" name="rfname" id="name" required />

<label>Last Name
<span class="small">Add Recipient's last name</span>
</label>
<input type="text" name="rlname" id="name"  required/>

<label>Contact No.
<span class="small">Add Contact number</span>
</label>
<input type="number" name="rcnum" id="name" required/>

<label>Email
<span class="small">Add a valid address</span>
</label>
<input type="text" name="remail" id="email" required/>

<label>Address
<span class="small">permanent address</span>
</label>
<input type="text" name="rpaddress" id="name" required/>
<label>City
<span class="small">permanent address</span>
</label>
<input type="text" name="rcity" id="name" required/>


<div class="spacer"></div>

</div>
<div id="stylized" class="myform3">

<input type="hidden" name="transnum" id="name" value="<?php echo $_POST['transnumber'] ?>" />
<input type="text" name="ototal" id="name" value="<?php echo $asas ?>" style="display:none;" />
      
<input type="hidden" name="flow_id" id="name" value='<?php echo $_SESSION['id']; ?>' readonly />
<h1><center>Delivery Date </center></h1>

</p>
                

<label>Delivery Date

</label>
<input type="Date" name="ddate" id="email" required/>


<label>Delivery and additona Instructios: 

</label>
<input type="text" name="da" id="name" value="Hospital, Chapel, Pick Up or Other Instruction" />

<label>Card Message;

</label>
<input type="text" name="cm" id="name"   />

<input type="submit" value="Confirm" name="sub" style="margin-left: 150px;">

<div class="spacer"></div>

</form>
</div>