<div class="well">
	<h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of Faculty</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">No</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">
				  		<input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Fullname</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Address</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Gender</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Specialization</th>
				 		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Email Address</th>
				 		<th style="font-size:16px; font-family:Poppins; font-weight:900;"></th>
				  	</tr>	
				  </thead>
				  <tbody>
				  
				  	<?php
				        if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						

				  		$instructor = new Instructor();
			  	  		$instructor->listOfinstructor();
				  		loadresult();
				  	}else{
				  			$mydb->setQuery("SELECT * 
							FROM   instructor");
							loadresult();
					  		
					}
				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
						  		echo '<tr>';
						  		echo '<td width="5%" align="center" style="font-size:15px; font-family:Poppins; font-weight:500;"></td>';
						  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->INST_ID. '"/>
						  				' . $result->INST_FULLNAME.'</td>';
						  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->INST_ADDRESS.'</td>';
						  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->INST_SEX.'</td>';
						  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->SPECIALIZATION.'</td>';
						  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->INST_EMAIL.'</td>';
					 			echo '<td style="font-size:16px; font-family:Poppins; font-weight:500;"><a href="index.php?view=instSubj&instructorId='.$result->INST_ID.'" style="color:#780000;">List of Loads</a>';
                                echo '<a href="index.php?view=edit&id='.$result->INST_ID.'" style="font-size:16px; font-family:Poppins; font-weight:500; color:#780000;"> Edit</a></td>';
						  		
						  		
						  		echo '</tr>';
					  		}
					  	} 
				  	?>
				  </tbody>
				
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group" style="background-color:#780000; border-radius:5px;">
				  <a href="index.php?view=add" class="btn btn-default" style="background-color:#780000; "><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-default" name="delete" style="background-color:#780000; "><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->