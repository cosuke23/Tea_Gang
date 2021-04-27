<!DOCTYPE html>
<?php
include_once('db.php');

$err =  array();


  if(isset($_POST['login'])){
    

$username=$_POST['username'];
    $password=$_POST['password'];
    
    $user_cond = "Username='$username'&&Password='$password'";

    


  
$result = mysqli_query("SELECT `id`,`Name`,`Email`,`Contact` FROM customers WHERE 
           $user_cond
      
      ") or die (mysqli_error()); 

$num = mysqli_num_rows($result);
$_SESSION['id'] = $num['id'];
$_SESSION['Name'] = $num['Name'];
  // Match row found with more than 1 results  - the user is authenticated. 
  if ( $num > 0 ) { 
  
  list($id,$name,$email,$contact,$usename,$password) = mysql_fetch_row($result);
  
   
    //check against salt

  
     // this sets session and logs user in  
       session_start();
     session_regenerate_id (true); //prevent against session fixation attacks.
     // this sets variables in the session 

    $_SESSION['id']= $id;  
    $_SESSION['Name'] = $name;
   // $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
        
  

      header("location:dashboard.php");

        echo"<script>alert('Welcome ');</script>";
    }else{
        echo "Wrong";
    
  
}

}
?>

<html lang="en">
<?php include('header.php'); ?>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to Toki Milk tea </title>

        <!-- CSS -->
  
        
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="shortcut icon" href="images/logo.png">
<!--Take a look -->
                <link rel="stylesheet" type="text/css" href="cssi/default.css" />
        <link rel="stylesheet" type="text/css" href="cssi/component.css" />
        <script src="jsi/modernizr.custom.js"></script>

  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>


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
        
        <!-- Top menu -->
	 

        <br>

        <br>
<div class="container">
  <center>
               <form method="post" name="logForm" id="logForm" >
              <div class=" wow fadeInRight">
            <h1>Log in</h1>
                        <div class="form-group">
                          <label>Username</label>
    <input type="text" name="username" placeholder="Enter your username..." style="background-color:white; width:20%; margin:0 auto; "  class="form-control">
                          </div>

                        <div class="form-group">
                          <label>Password</label>
  <input type="password" name="password" placeholder="Enter your password..." style="background-color:white; width:20%; margin:0 auto;"  class="form-control">
                          </div>
                          <input type="submit" name='login' class="btn btn-danger" value="Login">
          </div>
          </form>
              </div>
          </div>

</center>
		<br>
        <div id="auto">
   <footer style=" color:blue;">
            <div class="container" style="background:url('images/flow.jpg')">
                <div class="row">
                    <div class="col-sm-6 footer-box">
                        <h4 style="color:white;">About Us</h4>
                        <div class="footer-box-text">
                          <p>
                                "About the Shop"
              </p>
                        </div>
                    </div>
                    <div class="col-sm-6 footer-box">
                        <div class="footer-box-text footer-box-text-contact">
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 wow fadeIn">
                    <div class="footer-border"></div>

                  </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">

                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">

                      <p>" "</p>
                      <p>" "</p>
                      <p>Phone:"" </p>
                    </div>
                </div>
            </div>
        </footer>
  
</div>
        <!-- Footer -->
        <footer style=" color:blue;">
            <div class="container" style="background-color:violet; color:black;">
                <div class="row">
                    <div class="col-sm-6 footer-box">
                        <div class="footer-box-text">
	                                      <h3>We Are Here</h3>
                      <div><a rel="facebox" href="map.php"><img  src="images/map.png"></a></div>
                   <br>     </div>
                    </div>
                    <div class="col-sm-6 footer-box">
                        <h4 style="color:white;">Contact Us</h4>
                        <div class="footer-box-text footer-box-text-contact">
	                        <p><i class="fa fa-map-marker"></i> Address:"of the flower-shop"</p>
	                        <p><i class="fa fa-phone"></i> Phone:" "</p>
	                        <p><i class="fa fa-envelope"></i> Email: <a href="">"email"</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-sm-12 wow fadeIn">
                		<div class="footer-border"></div>
                	</div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p>Copyright 2016 PROJMAN - All rights reserved.</p>
                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">
                     <a href="https://www.facebook.com/kitkat's.flower">Like Us on <i class="fa fa-facebook-square"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>


    </body>

</html>