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
    <body >
<div class="body">

	
			<div class="background1">
			
		</div>			

<body>
<div id="products-wrapper">
    <div class="Container" >

      <ul class="grid cs-style-4">
        
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://localhost/htdocs/MCJ%20Mock/products.php");
    if(isset($_POST['budget'])){

  $budget= $_POST['budget'];
}
	$results = $mysqli->query("SELECT * FROM products where price <= '$budget'");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
                echo '<li>'; 
                $type="products";
                $name=$obj->name;
			echo '<div class="product">'; 
            echo '<form method="post" action="updateC.php">';
			echo '<a rel="facebox" href="border.php?ids='.$obj->flower_id.'&name='.$obj->name.'"><div class="product-thumb"><img src="assets/img/slider/products/'.$obj->img.'"></a></div>';
           echo'<br>';
           echo'<br>';
           echo'<br>';
            echo '<div class="product-content"><h3>'.$obj->name.'</h3>';
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
            echo'<br>';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
      echo '<input type="hidden" name="url" value="'.$current_url.'" />';
      echo '<input type="hidden" name="prod" value="'.$type.'" />';

            echo '<input type="hidden" name="product_code" value="'.$obj->flower_id.'" />';
            echo '<input type="hidden" name="name" value="'.$obj->name.'" />';
            echo '<input type="hidden" name="img" value="'.$obj->img.'" />';
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
  <div  style='overflow-x:hidden;overflow-y:scroll;width:370px;height:400px'>
    <div style='width:340px;height:100px'>
      <br>
<h2> <center>Your Shopping Cart</center></h2>
<?php
  $url = base64_encode($url="http://localhost/htdocs/MCJ%20Mock/basket.php");
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="updateC.php?removep='.$cart_itm["code"].'&return_url='.$url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.number_format($subtotal).'</div>';
        echo '</li>';

        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total:'.$currency.number_format($total).'</strong> </span>';
	echo '<span class="empty-cart"><a href="updateC.php?emptycart=1&return_url='.$url.'">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>
</div>
</div>
</div>
    
</div>



</body>
</html>
	