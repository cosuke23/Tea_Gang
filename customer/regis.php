<!DOCTYPE html>
<?php
ini_set('display_errors',0);
include_once('db.php');
session_start();

	if(isset($_POST['register'])){


	$email= $_POST['email'];
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$username=$_POST['username'];
	$password=$_POST['password'];

		$query=mysqli_query($conn,"select * from customers where Email=email or Username=$username ");
		$num=mysqli_num_rows($query);
		if($num>=1){
			echo"<script>alert('Email/Username already in use');</script>";
			//header("location:signup.php");
		}else{
		mysqli_query($conn,"insert into customers(Name, Email, Contact, Password, Username)
											values('".$name."', '".$email."', '".$contact."', '".$password."', '".$username."') ");

			echo"<script> ";
			// open for sms window 
			echo"location.href='login.php'; ";
			echo"</script> ";

		}

	}


	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];


		$query=mysql_query("select * from customers where Username='".$username."' and Password ='".$password."' ");
		$num=mysql_num_rows($query);

		if ($num==1){
				
			$row=mysql_fetch_array($query);
			
			$sess=array(
				'id' => $row['id'],
				'name' => $row['Name'],
				'email' => $row['Email'],
				'contact' => $row['Contact'],
				'password' => $row['Password'],
				'username' => $row['Username']);
				
				$_SESSION['account']= $sess;
				$_SESSION['name']=$session;


				echo"<script>alert('Welcome '".$username."'');</script>";
			header("location:index.php");
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
        <title>Welcome to MCJ's FlowerShop </title>

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
              <div class="row">
                <form role="form" method="POST" action="regis.php" >
                  <div class=" wow fadeInLeft" >
                  	<center>
                      <h1>Sign Up</h1>
                        <div class="form-group">
                          <label>Name</label>

        <br>
                            <input type="text" name="name" placeholder="Enter your name..." />
                          </div>
                        <div class="form-group">
                          <label>Email Address</label>

        <br>
                            <input type="text" name="email" placeholder="Enter your email..." />
                          </div>
              <div class="form-group">
                          <label>Contact Number</label>

        <br>
                            <input type="text" name="contact" placeholder="Enter your contact number..." />
                          </div>
                          <div class="form-group">
                            <label>Username</label>

        <br>
                            <input type="text" name="username" maxlength="11" placeholder="Your username..." />
                          </div>
              <div class="form-group">
                          <label>Password</label>

        <br>
                            <input type="password" name="password" maxlength="11" placeholder="Enter your password..." style="width:20%; margin:0 auto;" class="form-control" / >
                          </div>
                          <!--<a type="button" href="confirmation.php" id='confirm' taget='_blank' hidden></a>-->
                          <input type="submit" name="register" class="btn btn-warning" value='Register' />
                      </center>
                    </div>
          </form>

        </div>
          </div>

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