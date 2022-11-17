
<div class="container">
<h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of Class</h3>
    <form action="#.php" Method="POST"> 

		<table id="example" class="display" cellspacing="0" width="100%">
	
	  <thead>
	 	<tr>
	 		 <th style="font-size:16px; font-family:Poppins; font-weight:900;">No.</th>
	  		<th style="font-size:16px; font-family:Poppins; font-weight:900;"> Class Code</th>
	  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Instructor</th> 
	  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Days And Time</th> 
	  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Room</th> 
	  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Section</th> 
	  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Students</th>
	 	</tr>	
	  </thead>
	  <tbody>
	  	<?php
	  		global $mydb;
	
	

	 	$mydb->setQuery("SELECT * 
				FROM  `instructor` i,  `class` c
				WHERE i.`INST_ID` = c.`INST_ID` ");
		 	loadresult();


	  		function loadresult(){
		  		global $mydb;
		  		$cur = $mydb->loadResultlist();
				foreach ($cur as $result) {
			  		echo '<tr>';
			  		echo '<td width="5%" align="center"></td>';
			  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"> ' . $result->CLASS_CODE.' </td>';
			  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->INST_FULLNAME.'</td>';
			  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->DAY.' /'. $result->C_TIME.'</a></td>'; 
			  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'.$result->ROOM.'</a></td>'; 
			  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'.$result->SECTION.'</a></td>'; 
			  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><a href="index.php?view=class&classId='.$result->CLASS_ID.'" style="color:#780000; margin-right:5px;">View List</a>';
                    echo '<a href="index.php?view=time&classId='.$result->CLASS_ID.'" style="color:#780000;">Edit</a></td>'; 
			  	 	echo '</tr>';
		  		}
		  	} 
	  	?>
	  </tbody>
	 
	</table>
	</span>



<!-- 	<div class="btn-group">
	  <a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
	  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
	</div> -->
	</form>


</div><!--End of container-->
