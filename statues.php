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
BRACELET
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
		background-image:url("PICTURES/black4.jpg");
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
<div id="WhiteDivision">

<ul>
		<li><a href="Home.php" target="_top">Home</a></li>
		<li><a href="AboutUs.php" target="_top">About Us</a></li>
		<li><a href="Events.php" target="_top">Events</a></li>
		<li><a href="Items.php" target="_top">Products</a></li>
		<li><a href="SignUp.php" target="_top">Appointment</a></li>
		<li><a href="SignUp.php" target="_top">Reservation</a></li>	
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
<p align="justify"><font color="Black" face="Times new roman" size="3">"But Jesus looked at them and said to them, ???With men this is impossible, but with God all things are possible.'"</font></p>
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
<font size="3"><b>Virgin Mary Statue</b><br>Php 500</font>
<br><br><br><br><br><br>
</div>
<div id="picture1">

		<img src="PICTURES/statue1.jpeg" width="200" height="250">		
</div>
<div class="description">
<br><br><br><br><br><br><br>
<font size="3"><b>Two Angels</b><br>Php 350</font>
<br><br><br><br><br><br><br><br>
</div>
<div id="picture2">
	
	<img src="PICTURES/statue2.jpg" width="200" height="250">

</div>
<div class="description1">
<br><br><br><br><br>
<font size="3"><b>Virgin Mary Statue</b><br>Php 350</font>
<br><br><br><br><br><br>
</div>
<div id="picture3">

		<img src="PICTURES/statue3.jpg" width="200" height="250">

</div>
<div class="description2">
<br><br><br><br><br><br><br>
<font size="3"><b>jesus Statue</b><br>Php 500</font>
<br><br><br><br><br><br>
</div>
<div id="picture4">

		<img src="PICTURES/statue4.jpg" width="200" height="250">

</div>
<div class="description3">
<br><br><br><br><br><br><br><br>
<font size="3"><b>jesus Statue</b><br>Php 550</font>
<br><br><br><br><br><br>
</div>
<div id="picture5">

		<img src="PICTURES/statue5.jpg" width="200" height="250">

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
		<p><font color="white" face="Times new roman" size="3">Copyright 2016 Immaculate Concepcion Parish Church. All rights reserved.</font></p>
		</div>
		</div>
		

</div>	



</body>



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
<input type="password"placeholder="Password" name="pw" maxlength="15" ><br><br>
<input type="image" name="submit" src="PICTURES/loginbutton.png" width="120" height="30" value="Login"/>
<br><br>
<a href="forgotpass.php" target="_top" id="me" >FORGOT PASSWORD?</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="Loginwarning.php" target="_top" id="me" >CHANGE PASSWORD?</a></div>
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





</html>
