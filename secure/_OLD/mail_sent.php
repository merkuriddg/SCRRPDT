<?php
require_once('../includes/config.php');
include('logged_in.php');

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini" onload="startTime()">
<?php include('tabcontent.php'); ?>
<?php include('set_date.php'); ?>
<?php include('get_member_info.php'); ?>
<?php include('check_first_login.php'); ?>
<?php include('menu.php'); ?>

<iframe id="eventchecker"
        src="eventcheck.php"
        width="0"
        height="0"
        sandbox="allow-modals allow-popups allow-popups-to-escape-sandbox allow-top-navigation allow-scripts">
</iframe>

<!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->
<?php include('modal.php'); ?>
<!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->


<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <small>
                <?php if ($_SESSION['mail_unread']<>"0") { echo $_SESSION['mail_unread']. " New or Unread Messages";} ?>
                <?php
                if ($page_code=="s") {
                    echo "<em> and Your Email was <a href='mail_sent.php'>Sent</a>.</em>";
                }
                if ($page_code=="f") {
                    echo "<em> and Your Forwarded Email was <a href='mail_sent.php'>Sent</a>.</em>";
                }
                if ($page_code=="r") {
                    echo "<em> and Your Reply was <a href='mail_sent.php'>Sent</a>.</em>";
                }
                ?>
            </small>

            <!-- ############################################################################################################################ -->
            <!-- ############################################################################################################################ -->
            <div class="tab-content">
                <!-- ############################################################################################################################ -->
                <div class="box-header">
                    <div class="col-md-3">
          <a href="mail.php" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-arrow-left"></i> Back to Inbox</a>

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
                  <?php include('mail_menu.php'); ?>
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
              <h3 class="box-title"><i class="fa fa-arrow-circle-right"></i> Sent</h3>

              <div class="box-tools pull-right">
                <!-- /.btn-group -->
                <button onclick="window.location.href='mail.php'" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Refresh Mail"><i class="fa fa-refresh"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">             
                  

<style>
    span.mail-read 
    {
    color:black;    
    font-weight:100;    
    font-size:.8em;    
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
    }                      
    a.mail-unread 
    {
    color:blue;    
    font-weight:500;    
    font-size:.8em;    
    }                      
</style>

      <table class="table table-hover table-striped">
          <tbody>

                     
<?php

//Get_All_Member_Email
  $result = mysqli_query($con, 
  "CALL get_all_member_email_sent('" .$_SESSION['memberID']. "')")
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
    $mail_code = $row['mail_code']; 
    $fname = $row['fname']; 
    $lname = $row['lname']; 
    $email = $row['email']; 

      if (is_numeric($mail_to))
      {
          $to = $fname." ".$lname;
      }
      else 
      {
          $to = $mail_to;
        }
      $subject=$mail_subject;
      $message=$mail_text;
      $mail_time="W:".$mail_week."/D:".$mail_day." Time:".$mail_hour.":".$mail_min;


echo '  <tr>
        <td class="mailbox-name" width="30%"><i class="fa fa-arrow-circle-right"></i>  <a href="mail_read.php?id='.$mail_id.'" class="mail-unread">' .  substr(($to),0,40) . '</a><br><span class="mail-unread">'. $mail_time .'</span><br>';
?>
                <div class="btn-group">
                      
                  <button onclick="window.location.href='mail_reply.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default btn-sm"><i class="fa fa-reply" data-toggle="tooltip" title="Reply"></i></button>
                    <button onclick="window.location.href='mail_forward.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default btn-sm"><i class="fa fa-share" data-toggle="tooltip" title="Forward"></i></button>
              </div>

                      
<?php
echo '  <td class="mailbox-subject" width="70%"><a href="mail_read.php?id='.$mail_id.'" class="mail-unread"><u>' . substr(($subject),0,50).'</u><br>'; 
echo substr(htmlspecialchars_decode($message),0,100) . '...</a></td>';
echo '  </td>';
echo '  <td class="mailbox-attachment" width="10%" align="right"></td>
      </tr>';


      
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
