<!DOCTYPE html>

<?php
 include_once('db.php');
include('header_admin.php');
 ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart |Toki Milk Tea</title>

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
			<p><b> <a href="order.php ?>">Back</a></b></p>
                        <p><b>  <a href="print.php ?>">Print</a></b></p>
			<div class="table-responsive cart_info">
				
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Milk Tea</td>
							<td class="description">product name</td>
							<td class="price">Quantity</td>
							<td class="quantity">Price</td>
							<td class="total">Total</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
                       
					      <?php
					      $url="cart.php";

                                    $query=mysqli_query($conn,"SELECT * from temp where id = '".$_SESSION['id']."' ")or die(mysqli_error());
                                    while($row=mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                    	<td><img src="assets/img/slider/products/<?php echo $row['img']; ?>">  </td>
                                        <td> <?php echo $row['name']; ?> </td>
                                        <td> <?php echo $row['qty']; ?> </td>
                                        <td> P<?php echo $row['price']; ?> </td>
                                        <td> P<?php echo $row['total']; ?> </td>
                                        <td style="text-align:center;"> <a class="btn btn-primary" href='cancelcart.php?cnt=<?php echo $row['cnt']; ?>&url=<?php echo $url; ?>'>Cancel</a> </td>
                                    										             </tr>
                                    <?php } ?>    

							<td class="cart_quantity">
								<div class="cart_quantity_button">
 
								</div>
							</td>
							<td class="cart_total">
								<td class="total">Total</td>

<?php
$querys=mysqli_query($conn,"SELECT sum(total) as totals from temp where id = '".$_SESSION['id']."' ");
while($rows=mysqli_fetch_array($querys)) {
 ?>
 <td> P<?php echo $rows['totals']; ?> </td>
                                     <?php } ?>
							</td>
						
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	
</body>
</html>