<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to Toki Milk tea </title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
 
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="imagesp/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="imagesp/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cssp/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="stylep.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="cssp/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="cssp/custom.css">
    <script src="jsp/modernizr.js"></script>
        <!-- CSS -->
    </head>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img class="img-fluid" src="../images/tokis.png" alt="" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="order.php"><span>Order</span></a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="product.php"><span>Maintenance</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index_admin.php"><span>Sale</span></a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index_admin.php"><span>Home</span></a>
            </li>
       </ul>
        </div>
      </div>
    </nav>
    
    <body style="background:white; ">
        
        <!-- Top menu -->
     
        <br>
        <br>

           <div id="menu" class="section lb">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3>Menu</h3>
                <p><?php session_start(); echo $session ?></p>
            </div><!-- end title -->

            <div class="row">
    
         
            </div><!-- end row -->
        </div><!-- end container -->
    <section id="cart_items">
    <div class="container">
      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li class="active">Shopping Cart</li>
        </ol>
      </div>
      <div class="table-responsive cart_info">
        <table class="table table-condensed">
          <thead>
            <tr class="cart_menu">
              <td class="image">Milk Tea</td>
              <td class="description">product name</td>
              <td class="price">Quantity</td>
              <td class="quantity">Price</td>
              <td class="total">Total</td>
            
            </tr>
          </thead>
          <tbody>
                       
                <?php
session_start();
error_reporting(0);
                                   foreach ($_SESSION["products"] as $cart_itm)
    {
      $total = 0;
      
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $img=$cart_itm["img"];
$code=$cart_itm["code"];

        $url="cart.php";

                $total = ($total + $subtotal);
                $totals = ($totals + $total);
     ?>
                                    <tr>
                                      <td><img src="assets/img/slider/milk_tea/<?php echo $img ?>">  </td>
                                        <td> <?php echo $cart_itm["name"] ?> </td>
                                        <td> <?php echo $cart_itm["qty"] ?> </td>
                                        <td> P<?php echo $cart_itm["price"] ?> </td>
                                        <td> P<?php echo $total ?> </td>
                                                                   </tr>
                                    <?php } ?>    

              <td class="cart_quantity">
                <div class="cart_quantity_button">
 
                </div>
              </td>
              <td class="cart_total">
                <td class="total">Total</td>

 <td> P<?php echo number_format($totals) ?> </td>
                                     
              </td>
            
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section> <!--/#cart_items-->
    </div><!-- end section -->      
    </body>

</html>