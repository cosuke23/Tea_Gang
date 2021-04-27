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
    <link rel="shortcut icon" href="imagesp/tokis.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="imagesp/tokis.png">

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
                <p>  <p><?php session_start(); echo $_SESSION['Name'] ?></p></p>
            </div><!-- end title -->

            <div class="row">
 <?php
    //current URL of the Page. cart_update.php redirects back to this URL
include_once("../db1.php");
include_once("../db.php");
  $current_url = base64_encode($url="http://localhost/xampp/tea%20gang/admin/cart.php");

  $results = $mysqli->query("SELECT * FROM milk_tea");

   
  
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
          $type="milk_tea";
       
              echo '   <div class="col-md-3">'; 
                     echo '<div class="services-inner-box">'; 
                       echo '  <div class="ser-icon">'; 
                            echo '<form method="post" action="updateC.php">';
                             echo '<img src="../assets/img/slider/milk_tea/'.$obj->img.'" class="img-fluid" alt="" />'; 
                       echo '  </div>'; 
                     echo '    <h2>'.$obj->name.'</h2>'; 
                
                   echo '      <button class="hvr-radial-in">'.$currency.$obj->price.' </button>'; 
                    echo '<input type="hidden" name="url" value="'.$current_url.'" />';
      echo '<input type="hidden" name="prod" value="'.$type.'" />';

            echo '<input type="hidden" name="product_code" value="'.$obj->tea_id.'" />';
            echo '<input type="hidden" name="name" value="'.$obj->name.'" />';
            echo '<input type="hidden" name="img" value="'.$obj->img.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '</form>';
      
             echo '        </div>'; 
         echo '        </div>'; 
                   
                    }
                    ?>       
         
            </div><!-- end row -->
        </div><!-- end container -->

    </div><!-- end section -->      
    </body>

</html>