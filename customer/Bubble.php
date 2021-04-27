<?php
include_once("db1.php");
include('header.php');
?>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" href="cssmenu/styles.css">
   <script src="cssmenu/script.js"></script>
      <link rel="stylesheet" type="text/css" href="css/componentx.css" />
      <link rel ="stylesheet" type="text/css" href="css/occassion.css"/>
                <link rel="stylesheet" type="text/css" href="cssi/default.css" />
   <title>Tea Gang</title>
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
    <div class="Containers" >
<br>
      <ul class="grid cs-style-4">
        <center>
 <div style="font-size:35px; font-family:Trajan Pro; margin-left:80px; margin-top:18px; color:#FFCC66;"><?php echo $_GET['flavor']; ?></div>       
   </center>
<br>       
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
    $flavor=$_GET['flavor'];
  $current_url = base64_encode($url="http://localhost/xampp/tea%20gang/customer/Bubble.php?flavor=$flavor");
     
    if($flavor=="Redvelvet"){
  $results = $mysqli->query("SELECT * FROM milk_tea where flavor ='$flavor' and status ='Active'");
}else{
  $results = $mysqli->query("SELECT * FROM milk_tea where flavor ='$flavor' and status ='Active'");
}
    if ($results) { 
  
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
                echo '<li>'; 
                $type="milk_tea";
                $name=$obj->name;
      echo '<div class="product">'; 
            echo '<form method="post" action="updateC.php">';
      echo '<a ><div class="product-thumb"><img src="assets/img/slider/milk_tea/'.$obj->img.'"></a></div>';
           echo'<br>';
           echo'<br>';
           echo'<br>';
            echo '<div class="product-content"><h3>'.$obj->name.'</h3>';
            echo '<div class="product-info">';
      echo 'Price '.$currency.$obj->price.'  ';
           echo '<br />';
      echo 'QTY';
            echo '<input type="number" name="qty" style="width:48px;" " required/>';
            echo'<br>';
      echo '<button class="add_to_cart">Add To Cart</button>';
      echo '</div></div>';
      echo '<input type="hidden" name="session_id" value="'.$session_name.'" />';
      echo '<input type="hidden" name="url" value="'.$current_url.'" />';
      echo '<input type="hidden" name="prod" value="'.$type.'" />';

            echo '<input type="hidden" name="product_code" value="'.$obj->tea_id.'" />';
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
  $url = base64_encode($url="http://localhost/xampp/tea%20gang/customer/Bubble.php?flavor=Redvelvet");
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    $results = $mysqli->query("SELECT * FROM temp where id='$session_id'");
     while($obj = $results->fetch_object())
    {
        $subtotal = ($obj->price*$obj->qty);
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="updateC.php?removep='.$obj->id.'&return_url='.$url.'">&times;</a></span>';
        echo '<h3>'.$obj->name.'</h3>';
        echo '<div class="p-code">P code : '.$obj->cnt.'</div>';
        echo '<div class="p-qty">Qty : '.$obj->qty.'</div>';
        echo '<div class="p-price">Price :'.$currency.number_format($subtotal).'</div>';
        echo '</li>';

        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total:'.$currency.number_format($total).'</strong> </span>';
  echo '<span class="empty-cart"><a href="updateC.php?emptycart=1&return_url='.$url.'">Empty Cart</a>||<a href="cart.php">Check-Out</a></span>';
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
   <?php
include('foots.php');
?>