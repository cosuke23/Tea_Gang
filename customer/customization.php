<?php
error_reporting(0);
session_start();
include_once("db1.php");
include_once("db.php");
include('header.php');

?>
<html>
<head>
	 <link href="customization.css" type="text/css" rel="stylesheet" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" href="cssmenu/styles.css">
   <script src="cssmenu/script.js"></script>
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      <link rel ="stylesheet" type="text/css" href="css/occassion.css"/>
                <link rel="stylesheet" type="text/css" href="cssi/default.css" />
   <title>MCJ's Flower shop</title>
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
<div id="orange" style="background:url('../g4.jpg')" >
  <div >
      <br>

<h2> <center>Flowers</center></h2>
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
  $current_url = "customization.php";
    
  $results = $mysqli->query("SELECT * FROM flowers WHERE qty>0");
$type="rose";    
    if ($results) { 
  
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
         echo'<center>';
                echo '<li>';  
            echo '<form method="post" action="C_update.php?url="'.$current_url.'"&type='.$type.' ">';
            echo '<input type="hidden" name="img" value="'.$obj->img.'" />';
            echo '<input type="hidden" name="code" value="'.$obj->code.'" />';
            echo '<input type="hidden" name="typ" value="'.$type.'" />';
            echo '<input type="hidden" name="curl" value="'.$current_url.'" />';

                          echo '<input type="hidden" name="pname" value="'.$obj->name.'" readonly />';
           
            echo '<input type="hidden" name="name" value="'.$_SESSION['Name'].'" size="3" />';
         
                          echo '<p style="size:10;  font-family:Verdana; color:white;"><b>Price&nbsp:&nbsp&nbsp</b><p/><input type="text" size="10" style="width:40px" name="price" value="'.$obj->price.'" readonly />';
      

            echo ' <input type="hidden" name="product_qty" value="1" size="30" width:10px; height:50px;  />';
            echo'<br>';
      echo '<button class="add_to_cart"><img size="25"  src="../assets/img/slider/New Folder/flowers/'.$obj->img.'"></button>';
      
            echo '<input type="hidden" name="product_code" value="'.$obj->flower_id.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '</form>';
            
            echo '</li>';
        echo'</center>';
        }
    
    }
    ?>
</div>

</div>
		<div id="green">

			<div id="yellow"  style="background:url('../c21.png')">
        <div style=" height:100px; width:830px; background-color:pink;">
          <center>
<br>

                    <?php
      $query=mysql_query("SELECT * from customization where id = '".$_SESSION['id']."' ");
                            
                                    while($row=mysql_fetch_array($query)) {

                                      $count=$row['count'];


                }
                if($count>0){


           echo 'Lavender&nbsp&nbsp<a  href="editlavander.php?id='.$row['cnt'].'"><img src="minus.png"></a>&nbsp&nbsp';
           echo '<a  href="editL.php?ids='.$row['cnt'].'"><img src="garbage.png"></a>';
             }
else{

}
?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

           <?php
      $query=mysql_query("SELECT * from customization where id = '".$_SESSION['id']."' ");
                            
                                    while($row=mysql_fetch_array($query)) {

                                      $Ncount=$row['Ncount'];


                }
                if($Ncount>0){

           echo'   Rose&nbsp&nbsp<a  href="editrose.php?id='.$row['cnt'].'&rose='.$row['Ncount'].'"><img src="minus.png"></a>&nbsp&nbsp';
            echo '<a  href="editR.php?ids='.$row['cnt'].'"><img src="garbage.png"></a>';
             }
else{

}

?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

          <?php
      $query=mysql_query("SELECT * from customization where id = '".$_SESSION['id']."' ");
                            
                                    while($row=mysql_fetch_array($query)) {

                                      $cover=$row['cover'];


                }
                if($cover==true){

            echo 'Cover&nbsp&nbsp<a  href="editc.php?ids='.$row['cnt'].'"><img src="garbage.png"></a>';
             }
else{

}

?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   <?php
    //current URL of the Page. cart_update.php redirects back to this URL
  $current_url = "customization.php";
    $id=$_SESSION['id'];
  $results = $mysqli->query("SELECT * FROM customization WHERE id='$id'");
