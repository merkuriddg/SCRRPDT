<?php
require_once('../includes/config.php');
include('logged_in.php');
?>

<!DOCTYPE html>
<html>
<head>
<?php include('head.php');?>
</head>

<body class="hold-transition skin-blue sidebar-mini" onload="startTime()">
<!-- Set Date: -->
<?php include('set_date.php'); ?>
<?php include('get_member_info.php'); ?>
                                                  
    <div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <?php include('top_logo.php'); ?>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

        
        
      <div class="navbar-custom-menu">
          <!-- Messages: style can be found in dropdown.less-->
        <ul class="nav navbar-nav">

            <!-- top menu: includes all sub menus - style can be found in dropdown.less -->
            <?php include('top_menu.php'); ?>            

          <!-- Logout Button -->
          <li>
            <a href="../login/logout.php"><i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/<?php echo $_SESSION['member_img']; ?>" class="img-circle" alt="Image of <?php echo $_SESSION['member_name']; ?>">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['member_name']; ?></p>
            <a href="#"><i fa-circle-o></i> online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

          
        <!-- Left Sidebar: style can be found in sidebar.less-->
        <?php include('left_menu.php'); ?>

        </ul>
  </section>
    <!-- /.sidebar -->
  </aside>    

        <iframe id="eventchecker"
        src="eventcheck.php"
        width="0"
        height="0"
        sandbox="allow-modals allow-popups allow-popups-to-escape-sandbox allow-top-navigation allow-scripts">
        </iframe>
    
      <!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->
        <?php include('modal.php'); ?>
      <!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->
      

        
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contacts
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contacts</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="contacts" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="33%">Contact</th>
                        <th width="33%">Details</th>
                        <th width="33%">Social</th>
                    </tr>
                </thead>
                <tbody>
<style>
td, p img {vertical-align: baseline;}
td, p img {vertical-align: text-bottom;}
</style>
<?php

//Get_Member_info
//run the store proc
  $result = mysqli_query($con, 
  "CALL get_all_member_info()")
      or 
      die("Query fail: " . mysqli_error());
    //loop the result set
  while ($row = mysqli_fetch_array($result)){   
//    $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
    $member_id = $row['memberID']; 
    $member_fname = $row['fname']; 
    $member_lname = $row['lname']; 
    $member_mw = $row['mw']; 
    $member_img = $row['img']; 
    $position = $row['position']; 
    $member_position = $row['member_position']; 
    $email = $row['email']; 
    $profile = $row['profile']; 
    $area_code = $row['area_code']; 
    $phone_pre = $row['phone_pre']; 
    $phone_suff = $row['phone_suff']; 
    $other = $row['other']; 
    $education = $row['education']; 
    $experience = $row['experience']; 
    $location = $row['location']; 
    $skills = $row['skills']; 
    $notes = $row['notes']; 
    $blinked_name = $row['blinked_name']; 
    $instagram_name = $row['instagram_name']; 
    $skwalk_name = $row['skwalk_name']; 
    $snapchat_name = $row['snapchat_name'];
      
      if ($email=="") {
          $email=strtolower(substr($member_fname,0,1).$member_lname)."@arrayetea.com";
      }

      if ($area_code == NULL) 
      {$full_phone = "";}
      else
{    $full_phone =  "(".$area_code.") ".$phone_pre."-".$phone_suff;   }


      $no 	= 1;
    $total 	= 0;




                    echo '<tr>
                            <td valign="middle"><table border="0" align="left" width="100%" valign="middle"><tr valign="middle"><td align="left" width="20%" valign="middle"><img src="../dist/img/' . $member_img . '" height="100"></td><td align="left" width="40%" valign="middle">' . $member_lname.', ' . $member_fname . '<br>'. $member_position .'<br><a href="mail_compose.php?id='.$member_id.'">'. $email .'</a><br>'. $full_phone .'</td></tr></table></td>
                            <td>'.$education.'<br>' . $experience . '<br>' . $location . '<br>' . $skills . '<br>' . $notes . '</td>
                            <td valign="middle">
                            <a href="http://www.blinkedln.com"><i class="icon icon-blinkedln"></i> '.$blinked_name.'</a><br>
                            <a href="http://www.instagram.com/"'.$instagram_name.'"><i class="fa fa-instagram"></i> '.$instagram_name.'</a><br>
                            <a href="http://www.skwalk.com"><i class="icon icon-skwalk"></i> '.$skwalk_name.'</a><br>
                            <a href="http://www.snapchat.com/"'.$snapchat_name.'"><i class="fa fa-snapchat"></i> '.$snapchat_name.'</a><br>
                            </td></tr>';
                    $total += $row['amount'];
                    $no++;
                }

                    $con->next_result();
                    
                    ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->  
                                    

        <!-- /#page-wrapper -->


      </section>
        </div>
<!-- /.content-wrapper -->

<!-- main-footer -->
<?php include('main_footer.php'); ?>

<!-- Control Sidebar -->
<?php include('right_nav.php'); ?>
<!-- /.control-sidebar -->
  
<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#contacts').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
</body>
</html>