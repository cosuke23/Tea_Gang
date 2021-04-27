<html>
<head>
	  <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to toki Milk tea</title>

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
   docprint.document.write('<html><head><title>toki Receipt</title>'); 
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
<img src="../images/toki.png" width="155" height="100" style="float:left;">
<p style=" font-family:Georgia; font-size:20px;"><strong>&nbsp&nbsp Toki milk tea</strong></p>
<p style=" font-family:Georgia; font-size:11px;">&nbsp&nbsp Stall 2 #1263 Dos Castilas Street Sampaloc Manila</p>
<p style=" font-family:Georgia; font-size:11px;">&nbsp&nbsp merlitacanarejoshop@yahoo.com</p>
<p style=" font-family:Georgia; font-size:11px;">&nbsp&nbsp Contact: <a href="#">0927-625-7573</a>/<a href="#">0948-408-5910</a>/<a href="#">871-9674</a></p>
<br><br>

<?php
include('db.php');
include('session.php');
			$id=$_GET['id'];
		
		$result = mysqli_query($conn,"SELECT * FROM reservation WHERE  confirmation='$id'");
		while($row = mysqli_fetch_array($result))
			{
				
				
				echo '<p style=" font-family:Consolas; font-size:15px;">Name:'.$row['firstname'].' '.$row['lastname'].' &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
			    echo 'Date&nbsp:&nbsp'.$row['d_date'].'<br>';
				echo 'Address:&nbsp'.$row['address'].' '.$row['city'].' <br>';
			//	echo 'Email:&nbsp'.$row['email'].'<br>';
				echo 'Contact No.&nbsp:&nbsp'.$row['contact'].'<br>';
				echo 'Transaction No.&nbsp: #'.$row['confirmation'].'&nbsp&nbsp&nbsp&nbsp';
				echo 'Payment Method&nbsp:&nbsp'.$row['payment'].'<br><br>';
			//	echo 'Delivery Type: '.$row['delivery_type'].'<br>';
			
				echo 'Note : Within CAMANAVA area only </p> ';
				
				echo 'Note : Your notification is in your Acounts->DashBoard </p> ';
			
	?> 
<table cellpadding="5" cellspacing="0" id="resultTable" border="1" width="100%">
		<tr>
			<td> <strong>Name</strong> </td>
			<td> <strong>Qty.</strong> </td>

			<td> <strong>Vat</strong> </td>
						<td> <strong>Price</strong> </td>
									<td> <strong>Total</strong> </td>
		</tr>
	<?php
	   

                                    $query=mysqli_query($conn,"SELECT * from temp where id ='$session_id'  ");
                                    while($row=mysqli_fetch_array($query)) { 
									$qty=$row['qty'];
									$price=$row['price'];
									$vat_p='12%';
									$vat=($price*0.12);
									$vat_t=($price+$vat);
									$total=($price*$qty);
									$grand=($price+$vat);
									?>
                                    <tr>
                                        <td> <?php echo $row['name']; ?> </td>
                                        <td> <?php echo $row['qty']; ?> </td>
                                        <td> <?php echo round($vat); ?> </td>
                                        <td>P <?php echo number_format($row['price']); ?>.00 </td>
                                        <td> P<?php echo number_format($grand); ?>.00</td>
                                    </tr>
                                    <?php } ?>    
									
 <td> TOTAL PRICE : P<?php
  $query=mysqli_query($conn,"SELECT sum(price) as total,qty from temp where id ='$session_id'  ");
  $row=mysqli_fetch_array($query);
                                     
									$total=$row['total'];
									$qty=$row['qty'];
									$vat=($total*0.12);
									$grand=($total+$vat)*$qty;

									
									 echo number_format($grand); ?>.00 </td>
                                     <?php } ?>

	
                               
</table>
</br>
<?php
echo 'Note : Payment shall be made immediately, if not it will be cancelled </p> ';
?>
</div><br><br>
<div >
<a href="dashboard.php">
	<center><input type="button" value="Back" style="width:100px; height:100px;"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="javascript:Clickheretoprint()"><input type="button" value="Print" style="width:100px; height:100px;"></a></center>
</div>