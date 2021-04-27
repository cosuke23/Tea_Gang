<!DOCTYPE html>
<head>
  <script type="text/javascript">
function validateForm()
{
var x=document.forms["form1"]["name"].value;
if (x==null || x=="")
  {
  alert("Enter Firstname");
  return false;
  }
  var x=document.forms["form1"]["lname"].value;
if (x==null || x=="")
  {
  alert("Enter Firstname");
  return false;
  }
  var y=document.forms["form1"]["email"].value;
if (y==null || y=="")
  {
  alert("Enter Lastname");
  return false;
  }
  var z=document.forms["form1"]["contact"].value;
if (z==null || z=="")
  {
  alert("Enter Contact Number");
  return false;
  }
  var a=document.forms["form1"]["uname"].value;
if (a==null || a=="")
  {
  alert("Enter Email Address");
  return false;
  }
    var b=document.forms["form1"]["password"].value;
if (b==null || b=="")
  {
  alert("Enter Address");
  return false;
  }
  var con = confirm("Are You Sure? you want to proceed?");
if (con ==false)
{
return false;
}
}
</script>

</head>
<?php
//ini_set('display_errors',0);
include_once('db.php');
session_start();




	if(isset($_POST['register'])){


	$email= $_POST['email'];
	$name=$_POST['name'];
  $lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$username=$_POST['username'];
	$password=$_POST['password'];
    $address=$_POST['address'];
      $city=$_POST['city'];
if (ctype_alpha($name)&&ctype_alpha($lname)) {
$query=mysqli_query($conn,"SELECT * from customers where Email='$email' or Username='$username' ")or die(mysqli_error());
    $num=mysqli_num_rows($query);
    if($num>=1){
      echo"<script>alert('Email/Username already in use');</script>";
      //header("location:signup.php");
    }else{
    mysqli_query($conn,"INSERT into customers(Name,Lname, Email, Contact, Password, Username, Address ,city)
                      values('".$name."', '".$lname."','".$email."', '".$contact."', '".$password."', '".$username."', '".$address."', '".$city."') ")or die(mysqli_error());

      echo"<script> ";
      // open for sms window 
      echo"location.href='login.php'; ";
      echo"alert('Registration Complete');";
      echo"</script> ";

    }

} else {
    
$err[] = "Invalid Login. Please try again with correct User ID and password.";
   echo "<div class=\"msg\">";
    foreach ($err as $e) {
      $echo = "<script type='text/javascript'>alert('Fill-up the Form Properly!'); window.location.href = 'regis.php';</script>";
      echo "$echo <br>";
      }
    echo "</div>";  
     
}
		
	}


	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];


		$query=mysqli_query($conn,"SELECT * from customers where Username='".$username."' and Password ='".$password."' ");
		$num=mysqli_num_rows($query);

		if ($num==1){
				
			$row=mysqli_fetch_array($query);
			
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
        <title>Welcome to Toki's Milk Tea </title>

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
                <form role="form" method="POST" name="form1" action="regis.php" >
                  <div class=" wow fadeInLeft" >
                  	<center>
                      <h1>Sign Up</h1>
                        <div class="form-group">
                          <label>First Name</label>


        <br>
                            <input type="text" name="name" placeholder="Enter your name..."  required />
                          </div>
                          <div class="form-group">
                          <label>Last Name</label>

        <br>
                            <input type="text" name="lname" placeholder="Enter your surname..."  required />
                          </div>
                              <div class="form-group">
                          <label>Address</label>

        <br>
                            <input type="text" name="address" placeholder="Where Yah from???"  required />
                          </div>
                              <div class="form-group">
                          <label>City</label>

        <br>
                            <input type="text" name="city" placeholder="..."  required />
                          </div>
                        <div class="form-group">
                          <label>Email Address</label>

        <br>
                            <input type="text" name="email" placeholder="Enter your email..." required/>
                          </div>
              <div class="form-group">
                          <label>Contact Number</label>

        <br>
                            <input type="text" maxlength="11" name="contact" value="09"  />
                          </div>
                          <div class="form-group">
                            <label>Username</label>

        <br>
                            <input type="text" name="username" maxlength="11" placeholder="Your username..." />
                          </div>
              <div class="form-group">
                          <label>Password</label>

        <br>
                            <input type="password" name="password" maxlength="11" placeholder="Enter your password..." style="width:20%; margin:0 auto;" class="form-control"  required/ >
                          </div>
                          <!--<a type="button" href="confirmation.php" id='confirm' taget='_blank' hidden></a>-->
                          <input type="submit" name="register" class="btn btn-warning" value='Register' />
                      </center>
                    </div>
          </form>

        </div>
          </div>

		<br>
      
        <!-- Footer -->
       <?php
       include('foots.php');
       ?>

        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>


    </body>

</html>