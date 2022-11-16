<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="plugins/assets/img/apple-icon.png">
 <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Online Grading System
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap'); "/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo WEB_ROOT; ?>plugins/assets/css/bootstrap.min.css" rel="stylesheet" /> 
  <link href="<?php echo WEB_ROOT; ?>plugins/assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo WEB_ROOT; ?>plugins/assets/demo/demo.css" rel="stylesheet" />
  <link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <link href="<?php echo WEB_ROOT; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/jquery.dataTables.css">
</head>
<style type="text/css">
table {
  font-size: 9px;
}
  table tr td{
    font-size: 12px;
  }
</style>
  <?php
  //login confirmation
 confirm_logged_in();

  ?>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="red">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo" style="text-align: center;" >
        <a href="<?php echo WEB_ROOT; ?>admin/index.php" class="simple-text logo-normal" style="font-style:poppins; font-size:20px;"><img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/tculogo.png'; ?>" style="margin-right:10px width:45px;   height:45px;"
>TCUSIS
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="<?php echo (currentpage_admin() == '') ? "active" : false;?>"><a href="<?php echo WEB_ROOT; ?>admin/index.php"> 
             <i class='bx bx-home-alt' ></i>
              <p style="font-style:poppins; font-size:12px;">Home</p>
            </a></li> 
              <?php if($_SESSION['ACCOUNT_TYPE']=='Administrator'){ 
                ?> 
              <li class="<?php echo (currentpage_admin() == 'student') ? "active" : false;?>">
                <a href="<?php echo WEB_ROOT; ?>admin/modules/student/index.php">
                    <i class='bx bx-user'></i>
                    <p style="font-style:poppins; font-size:12px;">Students</p>
                </a>
              </li>
              <li class="<?php echo (currentpage_admin() == 'subject') ? "active" : false;?>">
                <a href="<?php echo WEB_ROOT; ?>admin/modules/subject/index.php">
                    <i class='bx bxs-book-bookmark'></i>
                    <p style="font-style:poppins; font-size:12px;">Subjects</p> 
                </a>
              </li>
              <li class="<?php echo (currentpage_admin() == 'course') ? "active" : false;?>">
                <a href="<?php echo WEB_ROOT; ?>admin/modules/course/index.php">
                    <i class='bx bxs-objects-vertical-bottom'></i>
                    <p style="font-style:poppins; font-size:12px;">Year/Sem</p>  
                </a>
              </li>
              <li class="<?php echo (currentpage_admin() == 'instructor') ? "active" : false;?>">
                <a href="<?php echo WEB_ROOT; ?>admin/modules/instructor/index.php">
                   <i class='bx bx-user-circle' ></i>
                    <p style="font-style:poppins; font-size:12px;">Faculty</p>  
                </a>
              </li>
              <li class="<?php echo (currentpage_admin() == 'department') ? "active" : false;?>">
                <a href="<?php echo WEB_ROOT; ?>admin/modules/department/index.php">
                   <i class='bx bxs-building'></i>
                    <p style="font-style:poppins; font-size:12px;">Department</p>  
                </a>
              </li>
              <li class="<?php echo (currentpage_admin() == 'room') ? "active" : false;?>">
                <a href="<?php echo WEB_ROOT; ?>admin/modules/room/index.php">
                   <i class='bx bx-store-alt'></i>
                    <p style="font-style:poppins; font-size:12px;">Rooms</p>  
                </a>
              </li>
              
                 <li  class="<?php echo (currentpage_admin() == 'class') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/class/index.php">
                     <i class='bx bxs-buildings'></i>
                      <p style="font-style:poppins; font-size:12px;">Class</p>   
                   </a>
                 </li>   

                
               <?php
              }?> 
                   
              <?php if($_SESSION['ACCOUNT_TYPE']=='Teacher'){ 
                ?> 
                   <li class="<?php echo (currentpage_admin() == 'inst_front') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/inst_front/index.php?view=record">
                      <i class="now-ui-icons users_single-02"></i>
                      <p style="font-style:poppins; font-size:12px;">Record</p>    
                    </a>
                   </li>  
              <?php
              }?> 
            
            <?php if($_SESSION['ACCOUNT_TYPE']=='Teacher'){ 
                ?>
            <li  class="<?php echo (currentpage_admin() == 'logout') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/logout.php">
                      <i class=""></i>
                      <p style="font-style:poppins; font-size:12px;">Logout</p>   
                   </a>
                 </li>
            <?php
              }?> 
            
            
                 <?php if($_SESSION['ACCOUNT_TYPE']=='Administrator'){ 
                ?>
                <li class="<?php echo (currentpage_admin() == 'user') ? "active" : false;?>">
                  <a href="<?php echo WEB_ROOT; ?>admin/modules/user/index.php">
                       <i class='bx bx-user'></i>
                      <p style="font-style:poppins; font-size:14px;">Manage Users</p>     
                  </a>
                </li>
                <li  class="<?php echo (currentpage_admin() == 'logout') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/logout.php">
                     <i class='bx bx-log-out-circle'></i>
                      <p style="font-style:poppins; font-size:12px;">Logout</p>   
                   </a>
                 </li> 
                 <?php
              }?> 
                <!-- <li><a href="<?php echo WEB_ROOT; ?>admin/logout.php">Logout</a></li>  -->

          </ul> 
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      
        <div class="panel-header panel-header-sm" style="background:#780000;">
      </div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
       <div class="container">
        <?php check_message(); ?>
        <?php require_once $content;?>
         
       </div>
        </div>
    </div>
  </div>
</div>
      <!-- End Navbar -->
     
    
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/core/popper.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/demo/demo.js"></script> 
    <script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.dataTables.js"></script>
     <script src="<?php echo WEB_ROOT; ?>js/popover.js"></script>
     <script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
     <script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
    
    <script type="text/javascript">
  $('.form_curdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  $('.form_bdatess').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
</script>
<script>
  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      function calculate(){  

     var first = document.getElementById('first').value; 
     var second = document.getElementById('second').value; 
     var third = document.getElementById('third').value;  
     var fourth = document.getElementById('fourth').value;  

    var totalVal = parseInt(first) + parseInt(second) + parseInt(third) + parseInt(fourth) ;
    document.getElementById('finalave').value = totalVal;
     document.getElementById('finalave').value = Math.round((parseInt(totalVal)/4));  
        }
  </script>     
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>

  <script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 1
        } ],
        "order": [[ 3, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );

/*$(document).ready(function() {
    var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 2
        } ],
        //vertical scroll
         "scrollY":        "400px",
        "scrollCollapse": true,
        //ordering start at column 2
       "order": [[ 2, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
*/
/*$(document).ready(function() {
    $('#example').dataTable( {
        "pagingType": "full_numbers"
    } );
} );*/
/*$(document).ready(function() {
    $('#example').dataTable();
} );
*///scroll vertical
/*$(document).ready(function() {
    $('#example').dataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
*/       
    </script>
</body>

</html>