	<h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of User</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">No.</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Account Name</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Username</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Type</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT * 
											FROM  `useraccounts`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
				  		echo '<td width="5%" align="center"></td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->ACCOUNT_ID. '"/>
				  				<a href="index.php?view=edit&id='.$result->ACCOUNT_ID.'" style="color:#780000;">' . $result->ACCOUNT_NAME.'</a></td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->ACCOUNT_USERNAME.'</td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->ACCOUNT_TYPE.'</td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group" style="background-color:#780000; border-radius:5px;">
				  <a href="index.php?view=add" class="btn btn-default" style="background-color:#780000;">New</a>
				  <button type="submit" class="btn btn-default" name="delete" style="background-color:#780000;"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			} ?>
			
				</form>
	

</div><!--End of container-->
