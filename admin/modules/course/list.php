<div class="container">
<div class="well">
	<h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of Year and Semester</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
					
				  <thead>
				  	<tr>
				  		<!--  <th>No.</th> -->
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Year/Sem</th>
				  		
				  	<!--	 <th>Major</th>-->
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Description</th>
                        <th style="font-size:16px; font-family:Poppins; font-weight:900;">Action</th>
				  		<!--  <th width="">Level</th> -->
				  	<!--	<th align="center">Department</th>-->
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
	  			  		$mydb->setQuery("SELECT * 
						FROM  `course` c,  `department` d
						WHERE c.`DEPT_ID` = d.`DEPT_ID` ORDER BY COURSE_NAME, COURSE_LEVEL");
				  		
						  	loadresult();
					  	
					function loadresult(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
						//echo '<td width="5%" align="center"></td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->COURSE_ID. '"/>
				  				' . $result->COURSE_NAME.'</a></td>';
				  	
				  		//echo '<td>'. $result->COURSE_MAJOR.'</td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->COURSE_DESC.'</td>';
                        echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:70px; font-color:#780000;"> <a href="index.php?view=edit&id='.$result->COURSE_ID.'" style="color:#780000;"> Edit</a></td>';
				  		//echo '<td align="left">'. $result->COURSE_LEVEL.'</td>';
				  		//echo '<td>'. $result->DEPARTMENT_DESC.'</td>';
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
				  <a href="index.php?view=add" class="btn btn-default" style="background-color:#780000;"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
				  <button type="submit" class="btn btn-default" name="delete" style="background-color:#780000;"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
			?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->