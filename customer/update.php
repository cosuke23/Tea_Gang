
<?php
include_once("db.php");
include('welcome.php');

//empty cart by distroying current session

if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
{//return url
	$c_n=$_GET['id'];
		mysql_query("DELETE FROM temp WHERE id='$c_n'");
$return_url = base64_decode($_GET["return_url"]);

	header('Location:'.$return_url);
}

//add item in shopping cart
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	$qty=$_POST['product_qty'];
			$names=$_POST['pname'];
			$price=$_POST['price'];
			$img=$_POST['img'];
			$flower=$_POST['product_code'];
			$typ=$_POST['typ'];
			$qty=$_POST['product_qty'];
		
			$total=($price*$qty);

$results = mysql_query("SELECT * FROM $typ WHERE flower_id='$flower'");
			while($row2 = mysql_fetch_array($results))
	{
$quan=$row2['qty'];
}
$quant=($quan-$qty);
mysql_query("UPDATE $typ set qty='$quant' where flower_id='$flower' ");
$cname=$_SESSION['Name'];
$res = mysql_query("SELECT * FROM temp WHERE name='$names' and cus_name='$cname'");
		$count= mysql_num_rows($res);
			while($r = mysql_fetch_array($res))

	{
$quan=$r['qty'];

}
if($count>0){
$quanti=($quan+$qty);
mysql_query("UPDATE temp set qty='$quanti' where name='$names' and cus_name='$cname' ");
	}
	else{
					$price=$_POST['price'];
								$qty=$_POST['product_qty'];
					$total=($price*$qty);
			mysql_query("INSERT INTO temp (flower_id,img, name,price, qty, total,id, cus_name) VALUES('$flower','$img', '$names','$price', '$qty', '$total','$id', '$cname')");
			}
			$url=$_POST["curl"];
header('Location:'.$url);

//header("location:  ");

	//redirect back to original page
if(isset($_POST["type"]) && $_POST["type"]=='add'){
	
}
}


//remove item from shopping cart
if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["products"]))
{
	$product_code 	= $_GET["removep"]; //get the product code to remove
	
	
	foreach ($_SESSION["products"] as $cart_itm) //loop through session array var
	{
		if($cart_itm["code"]!=$product_code){ //item does,t exist in the list
			$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
		}
		
		//create a new product list for cart
		$_SESSION["products"] = $product;
	}

	
	//redirect back to original page
}
?>