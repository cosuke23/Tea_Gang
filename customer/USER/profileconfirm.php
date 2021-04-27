<?php
session_start();
include 'welcome.php';
include 'dbc.php';
page_protect();
?>





<html>
<title>
Profile
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
      margin-top:-15px;
      background-color:#87ceeb;
      height:40px;
      width:667px;
}

#textboxsearch{

    	float:left;
    	text-align:center;
    	margin-left:70px;
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
      height:400px;
      width:909px;
	  background-image:url("PICTURES/frame.jpg");
	  background-repeat:no-repeat;
	  background-size: 100% ;
}



a:link, a:visited {
	    color:black;
	    text-decoration: none;
	}

a:hover, a:active {
	    color:white;
		font-weight: bold;
	}
	
	#signup{
		float:left;
      	text-align:center;
      	margin-left:350px;
      	margin-top:-20px;
     	border-left:0px;
     	padding-left:0px;
	
	}
	
	#forgotpass{
		float:left;
      	text-align:center;
      	margin-left:500px;
      	margin-top:-20px;
     	border-left:0px;
     	padding-left:0px;
	
	}
	
.class1 {
	      	margin-left:270px;
      	margin-top:0px;
		margin-left: 400px;
		border-radius: 20px;
		background-color: white;
		color: black;
		text-align: left;
		border:2px solid black;
		width: 620px;
		height: 400px;
}	
	
	
	
	


</style>
</head>
<body>
<div style="width:1380px; height:700px;">
<div id="HeadDiv">
<a href="Home.php">
		<img src="PICTURES/logo.jpg" width="1350" height="150">
		</a>
</div>

<div style="margin-left:242; margin-top:44; width:909; height:50; background-color:; font-size:30px; ">
<a href="profile.php">
		Welcome:
			<?php

				//  session_regenerate_id (true); //prevent against session fixation attacks.
				// this sets variables in the session 
				echo "$sessionname";			
				//echo "$session";
			?>
		
</a>
</div>


	

<div class="class1">
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Change your password here.</h1>
<br><br>
<form method ="POST" action = "" >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Enter Old-Password :
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="TEXT" name="oldpw" placeholder="Old-Password"maxlength="50"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Enter New-Password :
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="newpw" placeholder="New-Password"maxlength="50"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Retype New-Password :
&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="rnewpw"placeholder="Retype New-Password" maxlength="50"><br><br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="image" name="submit" src="PICTURES/changepassword.png" value="Change Password" width="220" height="40">

</form>

<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="userquery.php" ><font color="black">View Your Transaction(s)</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="reservationconfirmprint.php"><font color="black">View Print</font></a>


</div>


</div>
</body>
</html>

<?php


if(isset($_POST['submit']))
     {
        
	$oldpass=$_POST['oldpw'];
     $newpass=$_POST['newpw'];
	 $rnewpass=$_POST['rnewpw'];
     
	 }

$servername = "localhost";
$username = "root";
$password = "";
$selecteddb="loggers";



$conn = mysqli_connect($servername, $username, $password, $selecteddb);
// Check connection
if (!$conn) {
  //  die("Connection failed: " . mysqli_connect_error());
	echo "<script>alert('CONNECTION ON DATABASE FAILED!');</script>";
}


	
	
	$sql4 = "SELECT id FROM church WHERE pwd='$oldpass' ";
$result = mysqli_query($conn, $sql4);


if (mysqli_num_rows($result) > 0 ) 
			{
    // output data of each row
	
	if($oldpass!="" && $newpass!="")
		{
	       if($newpass==$rnewpass)
		   {
			$sql = "UPDATE church SET pwd='$newpass' WHERE full_name='$sessionname'";

				if (mysqli_query($conn, $sql)) 
					{
						echo "<script>alert('You have successfully changed your password!');</script>";
						// echo "Record updated successfully";
					} 				
				else 
					{
						echo "<script>alert('Some Error occured please try again!');</script>";
						//  echo "Error updating record: " . mysqli_error($conn);
					}
		   }
		   
		   else{echo "<script>alert('Your input did not match!');</script>";}
		   
		   
		   
		   
		}
	else
		{
			echo "<script>alert('YOU DID NOT PUT ANY VALUE!');</script>";
		}
	
    
			}


 else {
	echo "<script>alert('YOU DID NOT PUT ANY VALUE OR THE VALUE YOU ENTERED DID NOT MATCH!');</script>";
   // echo "0 results";
	
}
	
	
	
	
	
	
	
	
	
	
	mysqli_close($conn);

	
?>






