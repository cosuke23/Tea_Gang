<!DOCTYPE html>
<?php
include_once('db.php');


  if(isset($_POST['login'])){
    

$username=$_POST['username'];
    $password=$_POST['password'];
    
    $user_cond = "Username='$username'&&Password='$password'";

    


  
$result =mysqli_query($conn,"SELECT * FROM customers WHERE 
           $user_cond
      
      ") or die (mysqli_error()); 

$num = mysqli_num_rows($result);
$_SESSION['id'] = $num['id'];
$_SESSION['Name'] = $num['Name'];
  // Match row found with more than 1 results  - the user is authenticated. 
  if ( $num > 0 ) { 
  
  list($id,$name,$email,$contact,$usename,$password) = mysqli_fetch_row($result);
  
   
    //check against salt

  
     // this sets session and logs user in  
       session_start();
     session_regenerate_id (true); //prevent against session fixation attacks.
     // this sets variables in the session 

    $_SESSION['id']= $id;  
    $_SESSION['Name'] = $name;
   // $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
        
  

   //   header("location:");

        echo"<script type='text/javascript'>alert('Welcome! Customer');
        window.location.href='customer/index.php';</script>";
    }else{
$err[] = "Invalid Login. Please try again with correct User ID and password.";
   echo "<div class=\"msg\">";
    foreach ($err as $e) {
      $echo = "<script type='text/javascript'>alert('Wrong Username or Password!'); window.location.href = 'login.php';</script>";
 //     echo "error ".$_SESSION['id']."";
      }
    echo "</div>";  
     
     
}

}
?>

<html lang="en">
<?php include('header.php'); ?>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to Toki's Milk tea </title>

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
    <input type="text" name="username" placeholder="Enter your username..." style="background-color:white; width:20%; margin:0 auto; "  class="form-control" required>
                          </div>

                        <div class="form-group">
                          <label>Password</label>
  <input type="password" name="password" placeholder="Enter your password..." style="background-color:white; width:20%; margin:0 auto;"  class="form-control" required>
                          </div>
                          <input type="submit" name='login' class="btn btn-danger" value="Login">

          </div>
          </form>
        <!--     <a class="btn btn-primary" href="forget.php">Forget Password</a>-->
              </div>
          </div>

</center>
    <br>
       
        <!-- Footer -->
     <?php
     include('foots.php');
     ?>

        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>


    </body>

</html>