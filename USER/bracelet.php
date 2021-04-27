<?php
session_start();
include 'welcome.php';
?>
<html>
<title>
BRACELET
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
      margin-top:-10px;
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
      	margin-left:380px;
      	margin-top:-26px;
     	border-left:0px;
     	padding-left:0px;
}
#signup{
		float:left;
      	text-align:center;
      	margin-left:550px;
      	margin-top:-20px;
     	border-left:0px;
     	padding-left:0px;
}
#logout{
		float:left;
      	text-align:center;
      	margin-left:500px;
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
      background-color:#87ceeb;
      height:1000px;
      width:500px;
     }

	 
#MidIns{
      float:left;
      margin-left:242px;
      margin-top:0px;
      border-left:0px;
      padding-left:0px;
      background-color:#ffffcc;
      height:300px;
      width:909px;
	  	  	background-image:url("PICTURES/frame.jpg");
			background-repeat:no-repeat;
			    background-size: 100% ;
}
#MidDiv{
      float:left;
      margin-left:242px;
      margin-top:-100px;
      border-left:0px;
      padding-left:0px;
      background-color:#ffffcc;
      height:1070px;
      width:909px;
	  	background-image:url("PICTURES/frame.jpg");
			background-repeat:no-repeat;
			    background-size: 100% 100%;
}
#go1{
	  margin-left:-190px;
      margin-top:-82px;
	  height:480px;
      width:222px;
}

#items{
	float:right;
      margin-left:0px;
	  margin-right:50px;
      margin-top:-1000px;
      border-left:0px;
      padding-left:0px;
      height:950px;
      width:500px;
	  overflow:auto;
	  background-image:url("PICTURES/hi.jpg");
	background-repeat:no-repeat;
	    background-size: 100% 100%;
}
#mainframe{
	position: absolute; 
	top: 680px; 
	right: 0;
	left: 250px;
	bottom: -100;
}

#bgtitle {
		background-image:url("PICTURES/black3.jpg");
		height:160px;
		width: 480px;
		text-align: center;

}
#picture1{
	margin-top:30px;
	margin-right:40px;
	float:right;
	}
#picture2{
	margin-top:140px;
	margin-right:-200px;
	float:right;
	}
#picture3{
	margin-top:55px;
	margin-right:40px;
	float:right;
	}
#picture4{
	margin-top:50px;
	margin-right:40px;
	float:right;
	}
#picture5{
	margin-top:50px;
	margin-right:40px;
	float:right;
	}

.description{
	
	margin-top:30px;
	margin-left:30px;
			height:160px;
		width: 200px;
	
	float:left;
}
.description1{
	
	margin-top:150px;
	margin-left:40px;
			height:160px;
		width: 200px;
	
	float:left;
}
.description2{
	
	margin-top:150px;
	margin-left:40px;
			height:160px;
		width: 200px;
	
	float:left;
}
.description3{
	
	margin-top:130px;
	margin-left:40px;
			height:160px;
		width: 200px;
	
	float:left;
}


.class2 {
		color: black;
		text-align: left;
		border: 0;
		width: 180px;
		height: 1000px;
		text-shadow: 2px 2px 1px black;
}

.class3 {
		border-radius: 5px;
		background-color:gray;
		text-align: left;
		font-family: calibri;
		border: 0;
		width: 300px;
		height: 40px;
		background-size: 100% 100%;
		background-attachment: fixed;
		background-repeat:no-repeat;
		position: absolute; 
		font-weight: bold;
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
	    color:white;
	    text-decoration: none;
	}

a:hover, a:active {
	    color:black;
		font-weight: bold;
	}
	
	
	
	#overlay {
            display: none;
            position: absolute;
            top: 0;
            bottom: 0;
			background-color:gray;
            width: 100%;
            height: 1760;
            opacity: 0.3;
            z-index: 100;
        }
        #popup {
            display: none;
            position: absolute;
            top: 470;
            left: 760;
            background: #87ceeb;
            width: 400px;
            height: 250px;
            margin-left: -250px; /*Half the value of width to center div*/
            margin-top: -250px; /*Half the value of height to center div*/
            z-index: 200;
        }
        #popupclose {
            float: right;
            padding: 10px;
            cursor: pointer;
        }
        .popupcontent {
            padding: 10px;
			text-align: center;
			
        }
        #button {
            cursor: pointer;
        }
	
	
	
