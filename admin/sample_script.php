
<script type="text/javascript">
  
  function av(avSelect)
{
//var one=avSelect.form.one.value;
//var two=avSelect.form.two.value;
var one = parseFloat(avSelect.form.one1.value);
var two = parseFloat(avSelect.form.two1.value)
var avvy=one+two;
avSelect.form.avvy.value=avvy;
//var avvy=parseInt(one)+parseInt(two);
}
</script>

<?php
$price="5";
$count="0";
?>
        <form name="5">
<br>
  <?php
      include('../db.php');
      include('../db1.php');
     

  
  
        //fetch results set as object and output HTML
      $count="0";
         $query=$mysqli->query("SELECT * from milk_tea  ");
                                    while($row=mysqli_fetch_array($query)) {
          $name=$row['name'];
          $count++;
           ?>
Adding<input type="number" id="avvy" value="">
Put a number in:<input type="number" name="one<?php echo $count ?>" value="<?php echo $price ?>" id="one<?php echo $count ?>" OnChange="av(this)">
Put a number in:<input type="number" id="two<?php echo $count ?>" name="two<?php echo $count ?>" OnChange="av(this)">
</form>
 <?php
    }
  
    ?>


     <form name="5">

   <?php
      include('../db.php');
      include('../db1.php');
     

  
  
        //fetch results set as object and output HTML
      $count="0";
         $query=$mysqli->query("SELECT * from milk_tea  ");
                                    while($row=mysqli_fetch_array($query)) {
          $name=$row['name'];
          $price=$row['price'];
            $count++;
           ?>
        
      <div class="layout-inline row">
        
        <div class="col col-pro layout-inline">
          
          <p><?php echo $name; ?></p>
        </div>
        
        <div >
          <input type="number" name="one<?php echo $count ?>" value="<?php echo $price ?>" id="one<?php echo $count ?>" OnChange="av(this)">
        </div>

        <div class="col col-qty layout-inline">
      
          <input type="number" id="two<?php echo $count ?>" name="two<?php echo $count ?>" OnChange="av(this)">
        
        </div>
        
        <div class="col col-vat col-numeric">
          <input class="input focused" style="width:50px;" name="vat" type="number">
        </div>
        <div class="col col-total col-numeric">              
         <input type="number" id="avvy" value="" placeholder="total">
        </div>
      </div>
     </form>
      <?php
    }
  
    ?>