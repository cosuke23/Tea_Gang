
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
Order Date: <?php
include('../db.php');
include('../db1.php');
		$id1=$_GET['cid'];
	$results = mysqli_query($conn,"SELECT d_date FROM reservation WHERE reservation_id='$id1' ");
		
		$rows = mysqli_fetch_array($results);
			
				echo $rows['d_date'];
			
	?> 
<table cellpadding="1" cellspacing="1" id="resultTable">
	<thead>
		<tr>
			<th  style="border-left: 1px solid #C1DAD7"> Name </th>
			<th> Quantity </th>
			<th> total </th>
		</tr>
	</thead>
	<tbody>
	<?php
		
		$id=$_GET['ids'];
		$result = mysqli_query($conn,"SELECT * FROM temp WHERE cus_name='$id' ");
		$row = mysqli_fetch_array($result);
			
				echo '<tr class="record">';
				echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['name'].'</td>';
				echo '<td>'.$row['qty'].' </td>';
				echo '<td>'.$row['total'].'| <a rel="facebox" href="design.php?id='.$row['cnt'].'">View Design</a></td>';
				echo '</tr>';
			
	?> 
	<?php
		$ids=$_GET['ids'];
		$cid=$_GET['cid'];
		$result = mysqli_query($conn,"SELECT * FROM reservation WHERE firstname='$ids' and reservation_id='$cid'");
		$row = mysqli_fetch_array($result);
				echo '<tr class="record">';
				echo '<td style="border-left: 1px solid #C1DAD7;">Total Payable</td>';
				echo '<td>'.$row['payable'].'</td>';
				echo '</tr>';
		?>
	</tbody>
</table>