<!DOCTYPE html>
<?php
include_once('../db.php');

$err =  array();


  if(isset($_POST['login'])){
    

$username=$_POST['username'];//admin
    $password=$_POST['password'];//admin
    
    $user_cond = "Username='$username'&&Password='$password'";

    


  
$result =mysqli_query($conn,"SELECT `id`,`Name`,`Email`,`Contact` FROM admin WHERE 
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
        
  

    //  header("location:index_admin.php");

       echo"<script type='text/javascript'>alert('Welcome! Admin');
        window.location.href='index_admin.php';</script>";
  
    }else{
        echo "Wrong";
    
  
}

}
?>

<html lang="en">

    <head>
  <a href="../index.php" class=""><img src="images/circle.gif" height="20" width="20"></a>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to MCJ's FlowerShop </title>

        <!-- CSS -->
  
        
           <link rel="stylesheet" href="cssc/style.css">

    </head>

    <body>
        
        <!-- Top menu -->
   

        <br>

        <br>
<div class="container">
  <center>
               <form method="post" name="logForm" id="logForm" >
           <div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="images/cir2.gif" alt="Avatar" /> 
    </button>
    <div class="profile__form">
      <div class="profile__fields">
        <div class="field">
          <input type="text" id="fieldUser" name="username" class="input" required pattern=.*\S.* />
          <label for="fieldUser" class="label">Username</label>
        </div>
        <div class="field">
          <input type="password" id="fieldPassword" name="password" class="input" required pattern=.*\S.* />
          <label for="fieldPassword" class="label">Password</label>
        </div>
        <div class="profile__footer">
                          <input type="submit" name='login' class="btn btn-danger" value="Login">
        </div>
      </div>
     </div>
  </div>
</div>
    
        <script src="js2/index.js"></script>


          </form>
              </div>
          </div>

</center>
    <br>
    </body>

</html>