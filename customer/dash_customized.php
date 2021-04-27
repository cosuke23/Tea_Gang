<!DOCTYPE html>
<?php
 include_once('db.php');
 include('header.php');
 error_reporting(0);

session_start();

?>

<html lang="en">
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

  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>


<!-- facebox chief-->
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
  <style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
}

  </style>


    </head>

    <body>
        
        <!-- Top menu -->
	 

        <br>

        <br>
		<br>
     <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-tasks"></i>
                        <h1>Welcome '<?php echo $_SESSION['Name']; ?>' </h1><br>
                        <a class="btn btn-primary" href="dashboard.php?type=basket&types=arrangement">Arrangement</a><a class="btn btn-primary" href="dash_events.php?type=basket&types=arrangement">Events</a>
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
              <h3>Customized flower/s</h3>
              <table class="table table-bordered table-hover">
                <tr class="danger">
                  <th>product</th>
                  <th>status</th>
                  <th>quantity</th>
                  <th>price</th>
                  <th>total</th>
                  <th>Action</th>
                
                                <?php

                                    $query=mysql_query("SELECT * from cus_temp where id = '".$_SESSION['id']."'  order by price DESC ");
                                    while($row=mysql_fetch_array($query)) {
$qty=$row['qty'];
									$price=$row['price'];
									$total=($price*$qty);										?>
                                    <tr>
                                        <td><img src="../assets/img/slider/new folder/<?php echo $row['img']; ?>">  </td>
                                        <td> <?php echo $row['status']; ?> </td>
                                        <td> <?php echo $row['qty']; ?> </td>
                                        <td> <?php echo $row['price']; ?> </td>
                                        <td> <?php echo number_format($total); ?> </td>
                                        <td style="text-align:center;"> <a class="btn btn-primary" href='cancel_cus.php?cnt=<?php echo $row['cnt']; ?>'>Cancel</a> </td>
                                    </tr>
                                    <?php } ?>    

                                    
                </tr>
              </table>
           
        <div id="auto">
   <footer style=" color:Black;">
            <div class="container" style="background-color:#FFDAB9">
                </div>
                <div class="row">
                  <div class="col-sm-12 wow fadeIn">
                    <div class="footer-border"></div>

                  </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">

                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">

                    </div>
                </div>
            </div>
        </footer>
  
</div>
        <!-- Footer -->
        <footer style=" color:black;">
            <div class="container" style="background-color:#FFA07A; ">
                <div class="row">
                    <div class="col-sm-6 footer-box">
                        <div class="footer-box-text">
	                               <h3 style="color:black;"><b>We Are Here</b></h3>
                      <div><a rel="facebox" href="map.php"><img  src="images/map.png"></a></div>
                   <br>     </div>
                    </div>
                    <div class="col-sm-6 footer-box">
					<br>
                        <h3 style="color:black;"><b>Contact Us</b></h3>
                        <div class="footer-box-text footer-box-text-contact">
	                        <p><i class="fa fa-map-marker"></i><b> Address:</b> Stall 2# 1263 Dos Castillas Street Sampaloc, Manila <br>(Besides Infant Jesus Hospital)</p>
	                        <p><i class="fa fa-phone"></i> <b>Phone:</b> 871-9674/0927-625-7573/0948-006-5910</p>
	                        <p><i class="fa fa-envelope"></i> <b>Email:</b> <a href="">merlitacanarejoshop@yahoo.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-sm-12 wow fadeIn">
                		<div class="footer-border"></div>
                	</div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p>Copyright 2016 - All rights reserved.</p>
                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">
					<span text="pull-right">Like Us on. </span>
                    <div class="social-icons pull-right">
					
                            <ul class="nav navbar-nav">
							
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
 
                    </div>
                </div>
            </div>
        </footer>

        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>


    </body>

</html>