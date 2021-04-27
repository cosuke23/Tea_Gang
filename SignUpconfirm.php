 <html>
<title>
SIGN_UP
</title>
<head>
  
<style>
 body {
  background-image:url("PICTURES/gray.jpg");
   background-size: 100% 100%;
	background-attachment: fixed;
	background-repeat:no-repeat;
	overflow:auto;
	text-align:center;
  }
  
#HeadDiv{
      border-left:0px;
      border-top:0px;
      padding-left:0px;

     }

#WhiteDivision{

	font-family:"Arial";
    background-color:darkred;
	color:white;
	position: absolute; 
	border-color:#87ceeb;
	border-style: solid;
	border-width: 5px;
	text-align: center;
	top: 158px; 
	right: 250px;
	left: 250px;
	height: 35px;
   	width:900px;
	font-size:17px;
}

#SearchDiv{
      margin-left:242px;
      margin-right:0px;
      margin-top:px;
      background-color:#87ceeb;
      height:40px;
      width:910px;
}

#textboxsearch{

    	float:left;
    	text-align:center;
    	margin-left:130px;
      	margin-top:10px;
      	border-left:0px;
      	padding-left:0px;
}

#buttonsearch{

	float:left;
      	text-align:center;
      	margin-left:430px;
      	margin-top:-21px;
     	border-left:0px;
     	padding-left:0px;
}


#MidIns{
      float:left;
      margin-left:242px;
      margin-top:0px;
      border-left:0px;
      padding-left:0px;
      background-color:#ffffcc;
      height:635px;
      width:909px;
	  background-image:url("PICTURES/frame.jpg");
	  background-repeat:no-repeat;
	  background-size: 100% ;
}
#centergo{  
      float:left;
      margin-left:100px;
      margin-top:0px;
      border-left:0px;
      padding-left:0px;
      height:900px;
      width:700px;
     }	 
	
.class1 {
			margin-top: 10px;
		margin-left: 390px;
		border-radius: 10px;
		background-color: white;
		color: black;
		text-align: left;
		border:2px solid black;
		width: 610px;
		height: 600px;
} 

a:link, a:visited {
	    color:white;
	    text-decoration: none;
	}

a:hover, a:active {
	    color:black;
		font-weight: bold;
	}

#bigdiv{
	width:1380px;
	height:700px;
}

</style>
</head>
<body>
<div id="bigdiv">
<div id="HeadDiv">
<a href="Home.php">
		<img src="PICTURES/logo.jpg" width="1350" height="150">
</a>
</div>

	<div class="class1">
<br>
<form method="POST" action="SignUpconfirm.php" >
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<font align="center" face="verdana" size="7"><b>S I G N &nbsp U P</b></font><br>
<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;*Notice: All fields must be fill-up<br><br><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3" >Full Name: :</font>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="fn" placeholder="SURNAME/FIRST NAME/M.I." size="27" maxlength="50"  /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <font face="verdana" size="3">Address :</font>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" placeholder="Street Barangay Municipality " size="27" name="add" maxlength="100" /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3">Contact :</font>&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <input type="text" name="con" placeholder="Contact" maxlength="11" /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3">E-Mail :</font>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" placeholder="example@yahoo.com" name="em" maxlength="30"  /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3">Username :</font>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" placeholder="Username" name="un" maxlength="15"  /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3">Password :</font>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <input type="password" placeholder="Password" name="pass" maxlength="15"  /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3">Retype-Password :</font> &nbsp; <input type="password" name="rpass" placeholder="Retype-Password" maxlength="15"  /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3">Secret Word:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text"  placeholder="Secret Question" name="spass" maxlength="15" /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;*this will be used to retrieve your password<br><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="image" name="submit" src="PICTURES/submitbutton.png" value="Submit" width="120" height="30" class="tfbutton"/>				
</form>
</div>
</div>

</body>
</html>



<?php


if(isset($_POST['submit']))
     {
        $fname=$_POST['fn'];
  //      $lname=$_POST['ln'];
//	$mname=$_POST['mn'];
	$address=$_POST['add'];
	$contact=$_POST['con'];
	$email=$_POST['em'];
	$myusername=$_POST['un'];
	$mypassword=$_POST['pass'];
    $repassword=$_POST['rpass'];
     $secret_answer=$_POST['spass'];
     }
	
$servername = "localhost";
$username1 = "root";
$password1 = "";
$selecteddb="loggers";	
	
	
	
	
	$conn = mysqli_connect($servername, $username1, $password1, $selecteddb);
// Check connection
if (!$conn) {
  //  die("Connection failed: " . mysqli_connect_error());
	echo "<script>alert('CONNECTION ON DATABASE FAILED!');</script>";
}
	
	if($fname!="" && $myusername!="" && $contact!="" && $email!="")
	            {
	                
					if($mypassword==$repassword)
					{
					$sql3 = "INSERT INTO church (full_name,address,contact,user_email,Staff_id,pwd,user_level,secret_answer)
					VALUES ('$fname','$address',$contact,'$email','$myusername','$mypassword',3,'$secret_answer')";

					

					if (mysqli_query($conn, $sql3)) 
						{
					//	echo "New Account created successfully";
						echo "<script>alert('New Account created successfully');</script>";
						} 
					else 
						{
					//	echo "Error: " . $sql3 . "<br>" . mysqli_error($conn)."<br>";
						echo "<script>alert('Please fill-in the required information!');</script>";
						}
					}
					else{ echo "<script>alert('Your Password and re-type password does not match!');</script>"; }
						
						
				}
	
   else 
   {       // if($mypassword!=$repassword)
	  // {
		 //  echo "<script>alert('Your Password and re-type password does not match!');</script>";
	   //}
		  // else    {
	   
				echo "<script>alert('Please fill-in the required information, Account Not Created!');</script>";
	   
		   //    }
   }



mysqli_close($conn);
?>





