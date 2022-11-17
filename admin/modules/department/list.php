<?php
		check_message();
			
		?>
		<div class="well">

			    <form action="controller.php?action=delete" Method="POST">  	
					<caption><h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of Department</h3></caption>				
				<table id="example" class="table table-hover">
				  <thead>
				  	<tr>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;"> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Department Name</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Department Description</th>
                        <th style="font-size:16px; font-family:Poppins; font-weight:900;">Action</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$dept = new Dept();
						$cur = $dept->listOfDept();
						foreach ($cur as $Department) {
				  		echo '<tr>';

				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><input type="checkbox" name="selector[]" id="selector[]" value="'.$Department->DEPT_ID. '"/>' . $Department->DEPARTMENT_NAME.'</td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $Department->DEPARTMENT_DESC.'</td>';
                        echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;" ><a href="index.php?view=edit&id='.$Department->DEPT_ID.'" style="color:#780000;"> Edit </a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td></td><td></td><td></td></tr>
				  </tfoot>	
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group" style="background-color:#780000; border-radius:5px;">
				  <a href="index.php?view=add" class="btn btn-default" style="background-color:#780000; ><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-default" name="delete" style="background-color:#780000; ><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
			?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
