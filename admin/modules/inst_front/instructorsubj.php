<div class="row">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php 

				$mydb->setQuery("SELECT * 
									FROM instructor
									WHERE  `INST_EMAIL` ='{$_SESSION['ACCOUNT_USERNAME']}'");
				$inst = $mydb->loadSingleResult();
			?>
 
<form class="form-horizontal span4" action="controller.php?action=delsubj" method="POST">
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title" style="margin-top:5px; font-family:Poppins; font-weight:900; "><span class="glyphicon glyphicon-user"></span> Instructor's Subject </h3>
	  </div>
	  <div class="panel-body">
	   <div class="row" >	   
     	 <div class="container">

     	  <div class="well" > 

    	<form class="form-horizontal span4" action="" method="POST">
    		<table>			 
         	
		    <tbody>
		     	<tr>
		     		<td>
		     			<p>
				     		<b style="font-size:14px; font-family:Poppins; color:#780000;">Full Name : </b><?php echo (isset($inst)) ? $inst->INST_FULLNAME : 'Fullname' ;?><br/>
				     		<b style="font-size:14px; font-family:Poppins; color:#780000;">Sex : </b><?php echo (isset($inst)) ? $inst->INST_SEX  : 'Sex' ;?><br/>
				     		<b style="font-size:14px; font-family:Poppins; color:#780000;">Employment Status : </b><?php echo (isset($inst)) ? $inst->EMPLOYMENT_STATUS : 'EMPLOYMENT STATUS' ;?><br/>
				     		<b style="font-size:14px; font-family:Poppins; color:#780000;">Specialization : </b><?php echo (isset($inst)) ? $inst->SPECIALIZATION : 'SPECIALIZATION' ;?><br/>
				     		<b style="font-size:14px; font-family:Poppins; color:#780000;">Address : </b><?php echo (isset($inst)) ? $inst->INST_ADDRESS : 'Address' ;?>

		     			</p>
		     		</td>
		     	</tr>
		    </tbody>
		   	   
			  
			</table>
		</form>
		<br>
		<h3 align="left">List of Subjects</h3>
			    <table id="example" class="display" cellspacing="0" width="100%">
				
				  <thead>
				  	<tr>
				  		<tr>
				  		<th width="10" style="font-size:16px; font-family:Poppins; font-weight:900;">No</th>	
				  		<th  width="20%" class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;"> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Subject</th>
				  		<th class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;">Description</th>
				  		<!--<th class="bottom">Semester</th>
				 		<th class="bottom">Course</th>-->
				 		<th class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;">Grade Level</th>
				 	<!--	<th class="bottom">Pre-requisite</th>
				 		<th align="center" class="bottom">Unit</th>  -->
				 		<th class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;">Room</th>
				 		<th class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;">Days and Time</th>
				 		<th class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;">Students</th>

				  	</tr>	   
				  </thead>
				  <tbody>
				  	<?php

					 
						$mydb->setQuery("SELECT * 
								FROM  `subject` s,  `course` c  ,class cl
								WHERE s.`COURSE_ID` = c.`COURSE_ID` 
								AND s.`SUBJ_ID`=cl.`SUBJ_ID` 
								AND  `INST_ID` = ".$inst->INST_ID."");
						$cur = $mydb->loadResultlist();
						foreach ($cur as $result) {

					  		echo '<tr>';
					  		echo '<td width="10" align="center"></td>';
					  		echo '<td width="20%" style="font-size:15px; font-family:Poppins; font-weight:500;"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->CLASS_ID. '"/>
				  			'.$result->SUBJ_CODE .'</td>';
					  		echo '<td width="30%" style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->SUBJ_DESCRIPTION.'</td>';
					  	//	echo '<td>'. $result->SEMESTER.'</td>';
					  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->COURSE_NAME.'</td>';
					  	//	echo '<td>'. $result->COURSE_LEVEL.'</td>';
						//	echo '<td>'. $result->PRE_REQUISITE.'</td>';
						//	echo '<td align="center">'. $result->UNIT.'</td>';
							echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->ROOM.'</td>';
							echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->DAY.'/'. $result->C_TIME.'</td>';
							echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><a href="index.php?view=class&id='.$result->CLASS_ID.'&instructorId='.$result->INST_ID.'">View</a></td>';
						//	echo '<td><a href="#.php?id='.$result->CLASS_ID.'">'. $result->DAY.'/'. $result->C_TIME.'</a></td>';
							echo  '<input type="hidden" name="INST_ID" id="INST_ID" value="'.$result->INST_ID.'" style="font-size:15px; font-family:Poppins; font-weight:500;"/>';
					  		echo '</tr>';
				  		}
					  	 
				  	?>
				  </tbody>
	  		<!--	<tfoot>
				<?php
				/*	$mydb->setQuery("SELECT SUM(UNIT) as UN
						FROM  `subject` s,  `course` c  ,class cl
						WHERE s.`COURSE_ID` = c.`COURSE_ID` 
						AND s.`SUBJ_ID`=cl.`SUBJ_ID` 
						AND  `INST_ID` = ".$_GET['instructorId']."");
					$result = $mydb->loadSingleResult();	 */
				  ?>
			  	<tr><td class="bottom"  colspan="7"></td></tr>
			  	<tr><td  colspan="6" align="Right"><Strong>Total</Strong></td><td align="center" ><strong><?php echo $result->UN; ?></strong></td></tr>
				<tr><td  colspan="7"></td></tr>				  	 
				</tfoot>	-->	
			</table>			
				<div class="btn-group" style="background-color:#780000; border-radius:5px;">
				  <a href="index.php" class="btn btn-default" style="background-color:#780000;">Back</a>
				   <a href="index.php?view=assign&instructorId=<?php  echo (isset($_GET['instructorId'])) ? $_GET['instructorId']: 'ID' ; ?>" class="btn btn-default" style="background-color:#780000;"><span class="glyphicon glyphicon-plus-sign" ></span>  Assign Subjects</a>
				   <button type="submit" class="btn btn-default" name="delete" style="background-color:#780000;"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
		</form>
	 </div>      		         
   </div>
  </div><!--/span-->
</form>
  
  
</div>
</div>