<?php

session_start();
include 'welcome.php';
include 'dbc.php';
?>
<html>
<head>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Transaction Receipt</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:434px;
margin:0 auto;
}
</style>
<a href="Home.php">Back to Home</a><br><br>
<div id="print_content"><br><br>
<img src="PICTURES/logo1.jpeg" width="110" height="110" style="float:left;"><br>
&nbsp;<strong>Immaculate Concepcion Parish Church</strong>
&nbsp;&nbsp;&nbsp;<br>Facebook Page: www.facebook.com/immaculateconcepcion.10<br>
Cellphone No.<a href="#">09786896378</a>
&nbsp;<br>Telephone No.<a href="#">277-20-11</a>

<br><br><br><br>
<?php

$sql5 = mysql_query("SELECT  *	 FROM tbl_reservation where query_id='$session_id' and status='pending' ");
							$cnt4 = mysql_num_rows($sql5); // count the output amount
						if ($cnt4 > 0) 
		{
			while($row = mysql_fetch_array($sql5))
			{
				echo 'Mother Name: '.$row['mother_name'].'<br>';
				echo 'Father Name: '.$row['father_name'].'<br>';
				echo 'Transaction No.: '.$row['query_id'].'<br>';
				echo 'Registration Date: '.$row['reg_date'].'<br>';
				echo 'Confirmation: '.$row['status'].'<br><br>';

		    }

		}



?>
</div>
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<input type="button" value="Print" onClick="javascript:Clickheretoprint()">

</head>
</html>