<?php
		include('db.php');
		
				$username = $_POST['club'];

		/* student */
			$query = "SELECT * FROM clubs ";
			$result = mysql_query($query)or die(mysql_error());
			$row = mysql_fetch_array($result);
			$num_row = mysql_num_rows($result);
		/* teacher */
		
		
		if( $num_row > 0 ) { 

		echo 'true';	
		}
		 else{ 
				echo 'false';
		}	
				
		?>