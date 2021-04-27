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
      margin-top:10px;
      border-left:0px;
      padding-left:0px;
      height:600px;
      width:909px;
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
		margin-left: 150px;
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



<div id="MidIns">

	<div class="class1">
<br>
<form method="POST" action="SignUpconfirm.php" >
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<font align="center" face="verdana" size="7"><b>S I G N &nbsp U P</b></font><br>
<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;*Notice: All fields must be fill-up<br><br><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <font face="verdana" size="3" >Full Name: :</font>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="fn" placeholder="SURNAME/FIRST NAME/M.I." size="27" maxlength="50"  /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <font face="verdana" size="3">Address :</font>&nbsp;&nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" placeholder="Street Barangay Municipality " size="27" name="add" maxlength="100" /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <font face="verdana" size="3">Contact :</font>&nbsp;&nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <input type="text" placeholder="Contact" name="con" maxlength="11" /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <font face="verdana" size="3">E-Mail :</font> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" placeholder="example@yahoo.com" name="em" maxlength="30"  /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <font face="verdana" size="3">Username :</font>&nbsp;&nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="text" name="un" placeholder="Username" maxlength="15"  /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <font face="verdana" size="3">Password :</font> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  <input type="password" placeholder="Password" name="pass" maxlength="15"  /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <font face="verdana" size="3">Retype-Password :</font>&nbsp;&nbsp; &nbsp;  &nbsp;&nbsp;<input type="password" placeholder="Retype-Password"name="rpass" maxlength="15"  /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <font face="verdana" size="3">Secret Word:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <input type="text" placeholder="Secret word"name="spass" maxlength="15" /><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;*this will be used to retrieve your password<br><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="image" name="submit" src="PICTURES/submitbutton.png" value="Submit" width="120" height="30" class="tfbutton"/>
				
</form>
</div>
</div>
</div>
</body>
</html>









