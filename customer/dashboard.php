<!DOCTYPE html>
<?php
 include_once('../db1.php');
 include_once('../db.php');
 include('header.php');
 error_reporting(0);

session_start();

?>

<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Toki milk tea</title>

        <!-- CSS -->
  
        
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="shortcut icon" href="images/logo.png">
<!--Take a look -->
                <link rel="stylesheet" type="text/css" href="cssi/default.css" />
        <link rel="stylesheet" type="text/css" href="cssi/component.css" />
        <script src="jsi/modernizr.custom.js"></script>

  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>


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
        
        <!-- Top menu -->
	 

        <br>

        <br>
		<br>
     <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-tasks"></i>
                        <h1>Welcome '<?php
                        $id=$_SESSION['id'];
                        $results = mysqli_query($conn,"SELECT * from customers where id = '$id' ")or die(mysqli_error());
      $row2 = mysqli_fetch_array($results);
      $name=$row2['Name'];
                         echo $name; ?>' </h1><br>
                      
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
              <h3>ordered product</h3>
              <table class="table table-bordered table-hover">
                <tr class="danger">
                  <th>Status</th>
                  <th>Date to deliver</th>
                  <th>Price</th>
                  <th>total</th>
                  <th>Action</th>
                
                                <?php
                                $id=$_SESSION['id'];
                        $results = mysqli_query($conn,"SELECT * from customers where id = '$id' ")or die(mysqli_error());
      $row2 = mysqli_fetch_array($results);
      $name=$row2['Name'];

                                    $query=mysqli_query($conn,"SELECT * from reservation where firstname = '$name'  order by payable DESC ");
                                    while($row=mysqli_fetch_array($query)) {
$qty=1;
									$price=$row['payable'];
									$total=($price*$qty);	
                  $status=$row['status'];				
                  $url = "dashboard.php";
                  					?>
                                    <tr>
                                        <td><?php echo $status; ?>  </td>
                                        <td> <?php echo $row['d_date']; ?> </td>
                                        <td> <?php echo $row['payable']; ?> </td>
                                        <td> <?php echo number_format($total); ?> </td>
                                        <?php
                                        if($status=='To Deliver'){

                                        }else{
                                        ?>
                                        <td style="text-align:center;"> <a class="btn btn-primary" href='cancelapp.php?cnt=<?php echo $row['reservation_id']; ?>&url=<?php echo $url; ?>'>Cancel</a> </td>
                                        <?php
                                      }
                                      ?>
                                    </tr>
                                    <?php } ?>    

                                    
                </tr>
              </table>
           
        <div id="auto">
   <footer style=" color:Black;">
            <div class="container" style="background-color:#FFDAB9">
                </div>
                <div class="row">
                  <div class="col-sm-12 wow fadeIn">
                    <div class="footer-border"></div>

                  </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">

                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">

                    </div>
                </div>
            </div>
        </footer>
  
</div>
        <!-- Footer -->
      <?php
      include('foots.php');
      ?>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>


    </body>

</html>