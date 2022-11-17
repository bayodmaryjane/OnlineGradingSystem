  <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/tcu.png')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <h1 class="line-bottom">Online Grading System</h1>
            </div>
            <div class="col-lg-5 ml-auto"> 
            </div>
          </div>
        </div>
      </div>
    </div>
    
	<style type="text/css">
		.ftco-cover-1.overlay h1.line-bottom:after {
		background: #780000;
		width: 50px;
	  }
	
	</style>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 pr-md-5 mr-auto">
          
          </div>
          <div class="col-md-6" style="margin-left:590px;">
            <div class="quick-contact-form bg-white" style="margin-top:-620px;">
                <h2 style="font-size: 18px; color: #780000;">Login Information</h2>
                <hr/>
               <span class="fa fa-user"> </span> <label><?Php echo $_SESSION['FNAME'];?></label><br/>
               <span class="fa fa-cog"> </span> <label><?Php echo $_SESSION['LNAME'];?></label><br/>
               <hr/>
                  <div class="form-group">
                <a href="logout.php" class="btn btn-primary px-5"  style="margin-left:150px; background-color:#780000; border: solid 1px #780000;">Logout <span class="fa fa-log-out"></span></a>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>