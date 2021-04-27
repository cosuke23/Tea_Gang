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

	
		margin-left: -250px;
		border-radius: 10px;
		background-color: white;
		color: black;
		text-align: left;
		border:2px solid black;
		width: 6500px;
		height: 490px;

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




$sql4 = ("SELECT id,status, selected_date,child_name,child_birthday,current_address,father_name,father_address,father_religion,mother_name,mother_address,mother_religion,wedding_type,godfather_name1,godfather_address1,godfather_religion1,godfather_name2,godfather_address2,godfather_religion2,godfather_name3,godfather_address3,godfather_religion3,godmother_name1,godmother_address1,godmother_religion1,godmother_name2,godmother_address2,godmother_religion2,godmother_name3,godmother_address3,godmother_religion3 FROM tbl_reservation WHERE  query_id='$session_id' and status='pending' ");
//$cnt1 = mysql_num_rows($sql4);


$dynamicList1="";
$result = mysql_query( $sql4);

if (mysql_num_rows($result) > 0 ) {
    // output data of each row
    while($row = mysql_fetch_assoc($result)) {
           
         
			 
		$id= $row["id"]; 
		$stat= $row["status"]; 
		$selected_date=$row["selected_date"] ;
		$child_name=$row["child_name"];
		$child_birthday=$row["child_birthday"] ;
		$current_address=$row["current_address"];
		$father_name=$row["father_name"];
		$father_address =$row["father_address"];
		$father_religion =$row["father_religion"] ;
		$mother_name =$row["mother_name"];
		$mother_address=$row["mother_address"];
		$mother_religion =$row["mother_religion"];
		$wedding_type =$row["wedding_type"];
		$godfather_name1 =$row["godfather_name1"];
		$godfather_address1 =$row["godfather_address1"];
		$godfather_religion1 =$row["godfather_religion1"] ;
		$godfather_name2 =$row["godfather_name2"];
		$godfather_address2 =$row["godfather_address2"] ;
		$godfather_religion2 =$row["godfather_religion2"];
		$godfather_name3 =$row["godfather_name3"];
		$godfather_address3 =$row["godfather_address3"];
		$godfather_religion3 =$row["godfather_religion3"];
		$godmother_name1=$row["godmother_name1"];
		$godmother_address1 =$row["godmother_address1"];
		$godmother_religion1 =$row["godmother_religion1"];
		$godmother_name2 =$row["godmother_name2"];
		$godmother_address2=$row["godmother_address2"];
		$godmother_religion2=$row["godmother_religion2"];
		$godmother_name3 =$row["godmother_name3"];
		$godmother_address3=$row["godmother_address3"];
		$godmother_religion3=$row["godmother_religion3"];

            
        
        
   
    $dynamicList1 .= '
             
            
        
<td width="2.5%" valign="top"><a rel="facebox" href="editstatus.php?id='.$id.'">Cancel/Re-Submit</a> </div></td>
			<td width="1%" valign="top"> ' .$id  . '</td>
			<td width="1%" valign="top"> ' .$stat. '</td>
		<td width="2.5%" valign="top"> ' .$selected_date. '</td>
		<td width="2.5%" valign="top"> ' .$child_name. '</td>
		<td width="2%" valign="top"> ' .$child_birthday. '</td>
		<td width="4%" valign="top"> ' .$current_address. '</td>
		<td width="2.5%" valign="top"> ' .$father_name. '</td>
		<td width="4%" valign="top"> ' .$father_address . '</td>
		<td width="2%" valign="top"> ' .$father_religion . '</td>
		<td width="2.5%" valign="top"> ' .$mother_name. '</td>
		<td width="4%" valign="top"> ' .$mother_address. '</td>
		<td width="2%" valign="top"> ' .$mother_religion . '</td>
		<td width="1.5%" valign="top"> ' .$wedding_type. '</td>
		<td width="2.5%" valign="top"> ' .$godfather_name1. '</td>
		<td width="5%" valign="top"> ' .$godfather_address1. '</td>
		<td width="2%" valign="top"> ' .$godfather_religion1. '</td>
		<td width="2.5%" valign="top"> ' .$godfather_name2. '</td>
		<td width="4%" valign="top"> ' .$godfather_address2 . '</td>
		<td width="2%" valign="top"> ' .$godfather_religion2 . '</td>
		<td width="2.5%" valign="top"> ' .$godfather_name3 . '</td>
		<td width="4%" valign="top"> ' .$godfather_address3. '</td>
		<td width="2%" valign="top"> ' .$godfather_religion3 . '</td>
		<td width="2.5%" valign="top"> ' .$godmother_name1. '</td>
		<td width="4%" valign="top"> ' .$godmother_address1. '</td>
		<td width="2%" valign="top"> ' .$godmother_religion1 . '</td>
		<td width="2.5%" valign="top"> ' .$godmother_name2 . '</td>
		<td width="4%" valign="top"> ' .$godmother_address2. '</td>
		<td width="2%" valign="top"> ' .$godmother_religion2. '</td>
		<td width="2.5%" valign="top"> ' .$godmother_name3 . '</td>
		<td width="4%" valign="top"> ' .$godmother_address3. '</td>
		<td width="2%" valign="top"> ' .$godmother_religion3. '</td>
	

	
	
	

            </tr>
   ';
   
   
   
   
    }
} else {
    $dynamicList1 = "You don't have records yet!";
}
	
	
	






