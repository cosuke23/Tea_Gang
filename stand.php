<?php
session_start();
include_once("db1.php");
include('header.php');
?>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" href="cssmenu/styles.css">
   <script src="cssmenu/script.js"></script>
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      <link rel ="stylesheet" type="text/css" href="css/occassion.css"/>
                <link rel="stylesheet" type="text/css" href="cssi/default.css" />
   <title>MCJ's Flower shop</title>
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
<div class="body">

	
			<div class="background1">
			
		</div>			

<body>
<div id="products-wrapper">
    <div class="Container">

      <ul class="grid cs-style-4">
        
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://localhost/htdocs/projman/flower/simple-php-shopping-cart/ass1.php");
    
	$results = $mysqli->query("SELECT * FROM standing");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
                echo '<li>'; 
			echo '<div class="product">'; 
            echo '<form method="post" action="update.php">';
			echo '<a rel="facebox" href="rorder.php?ids='.$obj->flower_id.'&name='.$obj->name.'"><div class="product-thumb"><img src="assets/img/slider/products/'.$obj->img.'"></a></div>';
            echo '<div class="product-content"><h3>'.$obj->name.'</h3>';
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->flower_id.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '</form>';
            echo '</div>';
            echo '</li>';
        }
    
    }
    ?>
  </ul>
    </div>
    
<div class="shopping-cart "   style="background:url('images/ft1.jpg')">
<h2>Your Shopping Cart</h2>
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    $count=0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
      $cnt=($count++);
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="update.php?removep='.$cnt.'&return_url='.$current_url.'&count='.$cnt.'">&times;</a></span>';
       echo'<div class="p-count">'.$cnt.'</div> ';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);

    }
    echo '</ol>';
    echo '<span class="empty-cart"><a href="update.php?emptycart=1&return_url='.$current_url.'">Purchase</a></span><span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> </span>';
echo'<br>';
	echo '<span class="empty-cart"><a href="update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>
</div>
    
</div>



</body>
</html>
	