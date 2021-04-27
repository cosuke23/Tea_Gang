
<html lang="en">
<?php include('header.php'); ?>
<?php include('boots.php'); ?>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to Tea Gang</title>

        <!-- CSS -->
      <link rel="stylesheet" href="jzon-special/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="jzon-special/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="jzon-special/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="jzon-special/css/custom.css">
        
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="shortcut icon" href="images/toki.png">
<!--Take a look -->
                <link rel="stylesheet" type="text/css" href="cssi/default.css" />
        <link rel="stylesheet" type="text/css" href="cssi/component.css" />
        <script src="jsi/modernizr.custom.js"></script>
  <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>

  <!-- End WOWSlider.com HEAD section -->


<!-- facebox chief-->
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

  <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
  <div id="wowslider-container1">
  <div class="ws_images"><ul>
    <li><img src="data1/images/tea1.jpg" alt="1" title="1" id="wows1_1"/></li>  
<li><img src="data1/images/tea2.jpg" alt="2" title="2" id="wows1_1"/></li>   
<li><img src="data1/images/tea3.jpg" alt="2" title="3" id="wows1_1"/></li>
<li><img src="data1/images/tea4.jpg" alt="3" title="4" id="wows1_2"/></li>
<li><img src="data1/images/tea5.jpg" alt="4" title="5" id="wows1_3"/></li>
<li><img src="data1/images/tea6.jpg" alt="5" title="6" id="wows1_1"/></li>
<li><img src="data1/images/matcha1.jpg" alt="6" title="6" id="wows1_1"/></li>
<li><img src="data1/images/matcha2.jpg" alt="7" title="6" id="wows1_1"/></li>
<li><img src="data1/images/matcha3.jpg" alt="8" title="6" id="wows1_1"/></li>
<li><img src="data1/images/matcha4.jpg" alt="8" title="6" id="wows1_1"/></li>
<li><img src="data1/images/matcha5.jpg" alt="9" title="6" id="wows1_1"/></li>
<li><img src="data1/images/matcha6.jpg" alt="10" title="6" id="wows1_1"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="1"><img src="data1/tooltips/tea1.jpg" alt="1"/></a>
<a href="#" title="2"><img src="data1/tooltips/tea2.jpg" alt="2"/></a>
<a href="#" title="3"><img src="data1/tooltips/tea3.jpg" alt="3"/></a>
<a href="#" title="4"><img src="data1/tooltips/tea4.jpg" alt="4"/></a>
<a href="#" title="5"><img src="data1/tooltips/tea5.jpg" alt="5"/></a>
<a href="#" title="6"><img src="data1/tooltips/tea6.jpg" alt="6"/></a>
<a href="#" title="7"><img src="data1/tooltips/matcha1.jpg" alt="7"/></a>
<a href="#" title="8"><img src="data1/tooltips/matcha2.jpg" alt="8"/></a>
<a href="#" title="9"><img src="data1/tooltips/matcha3.jpg" alt="9"/></a>
<a href="#" title="10"><img src="data1/tooltips/matcha4.jpg" alt="10"/></a>
<a href="#" title="11"><img src="data1/tooltips/matcha5.jpg" alt="11"/></a>
<a href="#" title="12"><img src="data1/tooltips/matcha6.jpg" alt="12"/></a>
</div></div>
  <div class="ws_shadow"></div>
  </div>  
  <script type="text/javascript" src="engine1/wowslider.js"></script>
  <script type="text/javascript" src="engine1/script.js"></script>

  </div>  
  <!-- End WOWSlider.com BODY section -->
</br>
   <div id="menu" class="section lb">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h1>Menu</h1>
                 <?php
                 error_reporting(0);
                 session_start();

                                   foreach ($_SESSION["products"] as $cart_itm)
    {
      $total = 0;
      
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $img=$cart_itm["img"];
$code=$cart_itm["code"];

        $url="cart.php";

                $total = ($total + $subtotal);
                $totals = ($totals + $total);
              }
     ?>
                <h3>Total:<?php echo number_format($totals) ?> <h3>
           <p>View:<a href="cart.php" style="background:none"><i class="fa fa-shopping-cart"></i> Cart</a></p>
            </div><!-- end title -->

            <div class="row">
                                  <?php
                             include('db.php');
  $result2 = mysqli_query($conn,"SELECT * FROM milk_tea where status ='Active'");
