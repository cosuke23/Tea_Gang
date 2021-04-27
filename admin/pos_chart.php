<!DOCTYPE html>
<html lang="en">
<?php include('header_admin.php'); ?>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Toki Milk Tea </title>

        <!-- CSS -->
  <!--slider -->
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="../assets/css/form-elements.css">
        <!--end slider -->

        <link rel="stylesheet" href="../assets/css/media-queries.css">
        <link rel="shortcut icon" href="../images/logo.png">
<!--Take a look -->
                <link rel="stylesheet" type="text/css" href="../cssi/default.css" />
        <link rel="stylesheet" type="text/css" href="../cssi/component.css" />
        <script src="../jsi/modernizr.custom.js"></script>
<!-- end Take a look -->
    </head>

    <body style="background:white; ">
        
        <!-- Top menu -->
	 
        <br>
        <br>
<form method="post" action="" name="form1">
<label>Delivery Date

</label>
<input type="Date" name="from" id="email" />
 to 
 <label>Delivery Date

</label>
<input type="Date" name="to" id="email" />
<input type="submit" name="btn" value="view sale" />
</form>
        <!-- Slider -->
		        <div class="col-sm-12 services-half-width-text wow fadeInLeft">
            <div class="table-responsive">
           
              <table class="table table-bordered table-hover">
                <tr class="danger">
                  <th>product</th>
                  <th>date</th>
                  <th>payable</th>
                
                                <?php
if (isset($_POST['btn'])) {
                                $from=$_POST['froms'];
                                $to=$_POST['tos'];


                                    $query=$mysqli->query("SELECT * from reservation where `D_date` >='$from' and payable>0  ");
                                
                                    $url="basket.php";
                                    while($row=mysqli_fetch_array($query)) { ?>
                                    <tr>
                                        <td> <?php echo $row['firstname'],$row['lastname']; ?> </td>
                                        <td> <?php echo $row['d_date']; ?> </td>
                                        <td> <?php echo number_format($row['payable']); ?> </td>
                                   
                                    <?php } ?>
                                    <?php } ?>    

                                    
                </tr>
              </table>
    </body>

</html>
<?php
$query=$mysqli->query("SELECT * from reservation where `D_date` >='$from' and payable>0  ");
                                
                                    $url="basket.php";
                                    while($row=mysqli_fetch_array($query)) {
$data1='120';
$data2='2';
$date=$row['d_date'];
$payable=$row['payable']; 
$dataPoints = array( 
    array("y" => $payable,"label" => $date ),
    array("y" => 12,"label" => "April" ),
    array("y" => 28,"label" => "May" ),
    array("y" => 18,"label" => "June" ),
    array("y" => 41,"label" => "July" )
);
 }
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title:{
        text: "Revenue Chart of Toki Milk tea"
    },
    axisY: {
        title: "Revenue",
        includeZero: true,
        prefix: "$",
        suffix:  "k"
    },
    data: [{
        type: "bar",
        yValueFormatString: "$#,##0K",
        indexLabel: "{y}",
        indexLabelPlacement: "inside",
        indexLabelFontWeight: "bolder",
        indexLabelFontColor: "white",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 