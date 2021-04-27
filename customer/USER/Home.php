<?php
session_start();
include 'welcome.php';
?>

<html>
<title>
HOME
</title>
<head>
<Script type= "text/javascript">

var slideimages = new Array()
slideimages[0]= new Image()
slideimages[0].src = "PICTURES/church1.jpeg"
slideimages[1]= new Image()
slideimages[1].src = "PICTURES/church2.jpeg"
slideimages[2]= new Image()
slideimages[2].src = "PICTURES/church3.jpeg"
slideimages[3]= new Image()
slideimages[3].src = "PICTURES/church4.jpeg"
slideimages[4]= new Image()
slideimages[4].src = "PICTURES/church5.jpeg"
slideimages[5]= new Image()
slideimages[5].src = "PICTURES/church7.jpeg"
slideimages[6]= new Image()
slideimages[6].src = "PICTURES/church8.jpeg"
slideimages[7]= new Image()
slideimages[7].src = "PICTURES/church9.jpeg"

</script>
  
  
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
      margin-top:-20px;
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
      background-color:;
      height:1000px;
      width:500px;
     }
#MidIns{
		  margin-left:242px;
      margin-top:0px;
	  height:300px;
      width:909px;
	  background-color:#ffb84d;
	  background-image:url("PICTURES/Welcome1.jpg");
	     background-size: 100%;
	  background-size:909px 300px;
	background-repeat:no-repeat;
	background-align:center;

}
#MidDiv{
      float:left;
      margin-left:242px;
      margin-top:-430px;
      border-left:0px;
      padding-left:0px;
      background-color:#ffffcc;
      height:1100px;
      width:909px;
	  	background-image:url("PICTURES/frame.jpg");
			background-repeat:no-repeat;
			    background-size: 100% 100%;
}
#under{
      
      float:left;
      margin-left:242px;
      margin-top:-100px;
      border-left:0px;
      padding-left:0px;
      background-color:#00688B;
      height:150px;
      width:909px;
     }
#SouvenirItems{
	  margin-left:50px;
      margin-top:20px;
	  height:400px;
      width:400px;
}
#go1{
	  margin-left:1150px;
      margin-top:-50px;
	  height:480px;
      width:222px;
}


#first{
      float:left;
      margin-left:0px;
      margin-top:20px;
      border-left:0px;
      padding-left:0px;
      height:400px;
      width:909px;	
}
#second{
	  margin-left:50px;
      margin-top:500px;
	  height:485px;
      width:805px;
	  background-color:#f2f2f2;
	  background-attachment: fixed;
	  background-repeat:no-repeat;
	  overflow:auto;
	  
}

.class2 {
		color: black;
		text-align: left;
		border: 0;
		width: 180px;
		height: 1000px;
		text-shadow: 2px 2px 1px black;
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
            height: 1415;
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
</style>
</head>
<body>
<div style="width:1380px; height:1400px;">
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
		<li><a href="reservation.php" target="_top">Reservation</a></li><br>
		
		
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

<div id="first">
	<div align="center">
	
		<img src="church1.jpeg" id="slide" width="700" height="400" />

		<script type="text/javascript">

		var step=0

		function slideit(){
			if(!document.images)
				return
				
			document.getElementById('slide').src = slideimages[step].src
			if(step<7){
			step++ }
			else {
			step=0 }
			setTimeout("slideit()",2500)
							}
	
		slideit()
		</script>
		
	</div>
</div>
<div id="second">
<p align="justify"><font color="Black" face="Times new roman" size="6"><b>&nbsp &nbsp &nbsp &nbsp &nbspLITURGICAL SERVICES: </b></font></p>

<p align="justify"><font color="Black" face="Times new roman" size="3">&nbsp &nbsp &nbsp &nbsp &nbspDaily Masses Monday - Saturday 6:00 a.m. & 6:00 p.m</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">&nbsp &nbsp &nbsp &nbsp &nbspAnticipated Mass - Saturday 6:00 p.m.</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="5"><b>&nbsp &nbsp &nbsp &nbsp &nbspSunday Mass Schedule:</b></font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">&nbsp &nbsp &nbsp &nbsp &nbsp5:00, 6:00, 7:15, 8:30 & 9:45 a.m.</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">&nbsp &nbsp &nbsp &nbsp &nbsp4:00, 5:15, 6:30 & 7:45 p.m.</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">&nbsp &nbsp &nbsp &nbsp &nbspBaptism - every Sunday</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">&nbsp &nbsp &nbsp &nbsp &nbspWedding & Funeral Services - by Appointment</font></p> 
<p align="justify"><font color="Black" face="Times new roman" size="3">&nbsp &nbsp &nbsp &nbsp &nbspSick Call - every Tuesday or by Appointment </font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">&nbsp &nbsp &nbsp &nbsp &nbspConfession every First Friday</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">&nbsp &nbsp &nbsp &nbsp &nbspHealing Session - every first Friday after the mass</font></p>

<p align="justify"><font color="Black" face="Times new roman" size="5"><b>&nbsp &nbsp &nbsp &nbsp &nbspNovenas: </b></font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">&nbsp &nbsp &nbsp &nbsp &nbspDevotion to Our Lady of Perpetual Help - every Wednesday 5:30 p.m.</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">&nbsp &nbsp &nbsp &nbsp &nbspDevotion to Most Sacred Heart of Jesus / Holy Hour - every Friday 5:00 p.m.</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">&nbsp &nbsp &nbsp &nbsp &nbspDevotion to Our Lady of Immaculate Conception - every Saturday 5:30 p.m.</font></p>

<p align="justify"><font color="Black" face="Times new roman" size="3">&nbsp &nbsp &nbsp &nbsp &nbspAdoration to Blessed Sacrament - everyday 5:00 a.m. – 9:00 p.m. (Adoration Chapel)</font></p>
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
