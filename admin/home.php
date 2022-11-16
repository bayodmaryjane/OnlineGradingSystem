<div>
	<div class="cards"  style=" display:grid; text-align:left; text-decoration:none; grid-template-columns: repeat(3, 1fr); 
	grid-gap: 1rem;  ">
	
	<div class="card-single" style="display:flex; justify-content:space-between; padding:2rem; border-radius:5px; border: solid 2px #780000; color:#78000;">
		<div>
			<span style="color:#780000;"> Admins </span>
            <div class="count maroon">
                <?php
                    require 'dbconfig.php';
                
                    $query = "SELECT ACCOUNT_ID FROM useraccounts ORDER BY ACCOUNT_ID";
                    $query_run = mysqli_query($connection, $query);
                
                    $row = mysqli_num_rows($query_run);
                
                    echo '<h3 style="font-size:30px; color:#780000;">'.$row.'</h3>';
                ?>
             </div>
			 <span style="font-size:18px; font-weight:bold; color:#780000;"> Total of Admin </span>
		</div>
		<div>
			<span class='bx bxs-user' style="color:#780000;"> </span>
		</div>
		</div>
		
		<div class="card-single" style="display:flex; justify-content:space-between; background:#fff; padding:2rem; border-radius:5px;  border: solid 2px #780000;">
		<div>
			<span style="color:#780000;"> Students </span>
			 <div class="count maroon"> 
			 
<!-- Mema input -->
                 <?php
                    require 'dbconfig.php';
                
                    $query = "SELECT S_ID FROM tblstudent ORDER BY S_ID";
                    $query_run = mysqli_query($connection, $query);
                
                    $row = mysqli_num_rows($query_run);
                
                    echo '<h3 style="font-size:30px; color:#780000;">'.$row.'</h3>';
                ?>
            </div>
		
			 <span style="font-size:18px; font-weight:bold; color:#780000;"> Total of Student </span>
		</div>
		<div>
			<span class='bx bx-body' style="color:#780000;"> </span>
		</div>
		</div>
		<!--
		<div class="card-single"style="display:flex; justify-content:space-between; background:#fff; padding:2rem; border-radius:5px; border: solid 2px #780000;">
		<div>
			<span style="color:#780000;"> Teacher </span>
			 <div class="count maroon"> 
			 
			
                 <h3 style="font-size:30px; color:#780000;">10 </h3>
			 </div>
			 <span style="font-size:18px; font-weight:bold;color:#780000;"> Total of Teacher </span>
		</div>
		<div>
			<span class='bx bxs-user' style="color:#780000;"> </span>
		</div>
		</div>-->
		
			<div class="card-single"style="display:flex; justify-content:space-between; background:#fff; padding:2rem; border-radius:5px; border: solid 2px #780000;">
		<div>
			<span style="color:#780000;"> Department </span>
			 <div class="count maroon"> 
			 
			 <!-- Mema input -->
                 <?php
                    require 'dbconfig.php';
                
                    $query = "SELECT DEPT_ID FROM department ORDER BY DEPT_ID";
                    $query_run = mysqli_query($connection, $query);
                
                    $row = mysqli_num_rows($query_run);
                
                    echo '<h3 style="font-size:30px; color:#780000;">'.$row.'</h3>';
                ?>
			 </div>
			 <span style="font-size:18px; font-weight:bold;color:#780000;"> Total of Department </span>
		</div>
		<div>
			<span class='bx bxs-user' style="color:#780000;"> </span>
		</div>
		</div>
		</div>
		</div>
	



<!--
/////css////////

.card-single dic:first-child span{
	color:var(--text-gray);
}


@media(max-width:768px) {
    .tile_stats_count .count {
        font-size: 30px !important;
    }
    .tile_stats_count .right span {
        font-size: 12px;
    }
}

.tile_stats_count .right span {
    text-overflow: ellipsis;
    white-space: nowrap;
}-->