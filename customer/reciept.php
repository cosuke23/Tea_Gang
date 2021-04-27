<?php
include_once("db.php");
include('welcome.php');

?>
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
width:434px;
margin:0 auto;
}
</style>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">
<img src="../images/logo.png" width="100" height="100" style="float:left;"><strong>MCJ Online Ordering System</strong><br><br>Email Us: MCJ@gmail.com<br>Contact: <a href="#">09264660963</a> and call on <a href="#">293-53-62</a>
<br><br><br><br>
<?php
include('db.php');
		$id=$_SESSION['id'];
		$result = mysql_query("SELECT * FROM reservation WHERE confirmation='$id'");
		while($row = mysql_fetch_array($result))
			{
				echo 'Date: '.$row['date'].'<br>';
				echo 'Name: '.$row['firstname'].' '.$row['lastname'].'<br>';
				echo 'Address: '.$row['address'].' '.$row['city'].' '.$row['country'].'<br>';
				echo 'Email: '.$row['email'].'<br>';
				echo 'Contact number:0'.$row['contact'].'<br>';
				echo 'Confirmation number: '.$row['confirmation'].'<br>';
				echo 'Payment Method: '.$row['payment'].'<br>';
			//	echo 'Delivery Type: '.$row['delivery_type'].'<br>';
			
				echo 'note: if the Delivery Type is Outside Manila It has an 500 delivery charge ';
			
	?> 
<table cellpadding="5" cellspacing="0" id="resultTable" border="1" width="100%">
		<tr>
			<td> <strong>Name</strong> </td>
			<td> <strong>Quantity</strong> </td>
						<td> <strong>Price</strong> </td>
									<td> <strong>total</strong> </td>
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
                                        <td>P <?php echo number_format($row['price']); ?> </td>
                                        <td> P<?php echo number_format($total); ?> </td>
                                    </tr>
                                    <?php } ?>    

<?php

$querys=mysql_query("SELECT sum(total) as totals from temp where id = '".$_SESSION['id']."' ");
while($rows=mysql_fetch_array($querys)) {
	
 ?>
 <td> GRAND TOTAL P<?php echo number_format($rows['totals']); ?> </td>
                                     <?php } ?>

	<?php
	}
	?>
	
                               
</table>

</div>
<a href="dashboard.php">Back</a>