#bigdiv{
	width:1380px;
	height:1515px;
}	
#under{
      
      float:left;
      margin-left:242px;
      margin-top:0px;
      border-left:0px;
      padding-left:0px;
      background-color:#00688B;
      height:150px;
      width:909px;
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

<div style="margin-left:242; margin-top:44; width:909; height:50; background-color:#87ceeb; font-size:30px;">
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

<div id="WhiteDivision">

<ul>
		<li><a href="Home.php" target="_top">Home</a></li>
		<li><a href="AboutUs.php" target="_top">About Us</a></li>
		<li><a href="Events.php" target="_top">Events</a></li>
		<li><a href="Items.php" target="_top">Products</a></li>
		<li><a href="Appointment.php" target="_top">Appoinment</a></li>
		<li><a href="Reservation.php" target="_top">Reservation</a></li>	
</ul>
</div>

<div id="SearchDiv">

		<form id="SearchDIV" method="get" action="http://www.google.com">
				<div id="textboxsearch"><input type="textsearch" placeholder="Search." size="35px" maxlength="120"/></div>
				<div id="buttonsearch"><input type="image"  src="PICTURES/searchbutton.png" value="Search" width="120" height="30" class="tfbutton"/></div>
				<div id="logout"><a href="logout.php" target="_top"><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLogout</b></a></div>
		</form>
</div>
		
<div id="MidIns">
	<img src="PICTURES/productbanner.png" width="900" height="300">
</div>

<div id="go1">
<marquee style="font-family:Times new roman; color:black "  direction="up" scrolldelay="500">
<p align="justify"><font color="Black" face="Times new roman" size="3"><b>Colossians 3:23-24</b></font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">Whatever you do, work at it with all your heart, as working for the Lord, not for human masters, since you know that you will receive an inheritance from the Lord as a reward. It is the Lord Christ you are serving.</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3"><b>Psalm 73:26</b></font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">My flesh and my heart may fail, but God is the strength of my heart and my portion forever.</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3"><b>Deuteronomy 30:16</b></font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">For I command you today to love the Lord your God, to walk in obedience to him, and to keep his commands, decrees and laws; then you will live and increase, and the Lord your God will bless you in the land you are entering to possess.</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3"><b>1 John 4:9</b></font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">This is how God showed his love among us: He sent his one and only Son into the world that we might live through him.</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3"><b>John 8:12 </b></font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">Again Jesus spoke to them, saying, "I am the light of the world. Whoever follows me will not walk in darkness, but will have the light of life."</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3"><b>Matthew 19:26 </b></font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">"But Jesus looked at them and said to them, ‘With men this is impossible, but with God all things are possible.'"</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3"><b>2 Timothy 1:7 </b></font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">"For God has not given us a spirit of fear, but of power and of love and of a sound mind."</font></p>
</marquee>
</div>

<div id="MidDiv">
<br>
<br>
<table  cellpadding="0" cellspacing="0">
<tr><td><div class="class2">
		<font face="Tahoma" color="black" size="5px"><b>___________________</b></font><br><br>
		<div class="class3"><table  cellpadding="3">
			<tr><td><a href="bracelet.php" target="_top"><font size="5"><b>B r a c e l e t s</b></a></td></font></tr>
		</table></div>
		<br><br><br>
		<div class="class3"><table  cellpadding="4">
			<tr><td><a href="necklace.php" target="_top"><font size="5"><b>N e c k l a c e</b></a></td></font></tr>
		</table></div>
		<br><br><br>
		<div class="class3"><table  cellpadding="4">
			<tr><td><a href="statues.php" target="_top"><font size="5"><b>S t a t u e s</b></a></td></font></tr>
		</table></div>
		<br><br><br>
		<div class="class3"><table  cellpadding="4">
<tr><td><a href="prayerbooklet.php" target="_top"><font size="5"><b>P r a y e r B o o k l e t</b></a></font></td></tr>
		</table></div>
		</div>
