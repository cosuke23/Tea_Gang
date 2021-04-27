<?php
session_start();
include 'welcome.php';
include 'dbc.php';
page_protect();
?>
<html>
<title>
Appointment Query
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
#logout{

		float:left;
      	text-align:center;
      	margin-left:530px;
      	margin-top:-20px;
     	border-left:0px;
     	padding-left:0px;
}

.class4 {

		margin-top: 0px;
		margin-left: -90px;
		border-radius: 10px;
		background-color: white;
		color: black;
		text-align: left;
		border:2px solid black;
		width: 1100px;
		height: 600px;
	background-attachment: fixed;
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
	
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}	
	

	
	


</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />  
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" m<html>

<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />  
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>






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
<div style="margin-left:242; margin-top:; width:909; height:50; background-color:#00688B; font-size:20px; ">
<br>
<th  valign="top" bgcolor="#C1DAD7"><a href="userquery1.php"><b>Reservation Transaction</b></a></th>
<th>|</th>
<th  valign="top" bgcolor="#C1DAD7"><a href="userquery.php"><b>Appointment Transaction</b></a></th>
<th>|</th>
<th  valign="top" bgcolor="#C1DAD7"><a href="userqueryacc.php"><b>Accepted Transaction</b></a></th>
</div>
<div id="MidIns">







		<div class="class4"><br>
<?php



/////////////////////////////////////////////////////////////////////////////

$sql3 = ("SELECT appointment_number,status,date,event_type,fullname,contact,email FROM tbl_appointment WHERE query_id='$session_id' and status='pending'");
//$cnt1 = mysql_num_rows($sql4);


$dynamicList="";
$result = mysql_query( $sql3);

if (mysql_num_rows($result) > 0 ) {
    // output data of each row
    while($row = mysql_fetch_assoc($result)) {
           
        $id= $row["appointment_number"];
		$date= $row["date"];
		$event_type= $row["event_type"];
		$fullname= $row["fullname"];
		$contact= $row["contact"];
		$email= $row["email"];
		$stat= $row["status"];
		
            
        
        
   
    $dynamicList .= '
             
            
        
<td width="10%" valign="top"><a rel="facebox" href="editstatusapp.php?id='.$id.'">Cancel/Re-Submit</a> </div></td>
			<td width="10%" valign="top"> ' .$id. '</td>
			<td width="10%" valign="top"> ' .$stat. '</td>
		<td width="10%" valign="top"> ' .$date. '</td>
		<td width="10%" valign="top"> ' .$event_type. '</td>
		<td width="10%" valign="top"> ' .$fullname. '</td>
		<td width="10%" valign="top"> ' .$contact. '</td>
		<td width="10%" valign="top"> ' .$email. '</td>	
	

	
	
	

            </tr>
   ';
   
   
   
   
    }
} else {
    $dynamicList = "You don't have records yet!";
}






?>  


<div id="td">
                              <th  valign="top" bgcolor="#C1DAD7"><b>Appointment Transaction</b></th>
							  <br>
							  <br>

<table  width="100%" cellspacing="7" cellpadding="7" class="hoverTable" id="tblDatas">
             <tr>
           <th  valign="top" bgcolor="#C1DAD7"><b>Action</b></th>
           <th  valign="top" bgcolor="#C1DAD7"><b>ID no.</b></th>
		   <th  valign="top" bgcolor="#C1DAD7"><b>Status</b></th>
           <th  valign="top" bgcolor="#C1DAD7"><b>Selected Date</b></th>
		   <th  valign="top" bgcolor="#C1DAD7" ><b>Event Type</b></th>
		   <th valign="top" bgcolor="#C1DAD7" ><b>Full Name</b></th> 
		   <th  valign="top" bgcolor="#C1DAD7">Contact No.</b></th>
		              <th  valign="top" bgcolor="#C1DAD7" ><b>Email</b></th>
		   
           </tr>       
       <tr>
        
           
        

            </tr>
            <?php echo $dynamicList; ?>

				
			</table>
			
			</div>

			
			
			
			
	
	
</div>









</div>












</body>
</html>