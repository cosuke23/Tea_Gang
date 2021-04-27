<!DOCTYPE html>
<?php
 include_once('db.php');
  include_once('db1.php');
include('header_admin.php');


?>

<html lang="en">
    <head>
        <style type="text/css">
          /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
        </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Toki Milk Tea </title>

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

    <body >
        
        <!-- Top menu -->
	 

        <br>

        <br>
		<br>
     <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-tasks"></i>
                        <p><b> <a href="product.php?flavor=<?php echo 'Bubble' ?>">Milk Tea</a></b></p>
                        <p><b>  <a href="flavor.php?flavor=<?php echo 'Matcha' ?>">flavor</a></b></p>
                       <a class="btn btn-primary" rel=facebox href="addprod.php?type=milk_tea&&flavor=Matcha">ADD</a> <a href="flavor.php?flavor=<?php echo 'Redvelvet' ?>">Red Velvet</a>|| <a href="flavor.php?flavor=<?php echo 'Taro' ?>">Taro</a> ||<a href="flavor.php?flavor=<?php echo 'Matcha' ?>">Matcha</a>|
                       <a href="flavor.php?flavor=<?php echo 'Winter Melon' ?>">Winter Melon</a>
                    </div>
                </div>
            </div>
        </div>
  <div class="services-full-width-container">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 services-full-width-text wow fadeInLeft">
                      
                  </div>
              </div>
          </div>
        </div>

        <!-- Services Half Width Text -->
        <div class="services-half-width-container">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 services-half-width-text wow fadeInLeft">
            <div class="table-responsive">
           
              <table class="table table-bordered table-hover">
                <tr class="danger">
                  <th>product</th>
                  <th>quantity</th>
                  <th>price</th>
                  <th>Action</th>
                
                                <?php
                                $flavor=$_GET['flavor'];
                                    if($flavor=="Redvelvet"){
  $results = $mysqli->query("SELECT * FROM milk_tea where flavor ='$flavor'");
}else{
  $results = $mysqli->query("SELECT * FROM milk_tea where flavor ='$flavor'");
}
                                    while($row=mysqli_fetch_array($results)) { ?>
                                    <tr>
                                        <td> <?php echo $row['name']; ?> </td>
                                        <td> <?php echo $row['qty']; ?> </td>
                                        <td> <?php echo $row['price']; ?> </td>
                           <td style="text-align:center;">  <a class="btn btn-primary" rel=facebox href="edit.php?id=<?php echo $row['tea_id']; ?>">EDIT</a> <a class="btn btn-primary" name="" href='cancelapp.php?id=<?php echo $row['tea_id']; ?>'>
                             <?php
                             if($row['status']=="Active"){
                              echo "Active";
                            }else{
                              echo "InActive";
                            }

                             ?>

                           </a>
          

                            <?php if ($row['status'] =="Active") : ?>
<label class="switch">
  <input checked type="checkbox">
  <span class="slider round"></span>
</label>

<?php else : ?>
<label class="switch">
  <input  type="checkbox">
  <span class="slider round"></span>
</label>

<?php endif; ?>



  </td>             </tr>
                                   
                                    <?php } ?>    

                                    
                </tr>
              </table>
           
        <div id="auto">
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>


    </body>

</html>