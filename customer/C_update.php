
<?php
include_once("db.php");
include('welcome.php');

//empty cart by distroying current session
$url=$_GET["url"];
if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
{//return url
	session_destroy();
	header('Location:'.$return_url);
}

//add item in shopping cart
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	$qty=$_POST['product_qty'];
			$names=$_POST['pname'];
			$price=$_POST['price'];
			$img=$_POST['img'];
			$code=$_POST['code'];
			$flower=$_POST['product_code'];
			$typ=$_POST['typ'];
			$qty=$_POST['product_qty'];
		
			$total=($price*$qty);
			$cnames=$_SESSION['Name'];
			
$ral = 0;
$resultx = mysql_query("SELECT * FROM customization WHERE cus_name='$cnames'");
			while($rowx = mysql_fetch_array($resultx))
	{
$fcode=$rowx['code'];
$rose=$rowx['Ncount'];
$lavander=$rowx['count'];

$ral=($rose + $lavander);
}
$max=11;
if($ral>$max){
	$err[] = "Invalid Login. Please try again with correct User ID and password.";
   echo "<div class=\"msg\">";
    foreach ($err as $e) {
      $echo = "<script type='text/javascript'>alert('Wrong Username or Password!'); window.location.href = 'login.php';</script>";
      echo "$echo <br>";
      }
    echo "</div>";  
     
    

}
else
{

$results = mysql_query("SELECT * FROM combinations WHERE code='$codes'");
			while($row2 = mysql_fetch_array($results))
	{
$quan=$row2['qty'];
}
$quant=($quan-$qty);
mysql_query("UPDATE combinations set qty='$quant' where flower_id='$flower' ");
$cname=$_SESSION['Name'];
$res = mysql_query("SELECT * FROM customization WHERE cus_name='$cnames' ");
		$count= mysql_num_rows($res);
			while($r = mysql_fetch_array($res))

	{
$xcode=$r['code'];
$presyo=$r['price'];

}
$prices=($presyo+$price);
mysql_query("UPDATE customization set qty='$quant',price='$prices' where cus_name='$cnames' ");

if($count>0){
	
	if($names=='lavander'){
		$start = mysql_query("SELECT * FROM customization WHERE cus_name='$cnames' ");
			while($q = mysql_fetch_array($start))

	{
$num=$q['count'];
$Nnum=$q['Ncount'];
$cd=$q['code'];

}

$i=$Nnum;
		$fcodes=++$i;
	//	echo "1".++$fcodes."";
		$i++;
	/*	for($i=0;$i<$max;$i++){
			$fcode
		
	}*/
if($Nnum>0)	
{
$is=$num;
		$fcodez=++$is;
	//	echo "1".++$fcodes."";
		$is++;


            mysql_query("UPDATE customization set code='r$Nnum-l$fcodez',img='r$Nnum-l$fcodez.png',count='$fcodez',price='$prices' where  cus_name='$cname' ");
}
else{

$is=$num;
		$fcodez=++$is;
	//	echo "1".++$fcodes."";
		$is++;
			mysql_query("UPDATE customization set code='$code-$fcodez',img='$code-$fcodez.png',count='$fcodez',price='$prices' where  cus_name='$cname' ");
		}
		               }
		else if($names=='rose'){
		$rose = mysql_query("SELECT * FROM customization WHERE cus_name='$cnames' ");
			while($r = mysql_fetch_array($rose))

	{
$nums=$r['count'];
$Nnums=$r['Ncount'];
$cds=$r['code'];

}

$ii=$Nnums;
		$fcodex=++$ii;
	//	echo "1".++$fcodes."";
		$ii++;
	/*	for($i=0;$i<$max;$i++){
			$fcode
		
	}*/
if($Nnums>0&&$nums==0)	
{
$is=$nums;
		$fcodez=++$is;
	//	echo "1".++$fcodes."";
		$is++;
			if($names=='rose'){

            mysql_query("UPDATE customization set code='r$fcodex',img='r$fcodex.png',Ncount='$fcodex' where  cus_name='$cname' ");
}
else if($names=='lavander'){
	$pricex=($price+35);
mysql_query("UPDATE customization set code='r$Nnums-l$fcodez',img='r$Nnums-l$fcodez.png',count='$fcodez',price='$pricex' where  cus_name='$cname' ");	
}
}
else{
if($names=='rose'){

            mysql_query("UPDATE customization set code='r$fcodex-l$nums',img='r$fcodex-l$nums.png',Ncount='$fcodex' where  cus_name='$cname' ");
}
else if($names=='lavander'){
mysql_query("UPDATE customization set code='l$fcodez',img='l$fcodez.png',count='$fcodez',price='$prices' where  cus_name='$cname' ");	
}
		}
	}
}
else{
if($names=='rose'){
	$Ncount=1;
				mysql_query("INSERT INTO customization (flower_id,img, name,price, qty, total,id, cus_name,code,count,Ncount) VALUES('$flower','$img', '$names','$price', '$qty', '$total','$id', '$name','$code','$count','$Ncount')");
}
else if($names=='lavander'){
	$count=1;
				mysql_query("INSERT INTO customization (flower_id,img, name,price, qty, total,id, cus_name,code,count,Ncount) VALUES('$flower','$img', '$names','$price', '$qty', '$total','$id', '$name','$code','$count','$Ncount')");
}
}	
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