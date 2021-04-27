<!DOCTYPE html>
<html lang="en">
<?php include('header_admin.php'); ?>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to MCJ's FlowerShop </title>

        <!-- CSS -->
  <!--slider -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <!--end slider -->

        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="shortcut icon" href="images/logo.png">
<!--Take a look -->
                <link rel="stylesheet" type="text/css" href="cssi/default.css" />
        <link rel="stylesheet" type="text/css" href="cssi/component.css" />
        <script src="jsi/modernizr.custom.js"></script>
<!-- end Take a look -->
    </head>

    <body style="background:white; ">
        
        <!-- Top menu -->
	 

        <br>

        <br>

        <br>
        <br>
        <br>

        <!-- Slider -->
		<div class="container">
        <div class="slider-container"  style="background:url('images/bg2.png')">
                
                    <div class="col-sm-10 col-sm-offset-1 slider">
                        <div class="flexslider">
                            <ul class="slides"> 
                            <li data-thumb="">
                                    <img src="assets/img/slider/f1/f1.jpg">
                                </li>
                              <li data-thumb="">
                                    <img src="assets/img/slider/f1/f2.jpg">
                                </li>
                              <li data-thumb="">
                                    <img src="assets/img/slider/f1/f3.png">
                                </li>
                              <li data-thumb="">
                                    <img src="assets/img/slider/f1/f4.png">
                                </li>
                              
                                <li data-thumb="">
                                    <img src="assets/img/slider/f1/f5.png">
                                </li>
                              
                              <li data-thumb="">
                                    <img src="assets/img/slider/f1/f6.jpg">
                                </li>
                              <li data-thumb="">
                                    <img src="assets/img/slider/f1/f7.jpg">
                                </li>
                              <li data-thumb="">
                                    <img src="assets/img/slider/f1/f8.jpg">
                                </li>
                              <li data-thumb="">
                                    <img src="assets/img/slider/f1/f9.jpg">
                                </li>
                              <li data-thumb="">
                                    <img src="assets/img/slider/f1/f0.jpg">
                                </li>
                              <li data-thumb="">
                                    <img src="assets/img/slider/f1/f11.jpg">
                                </li>
                              <li data-thumb="">
                                    <img src="assets/img/slider/f1/f12.jpg">
                                </li>
                              
                                
                            </ul>
                        </div>
                    </div>
               
            </div>
        </div>
		</div>
        </div>
        <!-- Presentation -->
        <div class="presentation-container">
        	<div class="container">
        		<div class="row">
	        		<div class="col-sm-12 wow fadeInLeftBig">
	            		<h1><span class="violet" style="color:blue;">"The Best Selling Flowers"</span></h1>
	            	</div>
            	</div>
        	</div>
        </div>

        <!-- Services -->

        <div class="services-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-3">
		                <div class="grid cs-style-7" >
    
                     <div class="service wow fadeInLeft">
		                    <h3 style="color:red;">Rose</h3>
                                                     <?php
                             include('db.php');
  $result2 = mysql_query("SELECT * FROM flowers where flower_id=1 ");
while($row2 = mysql_fetch_array($result2))
    {
      $flower=$row2['flower_id'];
    $price=$row2['price'];
    $name=$row2['name'];
  $img=$row2['img'];
    //echo '<span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">'.$row2['description'].'</span>';
    
  ?>
  <figure>
                    
		                    <p><img src="assets/img/slider/f2/<?php echo $img?>" alt="flower" title="<?php echo $name?>" /></p>
		                   <figcaption>
                        
                            <a class="big-link-1" href="rose.php">VIEW</a>
                            </figcaption>
                    </figure>
		                </div>
                          <?php
                    }
                    ?>
					</div>
        </div>
					<div class="col-sm-3">
		                <div class="grid cs-style-7">
		                    <div class="service-icon"></div>
                        <div class="service wow fadeInRight">
		                    <h3 style="color:yellow">Sunflower</h3>
                                      <?php
                             include('db.php');
  $result2 = mysql_query("SELECT * FROM flowers where flower_id=4 ");
