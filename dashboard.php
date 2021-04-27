<!DOCTYPE html>
<?php
 include_once('db.php');
 include('headers.php');

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
                        <p>This is your Account.</p>
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
              <h3>ordered flower/s</h3>
              <table class="table table-bordered table-hover">
                <tr class="danger">
                  <th>product</th>
                  <th>quantity</th>
                  <th>price</th>
                  <th>total</th>
                  <th>Action</th>
                
                                <?php

                                    $query=mysql_query("SELECT * from temp where id = '".$_SESSION['id']."' ");
                                    while($row=mysql_fetch_array($query)) { ?>
                                    <tr>
                                        <td> <?php echo $row['name']; ?> </td>
                                        <td> <?php echo $row['qty']; ?> </td>
                                        <td> <?php echo $row['price']; ?> </td>
                                        <td> <?php echo $row['total']; ?> </td>
                                        <td style="text-align:center;"> <a class="btn btn-primary" href='cancelapp.php?id=<?php echo $row['Id']; ?>'>Cancel</a> </td>
                                    </tr>
                                    <?php } ?>    

                                    
                </tr>
              </table>
           
        <div id="auto">
   <footer style=" color:blue;">
            <div class="container" style="background:url('images/flow.jpg')">
                <div class="row">
                    <div class="col-sm-6 footer-box">
                        <h4 style="color:white;">About Us</h4>
                        <div class="footer-box-text">
                          <p>
                                "About the Shop"
              </p>
                        </div>
                    </div>
                    <div class="col-sm-6 footer-box">
                        <div class="footer-box-text footer-box-text-contact">
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

                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">

                      <p>" "</p>
                      <p>" "</p>
                      <p>Phone:"" </p>
                    </div>
                </div>
            </div>
        </footer>
  
</div>
        <!-- Footer -->
        <footer style=" color:blue;">
            <div class="container" style="background-color:violet; color:black;">
                <div class="row">
                    <div class="col-sm-6 footer-box">
                        <div class="footer-box-text">
	                                      <h3>We Are Here</h3>
                      <div><a rel="facebox" href="map.php"><img  src="images/map.png"></a></div>
                   <br>     </div>
                    </div>
                    <div class="col-sm-6 footer-box">
                        <h4 style="color:white;">Contact Us</h4>
                        <div class="footer-box-text footer-box-text-contact">
	                        <p><i class="fa fa-map-marker"></i> Address:"of the flower-shop"</p>
	                        <p><i class="fa fa-phone"></i> Phone:" "</p>
	                        <p><i class="fa fa-envelope"></i> Email: <a href="">"email"</a></p>
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
                        <p>Copyright 2016 PROJMAN - All rights reserved.</p>
                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">
                     <a href="https://www.facebook.com/kitkat's.flower">Like Us on <i class="fa fa-facebook-square"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>


    </body>

</html>