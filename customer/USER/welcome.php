
<h5 class="titlehdr"> <?php  $session= $_SESSION['staff_id'];
$sessionname=$_SESSION['user_name'];
$session_id=$_SESSION['id'];
//$name=$_SESSION['full_name'];
//if($_SESSION['user_level'] == 1){
//		   header("Location: ../index.php");
		   
	//   }
?></h5>  


	  <?php	
	  
	  
      if (isset($_GET['msg'])) {
	  echo "<div class=\"error\">$_GET[msg]</div>";
	  }
	  	  
	  ?>