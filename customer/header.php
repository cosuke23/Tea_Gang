<head>
<link href="css3/bootstrap.min.css" rel="stylesheet">
    <link href="css3/price-range.css" rel="stylesheet">
    <link href="css3/animate.css" rel="stylesheet">
    <link href="css3/main.css" rel="stylesheet">
    <link href="css3/responsive.css" rel="stylesheet">
    
        <link rel="stylesheet" type="text/css" href="css/components.css" />
 <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

    <?php
                                     include('session.php');
                                       ?>
    
</head>
  <header id="header"><!--header-->
        <div class="header-left" style="background-color:#FFDAB9 "><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            
                        </div>
                    </div>
                    <div class="col-sm-6">
 <div class="social-icons pull-right">

                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
         <div class="header-left" style="background-color:#FFDAB9 "><!--header-middle-->
            
                <div class="row">
                    <div class="col-sm-4">
                              <div class="hello">
                            <a href="index.php"><img src="../images/toki.png" alt=""  /></a>
                        </div>
                        </div>
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
    border-collapse: center;
    border-spacing: 0;
}

  </style>

                    <div class="col-sm-8">
                        <div class="mainmenu pull-right">
                            <ul class="nav navbar-nav">
                                <li class="sub-menu"><a href="dashboard.php" style="background:none"><i class="fa fa-user" ></i><i class="fa fa-angle-down"></i> Account</a>
                                <ul role="menu" class="sub-menu">
                                       <li><a  href="editcustomer.php"><?php
                                       
                                        echo $_SESSION['id'] ?>Account Setting</a></li> 
                                       <li><a href="dashboard.php">Dashboard</a></li> 

                                </ul>
                            </li>
                                <li><a href="personalinfo.php" style="background:none"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="cart.php" style="background:none"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="logout.php" style="background:none"><i class="fa fa-sign-out"></i> logout</a></li>

                            </ul>
                        </div>
                   
                </div>
            </div>
        </div><!--/header-middle-->
    
         <div class="header-bottom" style="background-color:#FFA07A"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.php" class="">Home</a></li>
                                
                                    <li class="sub-menu"><a href="">Milk Tea Flavors<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                
                                         <li><a href="Redvelvet.php?flavor=<?php echo "Redvelvet" ?>">Red Velvet</a></li>
                                        <li><a href="Redvelvet.php?flavor=<?php echo "Matcha" ?>">Matcha</a></li>
                                        <li><a href="Redvelvet.php?flavor=<?php echo "Taro" ?>">Taro</a></li>
                                        <li><a href="Redvelvet.php?flavor=<?php echo "Winter Melon" ?>">Winter Melon</a></li> 
                                         
                                </ul>
                                </li> 
                                <li class="sub-menu"><a href="">Products<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="Bubble.php?flavor=<?php echo "Bubble" ?>">Bubble Milk Tea</a></li>
                                        <li><a href="Bubble.php?flavor=<?php echo "Taro" ?>">Taro Milk Tea</a></li> 
                                        <li><a href="Bubble.php?flavor=<?php echo "British" ?>">British Milk Tea</a></li> 
                                        <li><a href="Bubble.php?flavor=<?php echo "Green" ?>">Green Milk Tea</a></li>

                                       
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-sm-3">
                  <!--                               <form method="post" action="products.php">
                            <input type="number" name="budget" placeholder="Insert Budget"/>
                         
   <input type="submit"  value="View" /> -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->