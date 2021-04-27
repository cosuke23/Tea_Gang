<?php
include_once("db1.php");
include_once("db.php");
include_once("session.php");
//empty cart by distroying current session
if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
{
  $return_url = base64_decode($_GET["return_url"]); //return url
  session_destroy();
  header('Location:'.$return_url);
}

//add item in shopping cart
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
  $type   = filter_var($_POST["prod"], FILTER_SANITIZE_STRING);
  $img  = filter_var($_POST["img"]);
  $product_code   = filter_var($_POST["product_code"], FILTER_SANITIZE_STRING);
  $Pname  = filter_var($_POST["name"], FILTER_SANITIZE_STRING); //product code
  $product_qty  = 1; //product code
  $return_url   = base64_decode($_POST["url"]); //return url
  
  //limit quantity for single product
  if($product_qty > 10){
    die('<div align="center">not allowed more than 10 quantity!<br />.</div>');
  }

  //MySqli query - get details of item from db using product code
  $results = $mysqli->query("SELECT name,price,img FROM $type WHERE tea_id='$product_code'   LIMIT 1");

  $obj = $results->fetch_object();
$sqlad = mysqli_query($conn,"SELECT * FROM admin Where id='$session_id'");

   



  while($rowad= mysqli_fetch_array($sqlad)){ 
           
       $c_name= $rowad['Name'];
       $date=date("Y/m/d");
     }
  $resultx = $mysqli->query("INSERT INTO `temp`(`id`, `flower_id`, `img`, `name`, `price`, `qty`, `total`, `cus_name`, `type`) VALUES ('$session_id','$product_code','$obj->img','$obj->name','$obj->price','1','$obj->price','$c_name','Milk Tea')")or die(mysqli_error());
  $resulty = $mysqli->query("INSERT INTO `reservation`( `firstname`, `lastname`, `city`, `address`, `country`, `email`, `contact`, `payable`, `status`, `confirmation`, `delivery`, `d_date`, `time`, `payment`, `delivery_type`) VALUES ('Joel','Talion','','Walkin','','','','$obj->price','Paid','$session_id','','$date','','Counter','')")or die(mysqli_error());

  $resultz = mysqli_query($conn,"SELECT * FROM milk_tea where tea_id ='$product_code'")or die (mysqli_error());
  $row = mysqli_fetch_array($resultz);
  $c_qty=$row['qty'];
  $n_qty=$c_qty-1;
  $resultsz = mysqli_query($conn,"UPDATE milk_tea set qty='$n_qty' where tea_id ='$product_code'")or die (mysqli_error());

  if ($results) { //we have the product info 
    
    //prepare array for the session variable
    $new_product = array(array('name'=>$obj->name, 'code'=>$product_code, 'qty'=>$product_qty, 'price'=>$obj->price, 'img'=>$img));
    
    if(isset($_SESSION["products"])) //if we have the session
    {
      $found = false; //set found item to false
      
      foreach ($_SESSION["products"] as $cart_itm) //loop through session array
      {
        if($cart_itm["name"] == $Pname){ //the item exist in array

          $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$product_qty, 'price'=>$cart_itm["price"], 'img'=>$cart_itm["img"]);
          $found = true;
        }else{
          //item doesn't exist in the list, just retrive old info and prepare array for session var
          $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"], 'img'=>$cart_itm["img"]);
        }
      }
      
      if($found == true) //we didn't find item in array
      {
        //add new user item in array
        $_SESSION["products"] = array_merge($product, $new_product);
      }else{
        //found user item in array list, and increased the quantity
                $_SESSION["products"] = array_merge($product, $new_product);
      }
      
    }else{
      //create a new session var if does not exist
      $_SESSION["products"] = $new_product;
    }
    
  }
  
  
  //redirect back to original page
  header('Location:'.$return_url);
}

//remove item from shopping cart
if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["products"]))
{
  $product_code   = $_GET["removep"]; //get the product code to remove
  $return_url   = base64_decode($_GET["return_url"]); //get return url

  
  foreach ($_SESSION["products"] as $cart_itm) //loop through session array var
  {
    if($cart_itm["code"]!=$product_code){ //item does,t exist in the list
      $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
    }
    
    //create a new product list for cart
    $_SESSION["products"] = $product;
  }

  
  //redirect back to original page
  header('Location:'.$return_url);
}
?>