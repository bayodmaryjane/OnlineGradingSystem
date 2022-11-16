<?php
		check_message();
			
		?>
		<div class="well">

			    <form action="controller.php?action=delete" Method="POST">  
					<caption><h3 align="left">List of Rooms</h3></caption>					
				<table id="example"  class="table table-hover">
				  <thead>
				  	<tr>
				  		<th> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Room Name</th>
				  		<th>Department Description</th>
                        <th>Action</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$room = new Room();
						$cur = $room->listOfroom();
						foreach ($cur as $Room) {
				  		echo '<tr>';

				  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$Room->ROOM_ID. '"/>' . $Room->ROOM_NAME.'</td>';
				  		echo '<td>'. $Room->ROOM_DESC.'</td>';
                        echo '<td><a href="index.php?view=edit&id='.$Room->ROOM_ID.'">Edit</a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>	
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
