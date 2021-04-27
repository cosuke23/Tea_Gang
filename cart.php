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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart |Tea Gang</title>

        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="shortcut icon" href="images/logo.png">
<!--Take a look -->
                <link rel="stylesheet" type="text/css" href="cssi/default.css" />
        <link rel="stylesheet" type="text/css" href="cssi/component.css" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
</head><!--/head-->

<body>
	
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
					<p><a href="payment.php" style="background:none"><i class="fa fa-shopping-cart"></i> Proceed payment</a></p>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	
</body>
</html>