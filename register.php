<?php
// Establishing connection with server..
 $connection = mysql_connect("localhost", "root", "");

// Selecting Database 
 $db = mysql_select_db("mcj", $connection);

//Fetching Values from URL  
$Firstname =$_POST["Firstname"];
$Middlename =$_POST["Middlename"];
$Lastname =$_POST["Lastname"];
$Contact =$_POST["Contact"];
$Address =$_POST["Address"];
$Username =$_POST["Username"];
$MyPassword =$_POST ["MyPassword"];
$CPassword =$_POST ["CPassword"];
$Email =$_POST["Email"];
  // Password Encryption, If you like you can also leave sha1

// check if e-mail address syntax is valid or not
$Email = filter_var($Email, FILTER_SANITIZE_EMAIL); // sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)

if (!filter_var($Email, FILTER_VALIDATE_EMAIL))
 {
    echo "Invalid Email.......";
 }
else
 {
	$result = mysql_query("SELECT * FROM users WHERE Email='$Email'");
        $data = mysql_num_rows();
	        
	if(($data)==0)
      {
		//Insert query 
	   $query = "insert into users set Firstname='".$Firstname."', Middlename='".$Middlename."', Lastname='".$Lastname."', Contact='".$Contact."', Address='".$Address."', Username='".$Username."', MyPassword='".$MyPassword."', CPassword='".$CPassword."', Email='".$Email."'";
$query = mysql_query($query);
		if($query)
		   {
			  echo "You have Successfully Registered.....";
		   }
		else
		   {
			  echo "Error....!!";   
		   }
	} 
	else
	{
		echo "This email is already registered, Please try another email...";
	}  

 }

//connection closed
mysql_close ($connection);
?>