</tr></td>
</table>
<div id="items">

<div id="bgtitle"></div><br>

<div class="description">
<font size="3"><b>Black with silver cross bracelet </b><br>Php 100</font>
<br><br><br><br><br><br>
</div>
<div id="picture1">

		<img src="PICTURES/bracelet1.jpg" width="200" height="250">		
</div>
<div class="description">
<br><br><br><br><br><br><br>
<font size="3"><b>Pink Bracelet</b><br>Php 150</font>
<br><br><br><br><br><br><br><br>
</div>
<div id="picture2">
	
	<img src="PICTURES/bracelet2.jpg" width="200" height="250">

</div>
<div class="description1">
<br><br><br><br><br>
<font size="3"><b>White pearl Bracelet</b><br>Php 300</font>
<br><br><br><br><br><br>
</div>
<div id="picture3">

		<img src="PICTURES/bracelet3.jpg" width="200" height="250">

</div>
<div class="description2">
<br><br><br><br><br><br><br>
<font size="3"><b>Pearl white bracelet</b><br>Php 375</font>
<br><br><br><br><br><br>
</div>
<div id="picture4">

		<img src="PICTURES/bracelet4.jpg" width="200" height="250">

</div>
<div class="description3">
<br><br><br><br><br><br><br><br>
<font size="3"><b>Violet cross bracelet</b><br>Php 250</font>
<br><br><br><br><br><br>
</div>
<div id="picture5">

		<img src="PICTURES/bracelet5.jpg" width="200" height="250">

</div>
<br><br><br>
</div>
</div>
<div id="under">
		<div style="margin-left:20px;
		margin-top:10px;">
		<p><font color="white"  face="Times new roman" size="5"><b>Contact Information</b></font></p>
		</div>
		<div style="margin-left:-720px;
		margin-top:5px;">
		<a href="https://www.facebook.com/immaculate.conception.10?fref=ts">
		<img src="PICTURES/f.jpg" width="40" height="40">
		</a>
		</div>
		
		<div style="margin-left:-530px;
		margin-top:-50px;">
		<a href="https://www.facebook.com/immaculate.conception.10?fref=ts">
		<p><font color="white" face="Times new roman" size="3"><b>Facebook Page |</b></font></p></a>
		</div>
		
		<div style="margin-left:-320px;
		margin-top:-42px;">
		<a href="https://www.google.com.ph/maps/place/Immaculada+Concepcion+De+Malabon+Church/@14.6690451,120.9452412,17z/data=!3m1!4b1!4m2!3m1!1s0x3397b45989f3da7d:0xdfd96b957b34e810">
		<img src="PICTURES/map.jpg" width="40" height="40">
		</a>
		</div>
		
		<div style="margin-left:-150px;
		margin-top:-50px;">
		<a href="https://www.google.com.ph/maps/place/Immaculada+Concepcion+De+Malabon+Church/@14.6690451,120.9452412,17z/data=!3m1!4b1!4m2!3m1!1s0x3397b45989f3da7d:0xdfd96b957b34e810">
		<p><font color="white" face="Times new roman" size="3"><b>Google Map |</b></font></p></a>
		</div>
		
		
		<div style="margin-left:40px;
		margin-top:-42px;">
		<img src="PICTURES/phone.jpg" width="40" height="40">
		</div>
		
				<div style="margin-left:210px;
		margin-top:-50px;">
		<p><font color="white" face="Times new roman" size="3"><b>09053478678 |</b></font></p>
		</div>
		
				<div style="margin-left:410px;
		margin-top:-42px;">
		<img src="PICTURES/telephone.jpg" width="40" height="40">
		
		<div style="margin-left:220px;
		margin-top:-50px;">
		<p><font color="white" face="Times new roman" size="3"><b>277-20-11/276-20-11</b></font></p>
		</div>
		</div>
				<div style="margin-left:20px;
		margin-top:10px;">
		<br>
		<p><font color="white" face="Times new roman" size="3">Copyright 2016 Immaculate Concepcion Parish Church. All rights reserved.</font></p>
		</div>
		</div>
		

</div>	
</div>








</body>
</html>