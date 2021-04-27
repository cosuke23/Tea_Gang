<?php 

include 'dbc.php';





error_reporting(0);
$err = 	array();

foreach($_GET as $key => $value) {
	$get[$key] = filter($value); //get variables are filtered.
}

if (isset($_POST['submit'])=='Login')
{

foreach($_POST as $key => $value) {
	$data[$key] = filter($value); // post variables are filtered
}


$user_email = $data['un'];
$pass = $data['pw'];


    $user_cond = "staff_id='$user_email'&&pwd='$pass'";

    


	
$result = mysql_query("SELECT `id`,`pwd`,`full_name`,`user_level` FROM church WHERE 
           $user_cond
			
			") or die (mysql_error()); 
$num = mysql_num_rows($result);

  // Match row found with more than 1 results  - the user is authenticated. 
    if ( $num > 0 ) { 
	
	list($id,$pwd,$full_name,$user_level) = mysql_fetch_row($result);
	
	//if(!$approved) {
	//$msg = urlencode("Account not activated. Please check your email for activation code");
	//$err[] = "Account not activated. Please check your email for activation code";
	
	//header("Location: login.php?msg=$msg");
	 //exit();
	// }
	 
		//check against salt

	 if(empty($err)){			
 
       session_start();
	   session_regenerate_id (true); 
		$_SESSION['staff_id']= $user_email;  
		$_SESSION['user_name'] = $full_name;
		$_SESSION['user_level'] = $user_level;
		$_SESSION['id'] = $id;
		$stamp = time();
		
	//	mysql_query("update users1 set `date`='$stamp', where id='$id'") or die(mysql_error());
		
		
	   
		  header("Location: USER/Home.php");
		 }
		}
		else
		{
		//$msg = urlencode("Invalid Login. Please try again with correct user email and password. ");
		$err[] = "Invalid Login. Please try again with correct User ID and password.";
		//header("Location: login.php?msg=$msg");
		}
		if($user_level==5){
			header("Location: Admin/Home.php");
		}
if($user_level==3){
			header("Location: USER/Home.php");
		}
if($user_level==1){
			header("Location: USER/Home.php");
		}

	 else {
		$err[] = "Error - Invalid login. No such user exists";
	  }		
}
					 
					 

?>




<html>
<title>
LOGIN_WARNING
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
      margin-top:92px;
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
      	margin-left:120px;
      	margin-top:-20px;
     	border-left:0px;
     	padding-left:0px;
	
	}
	
	#forgotpass{
		float:left;
      	text-align:center;
      	margin-left:350px;
      	margin-top:-20px;
     	border-left:0px;
     	padding-left:0px;
	
	}
	
	
.class1 {
	      	margin-left:270px;
      	margin-top:70px;
		margin-left: 400px;
		border-radius: 20px;
		background-color: white;
		color: black;
		text-align: left;
		border:2px solid black;
		width: 620px;
		height: 400px;
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
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You must login first!</h1>
<br><br>
<form method ="POST" action = ""><b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Username :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="TEXT" placeholder="Username"name="un" maxlength="15" ><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Password :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" placeholder="Password" name="pw" maxlength="15" ><br><br><br>
<br><div id="signup"><a href="SignUp.php" target="_top">SIGN UP!</a></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div id="forgotpass"><a href="forgotpass.php" target="_top" id="me" >FORGOT PASSWORD?</b></a></div>
<br><br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="image" name="submit" src="PICTURES/loginbutton.png" value="Login" width="220" height="40">
</form>


</div>



</body>
</html>