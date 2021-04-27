          <?php
include '../db1.php';
include 'session.php';
$session=$_SESSION['id'];
    $sqlad = $mysqli->query("SELECT * FROM admin Where id='$session'");

   



    while($rowad= mysqli_fetch_array($sqlad)){ 
           $name=$rowad["Name"];
             $profilep=$rowad["img"];
             $profile_pic ='images/'.$profilep.'';
              $pic='<img src="'.$profile_pic.'" alt="'.$name.'" width="150" height="140" />';
        
            $pic1='<img src="'.$profile_pic.'" alt="'.$name.'" width="50" height="50" />';
        

    }
    

 

?>

<head>
      <link rel="shortcut icon" href="imagesp/tokis.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="imagesp/tokis.png">
<link href="css3/bootstrap.min.css" rel="stylesheet">
    <link href="css3/price-range.css" rel="stylesheet">
    <link href="css3/animate.css" rel="stylesheet">
    <link href="css3/main.css" rel="stylesheet">
    <link href="css3/responsive.css" rel="stylesheet">
 <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">

    
    
</head>
        
        <div class="header-middle" style="background:url('images/bars.jpg')"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-right">
                            
                            <a href="index.php"><?php echo $pic;?></a>
                        </div>
                        </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="edita.php" style="background:none"><i class="fa fa-settings" ></i>  Account Setting</a></li>
                                <li><a href="addamin.php" style="background:none"><i class="fa fa-user" ></i> Create Admin</a></li>
                                <li><a href="logout.php" style="background:none"><i class="fa fa-lock"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom" style="background:url('../images/flows.jpg')"><!--header-bottom-->
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
                               
                             
                                <li class="dropdown"><a href="">Product<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                        <li><a href="cancelled.php">Cancelled</a></li> 
                                        <li><a href="claimed.php">Claimed</a></li>
                                        <li><a href="delivered.php">Ready to Deliver</a></li> 
                                        <li><a href="Pending.php">Pending</a></li> 
                                    </ul>
                                </li> 
                                 <li class="dropdown"><a href="product.php?flavor=<?php echo "Redvelvet" ?>">Maintenance<i class=""></i></a>
                               
                                </li> 
                                <li class="dropdown"><a href="index_admin.php">Sale<i class=""></i></a>
                                     <li class="dropdown"><a href="order.php">Order<i class=""></i></a>
                            </ul>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        
                    </div>
                </div>
            </div>
            
            
            
        </div><!--/header-bottom-->
    </header><!--/header-->