while($row2 = mysqli_fetch_array($result2))
    {
      $tea_id=$row2['tea_id'];
    $price=$row2['price'];
    $name=$row2['name'];
  $img=$row2['img'];
   $current_url = base64_encode($url="http://localhost/xampp/tea%20gang/index.php");
    //echo '<span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">'.$row2['description'].'</span>';
    
  ?>     
        <div class="col-md-3">
                    <div class="services-inner-box">
            <div class="ser-icon">
              <form action="updateD.php" method="post">
             <img src="assets/img/slider/milk_tea/<?php echo $img?>"  alt="flower" title="<?php echo $name?>" />
            </div>
            <h2><?php echo $name?></h2>
            <h2>QTY:<input type="number" style="width:48px" name="qty" min="1" required/></h2>
            <input type="hidden" name="product_code" value="<?php echo $tea_id ?>">
            <input type="hidden" name="img" value="<?php echo $img ?>">
            <input type="hidden" name="name" value="<?php echo $name ?>">
            <input type="hidden" name="price" value="<?php echo $price ?>">
            <input type="hidden" name="type" value="add" />
            <input type="hidden" name="url" value="<?php echo $current_url ?>">
         <button class="hvr-radial-in" name="add">   ₱<?php echo $price?></button>
            </form>
          </div>
                </div><!-- end col -->
           
     
      
                <?php
                    }
                    ?>
      
     
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
        <!-- Presentation -->
        <div class="presentation-container">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 wow fadeInLeftBig">
                 <h1><span class="violet" style="color:blue;">"The Best Selling Milk Tea"</span></h1>
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
                        <h3 style="color:red;">Matcha</h3>
                                                     <?php
                             include('db.php');
  $result2 = mysqli_query($conn,"SELECT * FROM milk_tea where tea_id=3 ");
while($row2 = mysqli_fetch_array($result2))
    {
      $flower=$row2['tea_id'];
    $price=$row2['price'];
    $name=$row2['name'];
  $img=$row2['img'];
    //echo '<span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">'.$row2['description'].'</span>';
    
  ?>
  <figure >
                    
                        <p><img src="data1/images/tea5.jpg"  alt="flower" title="<?php echo $name?>" /></p>
                       <figcaption style="background-color:#FFDAB9 ">
                        
                            <a class="big-link-1" href="rose.php">VIEW</a>
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
        <div id="auto">
   <footer style=" color:blue;">
            <div class="container" style="background:url('images/flow.jpg')">
                <div class="row">
                    <div class="col-sm-6 footer-box">
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                         <h3 style="color:Black; margin-left:50px;" >About Us</h3>
                        <div class="footer-box-text"><br>
                          <p style=" margin-left:50px;  " align="justify">
               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" The modern tea culture and tea houses emerged in the mid-1980s. The development of modern Taiwanese tea houses can be subdivided into two phases or streams. The first stream is also known as the “bubble tea craze,” which emerged in the late 1980s. The concept started to be exported to other countries including Hong Kong and mainland China in the early 1990s.

The second stream is the combination tea and tea houses that emerged in the late 1990s. The main differentiation between the two streams is the ambience of the outlet and the style of the beverage. The service quality, the selection of tea wares and the consumption behaviors of the second stream are more sophisticate than those of the bubble tea outlets. Compared to the traditional tea houses, the two modern streams can be regarded as completely different commodities for completely different markets. The three streams of tea houses still co-exist today and diversity is one of the major characteristic of the Taiwanese tea market.
          Address: 19-120 R-9, Potrero, Malabon, Metro Manila."</p>
                        </div>
                    </div>
                    <div class="col-sm-6 footer-box"  >
                        <div class="" >
            <br>
            <div style="margin-left:100px; width:450px; height:450px; background-image: url('images/toki_bg.png'); background-repeat: no-repeat; background-size:contain; ">
            
            <br>
            </div>
            <br>
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

                    </div>
                </div>
            </div>
        </footer>
  
</div>
    <?php
      include('foots.php');
      ?>
        <!-- Footer -->
    
      <!--  <footer style=" color:black;">
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
                        <p>Copyright 2016  - All rights reserved. <a href="admin/index.php" class=""><img src="circle.gif" height="20" width="20"></a></p>
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
        </footer> -->

        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>


    </body>

</html>