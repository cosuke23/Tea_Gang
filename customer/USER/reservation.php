<?php
session_start();
include 'welcome.php';
include 'dbc.php';
page_protect();
?>
<html>
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
      margin-top:42px;
      background-color:#87ceeb;
      height:40px;
      width:667px;
}
#textboxsearch{

    	float:left;
    	text-align:center;
    	margin-left:180px;
      	margin-top:10px;
      	border-left:0px;
      	padding-left:0px;
}

#buttonsearch{

	float:left;
      	text-align:center;
      	margin-left:480px;
      	margin-top:-20px;
     	border-left:0px;
     	padding-left:0px;
}

#Center{
      
      float:left;
      margin-left:0px;
      margin-top:0px;
      border-left:0px;
      border-top:0px;
      padding-top:0px;
      background-color:;
      height:1000px;
      width:500px;
     }

#MidDiv{
      
      float:left;
      margin-left:242px;
      margin-top:0px;
      border-left:0px;
      padding-left:0px;
      background-color: #ffffcc;
      height:1450px;
      width:909px;
	  	  	background-image:url("PICTURES/frame.jpg");
			background-repeat:no-repeat;
			    background-size: 100% 100%;
     }
#under{
      
      float:left;
      margin-left:242px;
      margin-top:0px;
      border-left:0px;
      padding-left:0px;
      background-color:#87ceeb;
      height:200px;
      width:909px;
     }
#SouvenirItems{
	  margin-left:50px;
      margin-top:20px;
	  height:400px;
      width:400px;

}
#centergo{  
      float:left;
      margin-left:100px;
      margin-top:0px;
      border-left:0px;
      padding-left:0px;
      height:1200px;
      width:700px;
     }	 
	 
#bgtitle {
		background-color: #e6f2ff;
		text-shadow: 3px 3px gray;
		height:60px;
		width: 800px;
		text-align: center;
		border-top-style: outset;
		border-bottom-style: inset;
		border-top-color: #00bfff;
		border-bottom-color: #00bfff;
}
#logout{

		float:left;
      	text-align:center;
      	margin-left:530px;
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

      height:400px;
      width:909px;

			background-repeat:no-repeat;
			    background-size: 100% ;
     }
.class1 {
		margin-left: -40px;
		border-radius: 10px;
		background-color: white;
		color: black;
		text-align: left;
		border:2px solid black;
		width: 800px;
		height: 1450px;
}
.class2 {
		color: black;
		text-align: left;
		border: 0;
		width: 180px;
		height: 1000px;
		text-shadow: 2px 2px 1px black;
}
	
.servicemenu {
	color:black; 
	width: 550px;
	margin: 0px 
	auto;font: 15.5px Calibri;
	}

	.servicemenu td{
	color:black;border:
	solid 1px #CCC;
	}

	.maintitler {
	color:black;
	font: bold 18px Calibri;
	padding: 10px 0px 10px 0px;
	background-color:#87ceeb;
	height: 20px;
	}

	.categbold {
	font: bold 13px Calibri;
	color:black;
	}

	.item {
	font: 14px;
	padding-left: 25px;
	color:black;
	}

ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	}

li {
	    float: left;
	    border-left-style: solid;
	    border-width: 5px;
	    border-color: #87ceeb;
	    display: block;
	    width: 129px;
	    padding: 8px;
	}

a:link, a:visited {
	    color:black;
	    text-decoration: none;
	}

a:hover, a:active {
	    color:white;
		font-weight: bold;
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

	<div id="MidIns">
	<div id="centergo">
	<td rowspan="5"><div class="class1"><br>

	<div id="bgtitle"><font color="black" size="8" face="calibri"><b>Reservation &nbsp &nbsp Form </b></font></div><br>
	<p><center>NOTE: Fill up the following requirement for binyag/baptism.</center></p>
	<br>
	
	<form method="POST" action="reservationconfirm.php">
&nbsp;&nbsp;&nbsp;&nbsp;PETSA NG BINYAG:(date):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="sdate"/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;ORAS NG BINYAG:(time)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="time" name="stime"/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;PANGALAN NG BATA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="child_name" placeholder="Surname/First Name/ M.I."  /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;KAILAN IPINANGANAK:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="bday"/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;KASALUKUYANG TIRAHAN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="current_add"placeholder="Street,Barangay Municipal"maxlength="100"/><br><br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;PANGALAN NG AMA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="father_name" placeholder="Surname/First Name/ M.I."maxlength="50" /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;TAGA SAAN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"placeholder="Street,Barangay Municipal"maxlength="100" name="father_address"/>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relihiyon:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="father_religion"/><br><br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;PANGALAN NG INA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mother_name"placeholder="Apelyido sa Pagkadalaga" maxlength="50"/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;TAGA SAAN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mother_address"placeholder="Street,Barangay Municipal"maxlength="100"/>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relihiyon:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mother_religion"/><br><br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;SAAN KASAL:&nbsp;&nbsp;&nbsp; <input type="radio" name="wedding_type" value="SIMBAHANG KATOLIKO"  />SIMBAHANG KATOLIKO&nbsp;&nbsp;
<input type="radio" name="wedding_type" value="HUWES"/>HUWES&nbsp;&nbsp;
<input type="radio" name="wedding_type" value="Hindi Pa Kasal"/ checked >HINDI PA KASAL<br><br><br><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;NINONG</p>
&nbsp;&nbsp;&nbsp;&nbsp;PANGALAN NG NINONG:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godfather_name1"placeholder="Surname/First Name/ M.I."maxlength="50"/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;TAGA SAAN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godfather_address1"placeholder="Street,Barangay Municipal"maxlength="100"/>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relihiyon:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godfather_religion1"maxlength="20"/><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;PANGALAN NG NINONG:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godfather_name2"placeholder="Surname/First Name/ M.I."maxlength="50"/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;TAGA SAAN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godfather_address2"placeholder="Street,Barangay Municipal"maxlength="100"/>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relihiyon:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godfather_religion2"maxlength="20"/><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;PANGALAN NG NINONG:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godfather_name3"placeholder="Surname/First Name/ M.I."maxlength="50"/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;TAGA SAAN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godfather_address3"placeholder="Street,Barangay Municipal"maxlength="100"/>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relihiyon:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godfather_religion3"maxlength="20"/><br><br><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;NINANG</p>
&nbsp;&nbsp;&nbsp;&nbsp;PANGALAN NG NINANG:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godmother_name1"placeholder="Surname/First Name/ M.I."maxlength="50"/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;TAGA SAAN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godmother_address1"placeholder="Street,Barangay Municipal"maxlength="100"/>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relihiyon:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godmother_religion1"maxlength="20"/><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;PANGALAN NG NINANG:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godmother_name2"placeholder="Surname/First Name/ M.I."maxlength="50"/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;TAGA SAAN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godmother_address2"placeholder="Street,Barangay Municipal"maxlength="100"/>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relihiyon:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godmother_religion2"maxlength="20"/><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;PANGALAN NG NINANG:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godmother_name3"placeholder="Surname/First Name/ M.I."maxlength="50"/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;TAGA SAAN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godmother_address3"placeholder="Street,Barangay Municipal"maxlength="100"/>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relihiyon:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="godmother_religion3"maxlength="20"/><br><br>
<br>
<br>

<p align="center"><input type="image" name="submit" src="PICTURES/submitbutton.png" value="Submit" width="220" height="40"></p>


</form>
	
	
	
	
  

 
	</div>
	</div>	



</div>

</body>
</html>