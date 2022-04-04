<?php
require_once('../includes/config.php');
include('logged_in.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arr Aye Tea Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- FavIcon -->
    <link rel="shortcut icon" href="../favicon.ico" />

    <!-- Clock Code -->
    <script src="../js/clock.js"></script>

  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    </head>
    
<body class="hold-transition skin-blue sidebar-mini" onload="startTime()">
<!-- Set Date: -->
<?php include('set_date.php'); ?>
                                                    
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

            <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <img src="../dist/img/men/rick.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Rick Arraye</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

          
        <!-- Left Sidebar: style can be found in sidebar.less-->
        <?php include('left_menu.php'); ?>

          
        <!-- Left Sidebar: style can be found in sidebar.less-->
        <?php include('left_menu.php'); ?>

        </ul>
  </section>
    <!-- /.sidebar -->
  </aside>    
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sent Mail
        <small><?php if ($_SESSION['mail_count_new']<>"0") { echo $_SESSION['mail_count_new']. "New messages";} ?> </small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="compose.php" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-arrow-left"></i> Mail </a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right" data-toggle="tooltip" title="Mail Total"><?php echo $_SESSION['mail_count']; ?></span></a></li>
                <li class="active"><a href="sent.php"><i class="fa fa-envelope-o"></i> Sent
                  <span class="label label-primary pull-right" data-toggle="tooltip" title="Mail Sent"><?php echo $_SESSION['mail_sent']; ?></span></a></li>
                <li><a href="trash.php"><i class="fa fa-trash-o"></i> Trash
                  <span class="label label-primary pull-right" data-toggle="tooltip" title="Mail Trashed"><?php echo $_SESSION['mail_trash']; ?></span></a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sent Mail</h3>

              <div class="box-tools pull-right">
                <!-- /.btn-group -->
                <button onclick="window.location.href='mail.php'" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Refresh Mail"><i class="fa fa-refresh"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">             
                  

                  <table class="table table-hover table-striped">
                  <tbody>

<style>
    span.mail-read 
    {
    color:black;    
    font-weight:100;    
    font-size:.8em;    
    font-style:italic;    
    }                      
    span.mail-unread 
    {
    color:blue;    
    font-weight:500;    
    font-size:.8em;    
    }                      
    a.mail-read 
    {
    color:black;    
    font-weight:100;    
    font-size:.8em;    
    font-style:italic;    
    }                      
    a.mail-unread 
    {
    color:blue;    
    font-weight:500;    
    font-size:.8em;    
    }                      
</style>
                     
<?php

//Get_All_Member_Email

$result = mysqli_query($con, 
//  "CALL get_all_member_email_sent('" .$_SESSION['memberID']. "')")
  "CALL get_all_member_email('" .$_SESSION['memberID']. "')")
      or 
      die("Query fail: " . mysqli_error($con));
  while ($row = mysqli_fetch_array($result)){   
    $mail_id = $row['mailID']; 
    $mail_to = $row['mail_to']; 
    $mail_from = $row['mail_from']; 
    $mail_subject = $row['mail_subject']; 
    $mail_text = $row['mail_text']; 
    $mail_week = $row['mail_week']; 
    $mail_day = $row['mail_day']; 
    $mail_hour = $row['mail_hour']; 
    $mail_min = $row['mail_min']; 
    $mail_read = $row['mail_read']; 
    $fname = $row['fname']; 
    $lname = $row['lname']; 
    $email = $row['email']; 
      $from = $fname." ".$lname;
      $subject=$mail_subject;
      $message=$mail_text;
      $mail_time="W:".$mail_week."/D:".$mail_day." Time:".$mail_hour.":".$mail_min;


      $no 	= 1;
    $total 	= 0;

if ($mail_read=="1") {
echo '<td class="mailbox-name" width="20%"><i class="fa fa-envelope-open"></i> <a href="read_mail.php?id='.$mail_id.'" class="mail-read">From: ' .  substr(($from),0,20) . '</a><br><span class="mail-read">'. $mail_time .'</span><br>';
}
      else {
echo '<td class="mailbox-name" width="20%"><i class="fa fa-envelope"></i> <a href="read_mail.php?id='.$mail_id.'" class="mail-unread">From: ' .  substr(($from),0,20) . '</a><br><span class="mail-unread">'. $mail_time .'</span><br>';
}
?>
                <div class="btn-group">
                      
                  <button onclick="window.location.href='delete_mail.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete"></i></button>
                  <button onclick="window.location.href='reply_mail.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default btn-sm"><i class="fa fa-reply" data-toggle="tooltip" title="Reply"></i></button>
                  <button onclick="window.location.href='forward_mail.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default btn-sm"><i class="fa fa-share" data-toggle="tooltip" title="Forward"></i></button>
                    <button onclick="window.location.href='print_mail.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></button>
              </div>

                      
<?php
echo '</td>';
      
if ($mail_read=="1") {
echo '<td class="mailbox-subject" width="80%"><a href="read_mail.php?id='.$mail_id.'" class="mail-read">Subject: ' . substr(($subject),0,50); 
    echo substr(($message),0,100) . '...</a></td>';
}
      else {
echo '<td class="mailbox-subject" width="80%"><a href="read_mail.php?id='.$mail_id.'" class="mail-unread">Subject: ' . substr(($subject),0,50); 
    echo substr(($message),0,100) . '...</a></td>';
      }
      
      echo '                    <td class="mailbox-attachment" width="10%" align="right"></td>
          </tr>';
      
      
//     echo($mail_id.": ".$fname." ".$lname.", ".$email."<br>".$mail_subject."<br>".$mail_text."<hr>");

                    $total += $row['amount'];
                    $no++;
                }

                    $con->next_result();
                    
                    ?>  
                      
                      
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
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
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
