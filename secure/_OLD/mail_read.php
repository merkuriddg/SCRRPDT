<?php
require_once('../includes/config.php');
include('logged_in.php');
$mail_id=$_GET['id'];


//SET TO READ
        $sql="UPDATE mail SET mail_code = 'r' where mailID = '$mail_id'"; 
        mysqli_query($con,$sql);        

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
          <a href="mail.php" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-arrow-left"></i> Back To Mail</a>

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
              <h3 class="box-title"><i class="fa fa-envelope-o"></i> Read</h3>
                <!--?php
//Get_Member_Email_Near
  $result = mysqli_query($con, 
  "CALL get_member_email_near('" .$mail_id. "')")
      or 
      die("Query fail: " . mysqli_error());
  while ($row = mysqli_fetch_array($result)){   
    $mail_id = $row['mailID']; 
    $mail_id_prev = $row['mail_prev']; 
    $mail_id_nect = $row['mail_next']; 
-->
              <div class="box-tools pull-right">
                <a href="mail_read.php?id=<?php echo ($mail_id_prev); ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="mail_read.php?id=<?php echo ($mail_id_next); ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>

<?php
//Get_Member_Email
  $result = mysqli_query($con, 
  "CALL get_member_email('" .$mail_id. "')")
      or 
      die("Query fail: " . mysqli_error());
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
    $fname = $row['fname']; 
    $lname = $row['lname']; 
    $email = $row['email']; 
      $from = $fname." ".$lname;
      $subject=$mail_subject;
      $message=htmlspecialchars_decode($mail_text);
      $mail_time=$mail_week.":".$mail_day.":".$mail_hour.":".$mail_min;

?>              
              
              <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3><?php echo '<b>' .$subject. '</b>'; ?></h3>
                <h5>From: 
                    <?php echo '<a href="mail_reply.php?id='.$mail_id.'">' . $from.'</a></td>'; ?>

                  <span class="mailbox-read-time pull-right"><?php echo ($mail_time); ?></span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">

                    <button onclick="window.location.href='mail_delete.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                        <i class="fa fa-trash-o"></i></button>
                    <button onclick="window.location.href='mail_reply.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                        <i class="fa fa-reply"></i></button>
                    <button onclick="window.location.href='mail_forward.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                        <i class="fa fa-share"></i></button>
                    <button onclick="window.location.href='mail_print.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                      <i class="fa fa-print"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <?php echo ($message); ?>

              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
<?php if ($attachment=="1") { ?>
              <div class="box-footer">
              <ul class="mailbox-attachments clearfix">
                <li>
                  <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Sep2014-report.pdf</a>
                        <span class="mailbox-attachment-size">
                          1,245 KB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
                <li>
                  <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> App Description.docx</a>
                        <span class="mailbox-attachment-size">
                          1,245 KB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
                <li>
                  <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo1.png" alt="Attachment"></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo1.png</a>
                        <span class="mailbox-attachment-size">
                          2.67 MB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
                <li>
                  <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo2.png" alt="Attachment"></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
                        <span class="mailbox-attachment-size">
                          1.9 MB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
              </ul>
            </div>

<?php
      
                }

}

    $con->next_result();
                      
              
              
              
              ?>

      <!-- /.box-footer -->
            <div class="box-footer text-center">
              <button onclick="window.location.href='mail_delete.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
                <button onclick="window.location.href='mail_reply.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                <button onclick="window.location.href='mail_forward.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
              <button onclick="window.location.href='mail_print.php?id=<?php echo ($mail_id);?>'" type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
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
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
