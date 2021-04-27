<!DOCTYPE html>
<?php
    include_once('db1.php');
   include ('header.php'); ?>
<html>

<head>
<link rel ="stylesheet" type="text/css" href="customization.css"/>
   
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" href="cssmenu/styles.css">
   <script src="cssmenu/script.js"></script>
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      <link rel ="stylesheet" type="text/css" href="css/occassion.css"/>

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
<div id="Containers">
              
<div id="pink">
  
</div>

<div id="orange">
   <div class="col-md-6">
              <form>
                <div class="col-md-12 bgbox" style="padding:1%; margin-top:2%; ">
                               
                                                      <input type="hidden" name="id" style="display;hidden" value="<?php echo $id?>" readonly>


                                                      <ul class="grid cs-style-4">
        
       <?php
    //current URL of the Page. cart_update.php redirects back to this URL
  $current_url = base64_encode($url="http://localhost/htdocs/projman/flower/simple-php-shopping-cart/ass1.php");
    
  $results = $mysqli->query("SELECT * FROM rose");
    if ($results) { 
  
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
    echo '<li>'; 
      echo '<div class="product">'; 
            echo '<form method="post" action="update.php">';
      echo '<a rel="facebox" href="rorder.php?ids='.$obj->flower_id.'&name='.$obj->name.'"><div class="product-thumb"><img src="assets/img/slider/rose/'.$obj->img.'"></a></div>';
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
          </div><br>
                       
                            <br><br><br>
                    </div>
               
         
</div>



<div id="blue">
<p>AAAAAAAAAAAAAddddddddddddddddddddddsssssssssss InSIIIIIIIDE</p>
</div>

<div id="yellow">


  <div class="col-md-6">
                <form>
                <div class="col-md-12 bgbox" style="padding:1%;  margin-top:2%; ">
                                                        <input type="hidden" name="id" style="display;hidden" value="<?php echo $id?>" readonly>
                                                        <?php
                                                        require('db1.php');
           $results = $mysqli->query("SELECT * FROM cover");
    if ($results) { 
  
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
       echo '<a rel="facebox" href="cover.php?ids='.$obj->cover_id.'"><img src="assets/img/slider/cover/'.$obj->img.'" alt="'.$obj->name.'" width="109" height="109" class="pngfix" /></a>';
            }
}
            ?>

                    
                    </div><br>
                       
                            <br><br><br>
                    </div>
                
            </div>
       

</div>

<div id="footers">
Fooooooooooooooter
</div>



</div>
</body>

















</html>