while($row2 = mysql_fetch_array($result2))
    {
      $flower=$row2['flower_id'];
    $price=$row2['price'];
    $name=$row2['name'];
  $img=$row2['img'];
    //echo '<span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">'.$row2['description'].'</span>';
    
  ?>
  <figure>
		                      <p><img src="assets/img/slider/f2/<?php echo $img?>" alt="flower" title="<?php echo $name?>" /></p>
                          <figcaption >
                                      <p>......it is a asun flower</p>
                          <a class="big-link-1" href="sunflower.php">VIEW</a>
                            </figcaption>
                    </figure>
		                </div>
                        <?php
                    }
                    ?>
	                </div>
                </div>
	                <div class="col-sm-3">
		                <div class="grid cs-style-7">
                      <div class="service wow fadeInDown">
		                    <div class="service-icon"></div>
		                    <h3 style="color:blue;">Carnation</h3>
                                                <?php
                             include('db.php');
  $result2 = mysql_query("SELECT * FROM flowers where flower_id=3 ");
while($row2 = mysql_fetch_array($result2))
    {
      $flower=$row2['flower_id'];
    $price=$row2['price'];
    $name=$row2['name'];
  $img=$row2['img'];
    //echo '<span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">'.$row2['description'].'</span>';
    
  ?>
<figure>
                              <p><img src="assets/img/slider/f2/<?php echo $img?>" alt="flower" title="<?php echo $name?>" /></p>
                          <figcaption>
  		                    <a class="big-link-1" href="carnation.php">VIEW</a>
                                        </figcaption>
                    </figure>
                
		                </div>
                        <?php
                    }
                    ?>
	                </div>
                </div>
	                <div class="col-sm-3" >
		                <div class="grid cs-style-7">
                      <div class="service wow fadeInUp">
		                    <div class="service-icon" ></div>
                                 <h3 style="color:violet;">Lavander</h3>
                                 <?php  $result2 = mysql_query("SELECT * FROM flowers where flower_id=2 ");
while($row2 = mysql_fetch_array($result2))
    {
      $flower=$row2['flower_id'];
    $price=$row2['price'];
    $name=$row2['name'];
  $img=$row2['img'];
    //echo '<span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">'.$row2['description'].'</span>';
    
  ?>
		               <figure>
                              <p><img src="assets/img/slider/f2/<?php echo $img?>" alt="flower" title="<?php echo $name?>" /></p>
                          <figcaption>
     <a class="big-link-1" href="php">lavander</a>
                                   </figcaption>
                    </figure>
          
		                </div>
                        <?php
                    }
                    ?>
	                </div>
                </div>
	            </div>
	        </div>
        </div>
		<br>

        <div class="services-container">
          <div class="container" style="background-color:blue;" pull-right>
              <div class="row">
        <h4 style="color:red;">About Us</h4>
                        <div class="footer-box-text">
                          <p>
                               
                                "About the Shop"  "About the Shop"  "About the Shop"  "About the Shop"  "About the Shop" "About the Shop"
                                 "About the Shop"
                                  "About the Shop"
                                   "About the Shop"
                                    "About the Shop"
                                     "About the Shop"
                                      "About the Shop"
                                       "About the Shop"
                                        "About the Shop"
                                         "About the Shop"
              </p>
                
              </div>
            </div>
          </div>
        <div id="auto">
</div>
        <!-- Footer -->
        <footer style="background-color:pink; color:blue;">

 <div class="col-sm-5 contact-address wow fadeInUp">
                      <h3>We Are Here</h3>
                      <div><img src="images/map.png"></div>
            <div class="container" style="background-color:violet; color:black;">
                <div class="row">
                    <div class="col-sm-6 footer-box">
                        </div>
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
	
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>