?>  

                              <th  valign="top" bgcolor="#C1DAD7"><b>Reservation Transaction</b></th>
							  <br>
							  <br>


<table  width="100%" cellspacing="7" cellpadding="7" class="hoverTable" id="tblDatas">
             <tr>
            
           <th  valign="top" bgcolor="#C1DAD7"><b>Action</b></th>
           <th  valign="top" bgcolor="#C1DAD7"><b>ID no.</b></th>
		   <th  valign="top" bgcolor="#C1DAD7"><b>Status</b></th>
           <th  valign="top" bgcolor="#C1DAD7"><b>Selected Date</b></th>
           <th valign="top" bgcolor="#C1DAD7" ><b>Child Name</b></th> 
           <th  valign="top" bgcolor="#C1DAD7" ><b>Child Birthday</b></th>
		   <th  valign="top" bgcolor="#C1DAD7"><b>Current Address</b></th>
		   
           <th  valign="top" bgcolor="#C1DAD7"><b>Father Name</b></th>
           <th  valign="top" bgcolor="#C1DAD7"><b>Address</b></th>
           <th valign="top" bgcolor="#C1DAD7" ><b>Religion</b></th>
		   
           <th  valign="top" bgcolor="#C1DAD7" ><b>Mother Name</b></th>
           <th  valign="top" bgcolor="#C1DAD7"><b>Address</b></th>
           <th valign="top" bgcolor="#C1DAD7" ><b>Religion</b></th>
		   
           <th valign="top" bgcolor="#C1DAD7"><b>Saan Kasal</b></th>
		   
		   <th  valign="top" bgcolor="#C1DAD7" ><b>Ninong1 Name</b></th>
           <th  valign="top" bgcolor="#C1DAD7"><b>Address</b></th>
           <th valign="top" bgcolor="#C1DAD7" ><b>Religion</b></th>
		   
		   <th  valign="top" bgcolor="#C1DAD7" ><b>Ninong2 Name</b></th>
           <th  valign="top" bgcolor="#C1DAD7"><b>Address</b></th>
           <th valign="top" bgcolor="#C1DAD7" ><b>Religion</b></th>
		   
		   <th  valign="top" bgcolor="#C1DAD7" ><b>Ninong3 Name</b></th>
           <th  valign="top" bgcolor="#C1DAD7"><b>Address</b></th>
           <th valign="top" bgcolor="#C1DAD7" ><b>Religion</b></th>
		   
		   		   <th  valign="top" bgcolor="#C1DAD7" ><b>Ninang1 Name</b></th>
           <th  valign="top" bgcolor="#C1DAD7"><b>Address</b></th>
           <th valign="top" bgcolor="#C1DAD7" "><b>Religion</b></th>
		   
		   <th  valign="top" bgcolor="#C1DAD7" ><b>Ninang2 Name</b></th>
           <th  valign="top" bgcolor="#C1DAD7"><b>Address</b></th>
           <th valign="top" bgcolor="#C1DAD7" ><b>Religion</b></th>
		   
		   <th  valign="top" bgcolor="#C1DAD7" ><b>Ninang3 Name</b></th>
           <th  valign="top" bgcolor="#C1DAD7"><b>Address</b></th>
           <th valign="top" bgcolor="#C1DAD7" ><b>Religion</b></th>
           </tr>       
       <tr>
        
           
        

            </tr>
            <?php echo $dynamicList1; ?>

				
			</table>
			
			</div>
			
			
			
			
	
	
</div>









</div>












</body>
</html>