<div class="wells">
		<h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of Subjects</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">No.</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Subject</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Description</th>
				  			<!--<th>Unit</th>
				  	<th>Pre-requisite</th>
				  		<th>Semester</th>-->
				 		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Year/Sem</th>
				 		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Action</th>
				 	<!--	<th>Level</th>-->
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  	
					  		$mydb->setQuery("SELECT * 
											FROM  `subject` s,  `course` c
											WHERE s.`COURSE_ID` = c.`COURSE_ID` ");
						  	loadresult();
					
				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
						  		echo '<tr>';
						  		echo '<td width="5%" align="center" style="font-size:15px; font-family:Poppins; font-weight:500; margin-right:10px;"></td>';
						  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->SUBJ_ID. '"/>' . $result->SUBJ_CODE.'</a></td>';
						  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->SUBJ_DESCRIPTION.'</td>';
						  		//echo '<td>'. $result->UNIT.'</td>';
						  		//echo '<td>'. $result->PRE_REQUISITE.'</td>';
						  		//echo '<td>'. $result->SEMESTER.'</td>';
						  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->COURSE_NAME.'</td>';
						  		//echo '<td>'. $result->COURSE_LEVEL.'</td>';
                                echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><a href="index.php?view=edit&id='.$result->SUBJ_ID.'" style="color:#780000;"> Edit </a></td>';

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
				  <a href="index.php?view=add" class="btn btn-default" style="background-color:#780000;"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-default" name="delete" style="background-color:#780000;"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->