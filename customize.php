<?php
session_start();
//include('welcome.php'); ,'$id', '$name'
require_once("db.php");
//include('welcome.php');
            
?>  
<HTML>
<HEAD>
    <link href="style.css" type="text/css" rel="stylesheet" />
<TITLE>Simple PHP Shopping Cart</TITLE>


<script type="text/javascript" language="Javascript">
    var sum=0;
    price = document.frmOne.select1.value;
    document.frmOne.txtDisplay.value = price;
    function OnChange(value){
        
        price = document.frmOne.select1.value;
        quantity = document.frmOne.select2.value;
        sum = price * quantity;
        
        document.frmOne.txtDisplay.value = sum;
    }
</script>
<SCRIPT language=Javascript>
              <!--
              function isNumberKey(evt)
              {
                 var charCode = (evt.which) ? evt.which : event.keyCode
                 if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;

                 return true;
              }
              //-->
        </SCRIPT>
</HEAD>
<BODY>
<div>
    

  <table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th><strong>Name</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Price</strong></th>
<th><strong>Action</strong></th>
</tr> 
<?php   
     $results = mysql_query("SELECT * ,(SELECT sum(total))as totals  FROM temp ");
while($row = mysql_fetch_array($results))
    { ?>
        <tr>
        <td><strong><?php echo $row["name"]; ?></strong></td>
        <td><?php echo $row["qty"]; ?></td>
        <td align=right><?php echo "$".$row["price"]; ?></td>
        <td><a href="index.php?action=remove&code=<?php echo $row["flower_id"]; ?>" class="btnRemoveAction">Remove Item</a></td>
        </tr>
        <?php
        $totals=$row["totals"];

    }
    ?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$totals; ?></td>
</tr>
</tbody>
</table>    

  ?>

</div>


    <div id = "pink">
   
  <div id="product-grid">
    <div class="txt-heading">Products</div>
    <?php
  $result2 = mysql_query("SELECT * FROM flowers ");
while($row2 = mysql_fetch_array($result2))
    {
      $flower=$row2['flower_id'];
    $price=$row2['price'];
    $name=$row2['name'];
  $img=$row2['img'];
    //echo '<span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">'.$row2['description'].'</span>';
    
  ?>
          <div class="product-item">
                <div><img src="assets/img/slider/f2/<?php echo $img?>" alt="flower" title="<?php echo $name?>" /><br> </div>
     <div><span style="color:#B80000; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;"><?php echo $name  ?></span><br> </div>
  <form NAME = "frmOne" action="initiate.php" method="post" enctype="multipart/form-data">
 <input type="hidden" name="number" value="<?php echo $flower?>" />
  <input type="hidden" name="img" value="<?php echo $img ?>" />
 <input type="hidden" name="customer" value=" <?php echo $_SESSION['Name']; ?>"/>
 <input type="hidden" name="cus" value=" <?php echo $cus ?>"/>
    <input type="hidden" name="transnum" value="<?php echo $_GET['trnasnum'] ?>" />
  <div>   <INPUT TYPE = "Text" name = "select1" size = "35" value ="<?php echo $price ?>" style="display:none;"> </div>
     <div><INPUT TYPE = "Text" name = "pname" size = "35" value ="<?php echo $name ?>" style="display:none;"> </div>
         <div> <span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">P<?php echo $price ?>.00 </span> </div>
    <div> <span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">Quantity : </span> </div>
    <div> <input type="text" name="select2" style="width:60px;" value=""/>  </div>           
        <div>     <input type="submit" value="ADD" style="padding:10px; border-radius:15px; background-color:pink; border:none; color:#ffffff; font-weight:bold; border: 1px solid #000000"/> </div>
 </form>
</div>

    <?php
            
            }
    ?>

    
</div>
</div>
</BODY>
</HTML>