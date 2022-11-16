
<?php
$gradeId = $_GET['gradeId'];
$grade = new Grades();
$cur = $grade->single_grades($gradeId);

	$subjid = $cur->SUBJ_ID;
	$studentId = $cur->IDNO;


//$con=mysqli_connect('localhost','root','','dbgrading');

//    function str_openssl_enc($str,$iv) {
//    $key='tcusis';
//    $chiper="AES-128-CTR";
//    $options=0;
//    $str=openssl_encrypt($str, $chiper, $key, $options, $iv);
//    return $str;
//}

//    if(isset($_POST['savegrades'])){
//    $iv=openssl_random_pseudo_bytes(16);
//    $first=mysqli_real_escape_string($con, $_POST['first']);
//    $second=mysqli_real_escape_string($con, $_POST['second']);
    
//    $first=str_openssl_enc($first, $iv);
//    $second=str_openssl_enc($second,$iv);
    
//}



?>

<form class="form-horizontal well span4" action="controller.php?action=grade&classId=<?php echo $_GET['classId'];?>&gradeId=<?php echo $_GET['gradeId'];?>&instructorId=<?php echo $_GET['instructorId'];?>" method="POST">

	<fieldset>
		<legend>Add Grades</legend>
		 <div class="form-group">
        <div class="col-md-8">
        <?php 
        	$stud = new Student();
        	$cur=$stud->single_student($studentId);
        ?>
          <label class="col-md-4 control-label" for=
          "subjdesc">Name</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="studname" name="studname" readonly placeholder=
								  "Subject Description" type="text" value="<?php echo (isset($cur)) ? $cur->LNAME . ' , '.$cur->FNAME: 'Name' ;?>">
          </div>
        </div>
          </div>								

			<div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "subjcode">Subject Code</label>
		<?php 
			$singlesubject = new Subject();
			$cur = $singlesubject->single_subject($subjid);
		?>
              <div class="col-md-8">
                 <input class="form-control input-sm" id="subjcode" name="subjcode" readonly placeholder=
									  "Subject Code" type="text" value="<?php echo (isset($cur)) ? $cur->SUBJ_CODE : 'Code' ;?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "subjdesc">Subject Description</label>

              <div class="col-md-8">
                 <input class="form-control input-sm" id="subjdesc" name="subjdesc" readonly placeholder=
									  "Subject Description" type="text" value="<?php echo (isset($cur)) ? $cur->SUBJ_DESCRIPTION  : 'Description' ;?>">
              </div>
            </div>
          </div>
		<?php
          $grade = new Grades();
		  $cur = $grade->single_grades($gradeId); 
		 ?>
           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "first">Midterm</label>

              <div class="col-md-8">
                          <select class="form-control input-sm" id="first" name="first" value="<?php echo (isset($cur)) ? $cur->FIRST  : 'FIRST' ;?>">
                          <option value="1.00">1.00</option>
                          <option value="1.25">1.25</option>
                          <option value="1.50">1.50</option>
                          <option value="1.75">1.75</option>
                          <option value="2.00">2.00</option>
                          <option value="2.25">2.25</option>
                          <option value="2.50">2.50</option>
                          <option value="2.75">2.75</option>
                          <option value="3.00">3.00</option>
                          <option value="5.00">5.00</option>
                          <option value="INC">INC</option>
                          <option value="UD">UD</option>
                          <option value="D">D</option>
                    </select>
              </div>
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "second">Finals</label>

              <div class="col-md-8">
                  <select class="form-control input-sm" id="second" name="second" value="<?php echo (isset($cur)) ? $cur->SECOND  : 'SECOND' ;?>">
                          <option value="1.00">1.00</option>
                          <option value="1.25">1.25</option>
                          <option value="1.50">1.50</option>
                          <option value="1.75">1.75</option>
                          <option value="2.00">2.00</option>
                          <option value="2.25">2.25</option>
                          <option value="2.50">2.50</option>
                          <option value="2.75">2.75</option>
                          <option value="3.00">3.00</option>
                          <option value="5.00">5.00</option>
                          <option value="INC">INC</option>
                          <option value="UD">UD</option>
                          <option value="D">D</option>
                    </select>
              </div>
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "finalave">Average</label>
              <div class="col-md-8">
                  
                  <select class="form-control input-sm" id="finalave" name="finalave"  value="<?php echo (isset($cur)) ? $cur->AVE  : 'AVE' ;?>">
                          <option value="1.00">1.00</option>
                          <option value="1.25">1.25</option>
                          <option value="1.50">1.50</option>
                          <option value="1.75">1.75</option>
                          <option value="2.00">2.00</option>
                          <option value="2.25">2.25</option>
                          <option value="2.50">2.50</option>
                          <option value="2.75">2.75</option>
                          <option value="3.00">3.00</option>
                          <option value="5.00">5.00</option>
                          <option value="INC">INC</option>
                          <option value="UD">UD</option>
                          <option value="D">D</option>
                    </select>
                  
              </div>
            </div>
          </div>
          
		 <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "idno"></label>
              <div class="col-md-8">
                <a href="index.php?view=class&id=<?php echo $_GET['classId']; ?>&instructorId=<?php echo $_GET['instructorId'];?>" class="btn btn-primary" name="savecourse" type="submit" >Back</a>
               <button class="btn btn-primary" name="savegrades" type="submit" >Save</button>
              </div>
            </div>
          </div>							
	</fieldset>	

					
</form>
</div><!--End of container-->