$type="rose";    
    if ($results) { 
  
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {


                                echo 'Price&nbsp&nbsp'; 
                            echo '<input type="text" value='.$obj->price.' size="10" style="width:40px" readonly/><a  href="delete.php?ids='.$obj->cnt.'"><img src="garbage.png"></a>';
                  
        }
    
    }
    ?>

<br>
<br>
<br>

   <?php
    //current URL of the Page. cart_update.php redirects back to this URL
  $current_url = "customization.php";
    $id=$_SESSION['id'];
  $results = $mysqli->query("SELECT * FROM customization WHERE id='$id'");
$type="rose";    
    if ($results) { 
  
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {


      echo '<a ><div class="product-thumb"><img src="../assets/img/slider/New Folder/'.$obj->img.'"></a></div>';
                  
        }
    
    }
    ?>

</center>
        </div>



        <h2> <center></center></h2>
     

<br>

        <center>

 
			</div>

			
			<div id="violet" >
   
   <div class="services-half-width-container">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 services-half-width-text wow fadeInLeft">
            <div class="table-responsive">
              <h3>Ordered Flower/s</h3>
  
              <table class="table  table-hover">
                <tr class="danger">
                  <th>Lavender</th>
                  <th>Rose</th>
                  <th>Total</th>
                  <th>Action</th>
                
                                <?php




                                    $query=mysql_query("SELECT * from temp where id = '".$_SESSION['id']."' and name='Customized' ");
                                    while($row=mysql_fetch_array($query)) {
$qty=$row['qty'];
$url="customization.php";
                }
                                
                                    $query=mysql_query("SELECT * from customization where id = '".$_SESSION['id']."' ");
                                    while($row=mysql_fetch_array($query)) {
$qty=$row['qty'];
$url="customization.php";
                  $lavander=$row['count'];
                  $rose=$row['Ncount'];
                  $total=($lavander+$rose);                   

                ?>
                                    <tr>
                                         <center>
                                     
                                    
                                        <td> <input name="lavander" type="hidden" value='<?php echo $fcodes ?>' /><?php echo $lavander?> </td>
                                       
                                     
                                </center>
                               <td><a rel="facebox" href="editrose.php"> <?php echo $rose; ?></a> </td>
                                        <td> <?php echo $total; ?> </td>
                                        <?php
                                        if($total>7){
                                        echo'<td style="text-align:center;"> <a class="btn btn-primary" href="custom.php" ?>BUY!</a> </td>';
                                        }
                                        else{

                                        }
                                        ?>
                                    </tr>
                                    <?php } ?>   
                                    <center> 
               
                </tr>
              </table>
        </div>
          
</div>
        </div>
                </div>
    </div>
</div>
</div>
<div id="blue" style="background:url('../g4.jpg')">
<div    >
  <div  style='overflow-x:hidden;overflow-y:scroll;width:280px;height:550px'>
    <div style='width:340px;height:100px'>
      <br>
<h2> <center>Wrapper</center></h2>
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
  $current_url = "customization.php";
    
  $results = $mysqli->query("SELECT * FROM cover WHERE qty>0");
$type="rose";    
    if ($results) { 
  
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
          echo'<center>';
                echo '<li>';  
            echo '<form method="post" action="cover_update.php?url="'.$current_url.'"&type='.$type.' ">';
            echo '<input type="hidden" name="img" value="'.$obj->img.'" />';
            echo '<input type="hidden" name="typ" value="'.$type.'" />';
            echo '<input type="hidden" name="curl" value="'.$current_url.'" />';

                          echo '<input type="hidden" name="pname" value="'.$obj->name.'" readonly />';
           
            echo '<input type="hidden" name="name" value="'.$_SESSION['Name'].'" size="3" />';
         
                          echo '<input type="hidden" name="price" value="'.$obj->price.'" readonly />';
      

            echo ' <input type="hidden" name="product_qty" value="1" size="3" />';
            echo'<br>';
      echo '<button class="add_to_cart"><img src="../assets/img/slider/products/cover/'.$obj->img.'"></button>';
      
            echo '<input type="hidden" name="product_code" value="'.$obj->cover_id.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '</form>';
            
            echo '</li>';
        echo'</center>';
        }
    
    }
    ?>
</div>
</div>
</div>

</div>








</body>
</html>
  