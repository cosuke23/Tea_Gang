<?php
include_once('db.php');
include('header_admin.php');

?>


<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to Toki's </title>

        <!-- CSS -->
  
        
        <link rel="stylesheet" href="../assets/css/media-queries.css">
        <link rel="shortcut icon" href="../images/logo.png">
<!--Take a look -->
                <link rel="stylesheet" type="text/css" href="../cssi/default.css" />
        <link rel="stylesheet" type="text/css" href="../cssi/component.css" />
        <script src="jsi/modernizr.custom.js"></script>

  <link rel="stylesheet" type="text/css" href="../engine1/style.css" />
  <script type="text/javascript" src="../engine1/jquery.js"></script>


<!-- facebox chief-->
  <link href="../src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="../lib/jquery.js" type="text/javascript"></script>
  <script src="../src/facebox.js" type="text/javascript"></script>
    <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
      {

 $.ajax({
   type: "GET",
   url: "deleteres.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
    .animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>

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
<!-- WRAPPER START -->
<div class="container_16" id="wrapper"> 
<!-- HIDDEN COLOR CHANGER -->      
      <div style="position:relative;">
    <!--LOGO-->
   </div> 
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<!-- MENU END -->
</div>


<!-- CONTENT START -->
    <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
     <h1 class="dashboard">Claimed Deliveries</h1>
    </div>
    </div>
    </div>
    
    </div>
    
     <div class="services-half-width-container">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 services-half-width-text wow fadeInLeft">
            <div class="table-responsive">
         <form action="" method="post">
      
              <table class="table table-bordered table-hover">
                <tr class="danger">
            <th  style="border-left: 1px solid #C1DAD7"> Confirmation Number </th>
            <th> Name </th>
            <th> Address </th>
            <th> Contact </th>
            <th> Email </th>
            <th> Delivery Address </th>
            <th> Status </th>
            <th> Payment Method</th>
            <th> Action </th>
          </tr>
        </thead>
        <tbody>
        <?php
include_once('db.php');

          $result = $mysqli->query("SELECT * FROM reservation where status='Claimed' ORDER BY firstname ASC");
          while($row = mysqli_fetch_array($result))
            {
              echo '<tr class="record" id="'.$row['status'].'">';
			  echo '<td>'.$row['confirmation'].' </td>';
          echo '<td>'.$row['firstname'].' '.$row['lastname'].'</td>';
              echo '<td><div align="left">'.$row['address'].'</div></td>';
              echo '<td><div align="left">'.$row['contact'].'</div></td>';
              echo '<td><div align="left">'.$row['email'].'</div></td>';
              echo '<td><div align="left">'.$row['delivery'].'</div></td>';
              echo '<td><div align="left">'.$row['status'].'</div></td>';
              echo '<td><div align="left">'.$row['payment'].'</div></td>';
              echo '<td><div align="center"><a rel="facebox" href="vieworders.php?ids='.$row['firstname'].'&cid='.$row['reservation_id'].'" title="Click To View Orders">View Orders</a> | <a rel="facebox" href="viewreport.php?id='.$row['confirmation'].'" title="Click To View Orders">Print</a> </div></td>';
              echo '</tr>';
            }
          ?> 
           </tr>
              </table>
        </tbody>
      </table>
      </form>
      </div>
    </div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

</div>
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->

<!-- FOOTER END -->
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
      {

 $.ajax({
   type: "GET",
   url: "deleteres.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
    .animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>