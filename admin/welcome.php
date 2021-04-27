
			
				<?php
				include('db.php');
				$result = mysql_query("SELECT * FROM user");
				while($row = mysql_fetch_array($result))
					{
						echo '<tr class="record">';
						echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['AdminName'].'</td>';
						
						
						echo '</tr>';
					}
				?> 
				</tbody>
			</table>
	