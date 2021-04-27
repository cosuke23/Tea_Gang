<html>
<head>
	  <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to MCJ's FlowerShop </title>

        <!-- CSS -->
  
        
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="shortcut icon" href="images/logo.png">
<!--Take a look -->
                <link rel="stylesheet" type="text/css" href="cssi/default.css" />
        <link rel="stylesheet" type="text/css" href="cssi/component.css" />
        <script src="jsi/modernizr.custom.js"></script>

  
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>MCJ Receipt</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:450px;
margin:0 auto;
}
</style>
<br>
<div id="print_content">
<img src="images/mcjlogopri.jpg" width="155" height="100" style="float:left;">
<p style=" font-family:Georgia; font-size:20px;"><strong>&nbsp&nbsp MCJ FlowerShop Online</strong></p>
<p style=" font-family:Georgia; font-size:11px;">&nbsp&nbsp Stall 2 #1263 Dos Castilas Street Sampaloc Manila</p>
<p style=" font-family:Georgia; font-size:11px;">&nbsp&nbsp merlitacanarejoshop@yahoo.com</p>
<p style=" font-family:Georgia; font-size:11px;">&nbsp&nbsp Contact: <a href="#">0927-625-7573</a>/<a href="#">0948-408-5910</a>/<a href="#">871-9674</a></p>
<br><br>

<?php
include('db.php');
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM reservation WHERE confirmation='$id'");
		while($row = mysql_fetch_array($result))
			{
				
				
				echo '<p style=" font-family:Consolas; font-size:15px;">Name:'.$row['firstname'].' '.$row['lastname'].' &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
			    echo 'Date&nbsp:&nbsp'.$row['date'].'<br>';
				echo 'Address:&nbsp'.$row['address'].' '.$row['city'].' '.$row['country'].'<br>';
			//	echo 'Email:&nbsp'.$row['email'].'<br>';
				echo 'Contact No.&nbsp:&nbsp'.$row['contact'].'<br>';
				echo 'Transaction No.&nbsp: #'.$row['confirmation'].'&nbsp&nbsp&nbsp&nbsp';
				echo 'Payment Method&nbsp:&nbsp'.$row['payment'].'<br><br>';
			//	echo 'Delivery Type: '.$row['delivery_type'].'<br>';
			
				echo 'Note : Outside Manila additional charge 500.00 </p> ';
			
	?> 
<table cellpadding="5" cellspacing="0" id="resultTable" border="1" width="100%">
		<tr>
			<td> <strong>Name</strong> </td>
			<td> <strong>Qty.</strong> </td>
						<td> <strong>Price</strong> </td>
									<td> <strong>Total</strong> </td>
		</tr>
	<?php
session_start();
	   

                                    $query=mysql_query("SELECT * from temp where cus_name = '".$_SESSION['Name']."' ");
                                    while($row=mysql_fetch_array($query)) { 
									$qty=$row['qty'];
									$price=$row['price'];
									$total=($price*$qty);
									?>
                                    <tr>
                                        <td> <?php echo $row['name']; ?> </td>
                                        <td> <?php echo $row['qty']; ?> </td>
                                        <td>P <?php echo number_format($row['price']); ?>.00 </td>
                                        <td> P<?php echo number_format($total); ?>.00</td>
                                    </tr>
                                    <?php } ?>    
									

<?php

$querys=mysql_query("SELECT sum(total) as totals from temp where id = '".$_SESSION['id']."' ");
while($rows=mysql_fetch_array($querys)) {
	
 ?>
 <td> TOTAL PRICE : P<?php echo number_format($rows['totals']); ?>.00 </td>
                                     <?php } ?>

	<?php
	}
	?>
	
                               
</table>

</div><br><br>
<div style=" margin-left:565px;";>
<a href="dashboard.php"><input type="button" value="Back" style="width:100px; height:100px;"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="javascript:Clickheretoprint()"><input type="button" value="Print" style="width:100px; height:100px;"></a>
</div>