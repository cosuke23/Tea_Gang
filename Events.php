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
EVENTS
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
      margin-top:42px;
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
#login{
		float:left;
      	text-align:center;
      	margin-left:470px;
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
#SouvenirItems{
	  margin-left:50px;
      margin-top:20px;
	  height:400px;
      width:400px;

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
#MidDiv{
      float:left;
      margin-left:242px;
      margin-top:-400px;
      border-left:0px;
      padding-left:0px;
      background-color:#ffffcc;
      height:1850px;
      width:909px;
	  	background-image:url("PICTURES/frame.jpg");
			background-repeat:no-repeat;
			    background-size: 100% 100%;
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
	 
#bgtitle {
		background-color: #e6f2ff;
		text-shadow: 3px 3px gray;
		height:60px;
		width: 900px;
		text-align: center;
		border-top-style: outset;
		border-bottom-style: inset;
		border-top-color: #00bfff;
		border-bottom-color: #00bfff;
}
#go1{
	  margin-left:1150px;
      margin-top:-82px;
	  height:480px;
      width:222px;
}

	 
.class1 {
	margin-top:20px;
		margin-left: -95px;
		border-radius: 10px;
		background-color: white;
		color: black;
		text-align: left;
		border:2px solid black;
		width: 900px;
		height: 1800px;
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
	width: 800px;
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
            height: 2240;
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
	height:2000px;
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
<div id="WhiteDivision">

<ul>
		<li><a href="Home.php" target="_top">Home</a></li>
		<li><a href="AboutUs.php" target="_top">About Us</a></li>
		<li><a href="Events.php" target="_top">Events</a></li>
		<li><a href="Items.php" target="_top">Products</a></li>
		<li><a href="Loginwarning.php" target="_top">Appointment</a></li>
		<li><a href="Loginwarning.php" target="_top">Reservation</a></li>

</ul>
</div>

<div id="SearchDiv">

		<form id="SearchDIV" method="get" action="http://www.google.com">
				<div id="textboxsearch"><input type="textsearch" placeholder="Search." size="35px" maxlength="120"/></div>
				<div id="buttonsearch"><input type="image"  src="PICTURES/searchbutton.png" value="Search" width="120" height="30" class="tfbutton"/></div>
				<div id="login"><a href="#popup" target="_top" id="me" ><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLogin&nbsp&nbsp</a></div>
				<div id="signup"><a href="SignUp.php" target="_top">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSignUp</b></a></div>
		</form>
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
<p align="justify"><font color="Black" face="Times new roman" size="3">"But Jesus looked at them and said to them, ???With men this is impossible, but with God all things are possible.'"</font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3"><b>2 Timothy 1:7 </b></font></p>
<p align="justify"><font color="Black" face="Times new roman" size="3">"For God has not given us a spirit of fear, but of power and of love and of a sound mind."</font></p>
</marquee>
</div>

<div id="MidDiv">
	<div id="centergo">
	<td rowspan="5"><div class="class1"><br>
	<div id="bgtitle"><font color="black" size="8" face="calibri"><b>E v e n t s O f T h e Y e a r</b></font></div><br>
<table class="servicemenu" cellspacing="2" cellpadding="5">
<tbody>
	<br>
	<tr class="maintitler">
		<td>Date</td>
		<td>Event</td>
		<td> </td>
	</tr>
	<tr>

 

<td class="categbold" colspan="2">J A N U A R Y *</td>
</tr>
<tr>
<td class="item">Every first sunday of the year</td>
<td>Alay kapwa Outreach program</td>
 
</tr>
<tr>
<td class="item">Every second sunday of January</td>
<td>Sto.Ni??o Procession</td>
 
</tr>
<tr>
<td class="categbold" colspan="2">F E B R U A R Y *</td>
</tr>
<tr>
<td class="item">Feb 2</td>
<td>Candelaria mass</td>
 
</tr>
<tr>
<td class="item">Feb10</td>
<td>Ash wednesday</td>
 
</tr>
<tr>
<td class="item">Every friday</td>
<td>station of the cross (6pm) (lent season)</td>
 
</tr>
<tr>
<td class="categbold" colspan="2">M A R C H *</td>
</tr>
<tr>
<td class="item">Every friday</td>
<td>station of the cross(6pm) (lent season) (continuation)</td>
 
</tr>
<tr>
<td class="item">March 5</td>
<td> Parish lenten recollection</td>
 
</tr>
<tr>
<td class="item">March 18</td>
<td> Kumpisalang Bayan</td>
 
<tr>
<td class="item">March 20</td>
<td> Start of  "Pabasa ng Parokya"</td>
 
</tr>
<tr>
<td class="item"></td>
<td>Palm Sunday</td>
 
</tr>
<tr>
<td class="item">March 21</td>
<td> Pagtatapos ng pabasa</td>
 
</tr>
</tr>
<tr>
<td class="item">March 22 </td>
<td>Holy tuesday</td>
 
</tr>
<tr>
<td class="item">March 23 </td>
<td>Holy wednesday</td>
 
</tr>
<tr>
<td class="item"> March 24 </td>
<td>Maundy thursday</td>
 
</tr>
<tr>
<td class="item"></td>
<td> Misa ng huling hapunan</td>
 
</tr>
</tr>
<tr>
<td class="item"></td>
<td>Pagtatanod sa Santisimo Sacramento</td>
 
</tr>
<tr>
<td class="item">March 25</td>
<td>Good friday</td>
 
</tr>
<tr>
<td class="item"></td>
<td> Pagninilay sa pitong huling wika 12pm</td>
 
</tr>
</tr>
<tr>
<td class="item"></td>
<td>Prusisyon ng Libing</td>
 
</tr>
<tr>
<td class="item"> March 26</td>
<td>Pagdiriwang ng Apoy at Tubig</td>
 
</tr>
<tr>
<td class="item"></td>
<td>Misa ng muling pagkabuhay</td>
 
</tr><tr>
<td class="item">March 27</td>
<td>Misa ng salubong</td>
 
</tr>
<tr>
<td class="categbold" colspan="2">A P R I L *</td>
</tr>
<tr>
<td class="item">No specific date</td>
<td> Parish outing</td>
 
</tr>
<tr>
<td class="categbold" colspan="2">M A Y *</td>
</tr>
<tr>
<td class="item"></td>
<td>Flower devotion and Catechetical month</td>
 
</tr>
<tr>
<td class="item">May 1-31</td>
<td>Flower offering and Rosary</td>
 
</tr>
<tr>
<td class="categbold" colspan="2">J U N E *</td>
</tr>
<tr>
<td class="item"></td>
<td>Buwan ng Nobena sa Karangalan ng kamahal mahalang Puso ni Hesus</td>
 
</tr>
<tr>
<td class="categbold" colspan="2">J U L Y *</td>
</tr>
<tr>
<td class="item"></td>
<td>No Events</td>
 
</tr>
<tr>
<td class="categbold" colspan="2">A U G U S T *</td>
</tr>
<tr>
<td class="item">August 30</td>
<td>Simula ng nobena para sa kaarawan ni Mariang birhen</td>
 
</tr>
<tr>
<td class="categbold" colspan="2">S E P T E M B E R *</td>
</tr>
<tr>
<td class="item">September 8</td>
<td> Kaarawan ng Mariang Birhen</td>
 
</tr>
<tr>
<td class="categbold" colspan="2">O C T O B E R *</td>
</tr>
<tr>
<td class="item"></td>
<td>Month of holy rosary</td>
 
</tr>
<tr>
<td class="categbold" colspan="2">N O V E M B E R *</td>
</tr>
<tr>
<td class="item">November 1-2</td>
<td>Misa alay sa kaluluwa</td>
 
</tr>
<tr>
<td class="item">November 23</td>
<td>Procession of Christ the king</td>
 
</tr>
<tr>
<td class="item">November 29</td>
<td>Start of Novena for Immaculada Conception</td>
 
</tr>
<tr>
<td class="categbold" colspan="2">D E C E M B E R *</td>
</tr>
<tr>
<td class="item">December 8</td>
<td>Fiesta Celebration of Immaculada Conception</td>
 
</tr>
<tr>
<td class="item">December 9</td>
<td>Pagoda, Motorcade and Dalaw Bahay</td>
 
</tr>
<tr>
<td class="item">December 10</td>
<td>Procession of Immaculada Conception</td>
 
</tr>
<tr>
<td class="item">December 15</td>
<td>Start of anticipated mass</td>
 
</tr>
<tr>
<td class="item">December 24</td>
<td>Christmas Vigil</td>
 
</tr>
<tr>
<td class="item">December 25</td>
<td>Christmas day</td>
 
</tr>
<tr>
<td class="item">December 27</td>
<td>Parish Christmas party</td>
 
</tr>
<tr>
<td class="item">December 31</td>
<td>Mass for New years eve.</td>
 
</tr>


</table>
</div>
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
		<p><font color="white" face="Times new roman" size="3">Copyright 2016 Immaculate Concepcion Parish Church. All rights reserved.</font></p>
		</div>
		</div>
		

</div>	

</div>

<div id="overlay"></div>
<div id="popup">
    <div class="popupcontrols">
        <span id="popupclose">X</span>
    </div>
    <div class="popupcontent">
        <h1>Login Here</h1>
	
	
	
<form method ="POST" action = "">
Username:
<input type="TEXT" placeholder="Username"name="un" maxlength="15" ><br><br>
Password:
<input type="password" placeholder="Password"name="pw" maxlength="15" ><br><br>
<input type="image" name="submit" src="PICTURES/loginbutton.png" width="120" height="30" value="Login"/>
<br><br>
<a href="forgotpass.php" target="_top" id="me" >FORGOT PASSWORD?</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="Loginwarning.php" target="_top" id="me" >CHANGE PASSWORD?</a>
</div>
</div>
</form>


<script type="text/javascript">
    // Initialize Variables
    var closePopup = document.getElementById("popupclose");
    var overlay = document.getElementById("overlay");
    var popup = document.getElementById("popup");
 //   var button = document.getElementById("button");
	var me = document.getElementById("me");
	
    // Close Popup Event
    closePopup.onclick = function() {
        overlay.style.display = 'none';
        popup.style.display = 'none';
    };
  //   Show Overlay and Popup
 /*   button.onclick = function() {
        overlay.style.display = 'block';
        popup.style.display = 'block';
    }  */
//	 Show Overlay and Popup
    me.onclick = function() {
        overlay.style.display = 'block';
        popup.style.display = 'block';
    }
	
	
</script>









</body>
</html>