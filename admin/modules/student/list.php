
		<div class="wells">
				<h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of Student</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">No.</th>
				  		<th width="10%" align="left" style="font-size:16px; font-family:Poppins; font-weight:900;"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');" > StudID </th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Full Name</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Sex</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Age</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Birth Date</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Email Address</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Options</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
                      
				  	//$studentAES = new StudentEncryption();
				  	  	$mydb->setQuery("SELECT  `IDNO` ,UPPER(CONCAT(  `LNAME` ,  ', ',  `FNAME` ,  ' ',  `MNAME` )) AS  'Name',
				  						  `SEX` ,`AGE`, `BDAY` ,  `STATUS` ,  `EMAIL`
				  						  FROM  `tblstudent`");
                      
                      //$studentAES = new StudentEncryption();
                            //$decrypted_IDNO             =   $studentAES->decryptData($row->IDNO);
				  	  	loadresult();

				  	
				  		function loadresult(){
                            //require_once ("../../../encryption.php");
                            
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $student) {
                             
                                
                            //$studentAES = new StudentEncryption();
                            //$decrypted_IDNO = $studentAES->decryptData($student->IDNO);
                            //$decrypted_Name = $studentAES->decryptData($student->Name);
                            //$decrypted_SEX = $studentAES->decryptData($student->SEX);
                                
					  		echo '<tr>';
					  		echo '<td width="5%" align="center"></td>';
					  		echo '<td width="10%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$student->IDNO. '"/>' .$student->IDNO.'</td>';
					  		echo '<td  >'.$student->Name.'</td>';
					  		echo '<td align="center">'. $student->SEX.'</td>';
					  		echo '<td  align="center">'. $student->AGE.'</td>';
					  		echo '<td  align="center">'. $student->BDAY.'</td>';
					  		echo '<td>'. $student->EMAIL.'</td>';
					  		echo '<td style="font-size:14px; font-family:Poppins; font-weight:500;"><a href="index.php?view=edit&id='.$student->IDNO.'" style="color:#780000;"><span class="glyphicon glyphicon-list-alt"> </span>  Edit</a>';
                            echo '<a href = "index.php?view=view&studentId='.$student->IDNO.'" style="color:#780000;"><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
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
						  <a href="index.php?view=add" class="btn btn-default" style="background-color:#780000;"><span class="glyphicon glyphicon-plus-sign" ></span>  New</a>
						   <button type="submit" class="btn btn-default" name="delete" style="background-color:#780000; "><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
						</div>';
					}

				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
