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
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
}

  </style>

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
 <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-tasks"></i>
                        <p>Orders</p>
                        <a href="arrangement.php">Basket</a>|| <a href="abox.php">Box</a> ||<a href="abouq.php">bouquet</a>||<a href="avase.php">Vase</a>||<a href="astand.php">Standing</a>
                    </div>
                </div>
            </div>
        </div>
  <div class="services-full-width-container">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 services-full-width-text wow fadeInLeft">
                      
                  </div>
              </div>
          </div>
        </div>

        <!-- Services Half Width Text -->
        <div class="services-half-width-container">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 services-half-width-text wow fadeInLeft">
            <div class="table-responsive">
           
              <table class="table table-bordered table-hover">
                <tr class="danger">
                  <th>product</th>
                  <th>quantity</th>
                  <th>price</th>
                  <th>Action</th>
                
                                <?php
include('db.php');
                                    $query=mysql_query("SELECT * from basket  ");
                                    while($row=mysql_fetch_array($query)) { ?>
                                    <tr>
                                        <td> <?php echo $row['name']; ?> </td>
                                        <td> <?php echo $row['qty']; ?> </td>
                                        <td> <?php echo $row['price']; ?> </td>
                           <td style="text-align:center;"> <a class="btn btn-primary" href='cancelapp.php?id=<?php echo $row['Id']; ?>'>ADD</a> <a class="btn btn-primary" href='cancelapp.php?id=<?php echo $row['Id']; ?>'>EDIT</a> <a class="btn btn-primary" href='cancelapp.php?id=<?php echo $row['Id']; ?>'>DELETE</a></td>             </tr>
                                    <?php } ?>    

                                    
                </tr>
              </table>
    
</div>
<a href="../index.php">Back</a>