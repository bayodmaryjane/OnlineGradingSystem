<div class="container" style="margin-top: 110px"> 
<div class="container" style="margin-top: 90px; border: 2px solid black; border-radius: 10px; background-color:white;">
	<?php
		check_message();
			
		?>
		<div class="wellss">
			<?php 

				$student = new Student();
				$cur = $student->single_student($_SESSION['IDNO']);
			?>
			  				
				 <fieldset>
						<legend  style="margin-top:10px; color:#780000; font-size:35px;  font-family:Poppins; font-weight:1000px;">Student Information</legend>
					<table class="table table-bordered" cellspacing="0">
						<tr>
                            <td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">ID Number :</td><td width="80%"><?php echo $cur->IDNO; ?></td></tr>	
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Fullname :</td><td><?php echo $cur->LNAME .', '. $cur->FNAME.', '. $cur->MNAME; ?></td>	</tr></tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Gender :</td><td><?php 
								if($cur->SEX== 'F'){
									echo "Female";
								}else{
									echo "Male";
								}	
								 ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Age :</td><td><?php echo $cur->AGE; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Birth Date :</td><td><?php echo $cur->BDAY; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Place of Birth :</td><td><?php echo $cur->BPLACE; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Civil Status :</td><td><?php echo $cur->STATUS; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Nationality :</td><td><?php echo $cur->NATIONALITY; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Religion :</td><td><?php echo $cur->RELIGION; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Contact No. :</td><td><?php echo $cur->CONTACT_NO; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Email Address :</td><td><?php echo $cur->EMAIL; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Home Address :</td><td><?php echo $cur->HOME_ADD; ?></td>	</tr>
						
						</tr>
					</table>	


				</fieldset>
				<?php
				$details = new Student_details();
				$det = $details->secondary_details($_SESSION['IDNO']);
				?>
				 <fieldset>
						<legend>Secondary details</legend>
						<table class="table table-bordered" cellspacing="0" width="100%">
						<tbody>	
							<!--<tr><td>Father :</td><td width="80%"><?php echo $det->FATHER; ?></td></tr>
							<tr><td>Occupation :</td><td><?php echo $det->FATHER_OCCU; ?></td></tr>
							<tr><td>Mother :</td><td><?php echo $det->MOTHER; ?></td></tr>
							<tr><td>Occupation :</td><td><?php echo $det->MOTHER_OCCU; ?></td></tr>
							<tr><td>Boarding :</td><td><?php echo $det->BOARDING; ?></td></tr>	
							<tr><td>With family :</td><td><?php echo $det->WITH_FAMILY; ?></td></tr>-->
							<tr><td>Guardian :</td><td><?php echo $det->GUARDIAN; ?></td></tr>
							<tr><td>Address :</td><td><?php echo $det->GUARDIAN_ADDRESS; ?></td></tr>
							<tr><td>Other Person Supporting :</td><td><?php echo $det->OTHER_PERSON_SUPPORT; ?></td></tr>
							<tr><td>Address :</td><td><?php echo $det->ADDRESS; ?></td></tr>
						</tbody>	
						</table>
						 


				</fieldset>	
<!--
				<?php
				$req = new Requirements();
				$res = $req->single_result($_SESSION['IDNO']);
				?>
				 <fieldset>
						<legend>Requirements</legend>
						<table class="table table-bordered" cellspacing="0">
							<tr><td>NSO :</td><td width="80%"><?php echo $res->NSO; ?></td></tr>
							<tr><td>Baptismal :</td><td><?php echo $res->BAPTISMAL; ?></td></tr>
							<tr><td>Entrance test Result :</td><td><?php echo $res->ENTRANCE_TEST_RESULT; ?></td></tr>
							<tr><td>Mirriage Contract :</td><td><?php echo $res->MARRIAGE_CONTRACT; ?></td></tr>
							<tr><td>Certificate Of Transfer :</td><td><?php echo $res->CERTIFICATE_OF_TRANSFER; ?></td></tr>	
						
						</table>
						
				</fieldset>		-->			
			
	  	</div><!--End of well-->

</div><!--End of container-->