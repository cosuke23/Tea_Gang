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
<br>
      <ul class="grid cs-style-4">
 <div style="font-size:35px; font-family:Trajan Pro; margin-left:80px; margin-top:18px; color:#FFCC66;">Box Arrangement</div>       
   
<br>       
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
 $current_url = "box.php";   
  $results = $mysqli->query("SELECT * FROM boxs WHERE qty>0");
$type="box";    
    if ($results) { 
  
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
         echo '<li>'; 
      echo '<div class="product">'; 
            echo '<form method="post" action="update.php?url="'.$current_url.'"&type='.$type.' ">';
            echo '<input type="hidden" name="img" value="'.$obj->img.'" />';
            echo '<input type="hidden" name="typ" value="'.$type.'" />';
            echo '<input type="hidden" name="curl" value="'.$current_url.'" />';
      echo '<a rel="facebox" href="basorder.php?ids='.$obj->flower_id.'&name='.$obj->name.'&type='.$type.'"><div class="product-thumb"><img src="assets/img/slider/products/'.$obj->img.'"></a></div>';
                          echo '<input type="hidden" name="pname" value="'.$obj->name.'" readonly />';
            echo '<div class="product-content"><h3>'.$obj->name.'</h3>';
            echo '<input type="hidden" name="name" value="'.$_SESSION['Name'].'" size="3" />';
         
                          echo '<input type="hidden" name="price" value="'.$obj->price.'" readonly />';
      echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
      echo '<button class="add_to_cart">Add To Cart</button>';
      
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
    
<div class="shopping-cart "   style="background:url('images/ft1.jpg')"><br>
<h2><center>Your Shopping Cart</center></h2><br>
<?php
    $total = 0;
$results = $mysqli->query("SELECT * FROM temp where id = '".$_SESSION['id']."'");
    if ($results) { 
  
   $current_url="box.php";
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			$subtotal = ($obj->price*$obj->qty);
        $total = ($total + $subtotal);
           echo '<li class="cart-itm">';
         echo '<span class="remove-itm"><a href="cancelapp.php?cnt='.$obj->cnt.'&url='.$current_url.'">&times;</a></span>';
       
        echo '<h3>'.$obj->name.'</h3>';
        echo '<div class="p-code">P code : '.$obj->flower_id.'</div>';
        echo '<div class="p-qty">Qty : '.$obj->qty.'</div>';
         //  echo '<div class="p-price">Price :'.$currency.$obj->price.'</div>';
		echo '<div class="p-price">Price :'.$currency.$subtotal.'</div>';
        echo '</li>';
        
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.number_format($total).'</strong> </span>';
  echo '<span class="empty-cart"><a href="lupdate.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
  ?>
</div>
    
</div>



</body>
</html>
  