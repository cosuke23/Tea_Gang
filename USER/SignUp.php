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
      width:667px;
}

#textboxsearch{

    	float:left;
    	text-align:center;
    	margin-left:330px;
      	margin-top:10px;
      	border-left:0px;
      	padding-left:0px;
}

#buttonsearch{

	float:left;
      	text-align:center;
      	margin-left:570px;
      	margin-top:-20px;
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
      height:600px;
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


</style>
</head>
<body>
<div id="HeadDiv">
<a href="Home.php">
		<img src="PICTURES/logo.jpg" width="1350" height="150">
</a>
</div>

<div id="SearchDiv">

		<form id="SearchDIV" method="get" action="http://www.google.com">
				<div id="textboxsearch"><input type="textsearch" placeholder="Search." size="35px" maxlength="120"/></div>
				<div id="buttonsearch"><input type="submit" value="Search" class="tfbutton"/></div>
		</form>
		</div>
</div>
<div id="MidIns">

	<div class="class1">
<br><br><br>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<font align="center" face="verdana" size="7"><b>S I G N &nbsp U P</b></font><br><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3">First Name :</font>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" placeholder="Firstname" name="fn"maxlength="30"/><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <font face="verdana" size="3">Last Name :</font> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <input type="text" placeholder="Lastname"name="ln"maxlength="30"/><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3">Middle Name :</font>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <input type="text" name="mn" placeholder="(optional)"maxlength="30"/><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <font face="verdana" size="3">Address :</font>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" placeholder="Street,Barangay Municipal"name="add"maxlength="100"/><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3">Contact :</font>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <input type="text" name="con"maxlength="11"/><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3">E-Mail :</font>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="em"maxlength="30" Placeholder="example@yahoo.com"/><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3">Username :</font>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="un" placeholder="Username"maxlength="30"/><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3">Password :</font>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  <input type="password" placeholder="Password" name="pass"maxlength="30"/><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <font face="verdana" size="3">Retype-Password :</font>&nbsp;&nbsp; &nbsp; <input type="password" placeholder="Retype-Password"maxlength="30"name="rpass"/><br><br></li><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" value="Submit" name="submit"/>

	</div>

</div>

</body>
</html>