<?php
require_once('../includes/config.php');
include('logged_in.php');
$mail_id=$_GET['id'];

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
<form action="mail_send.php" method="post" enctype="multipart/form-data" id="myForm">
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-reply"></i> Reply </h3>

              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>

<?php
//Get_Member_Email
  $result = mysqli_query($con, 
  "CALL get_member_email('" .$mail_id. "')")
      or 
      die("Query fail: " . mysqli_error($con));
  while ($row = mysqli_fetch_array($result)){   
    $mail_id = $row['mailID']; 
    $mail_to = $row['mail_to']; 
    $mailto = $row['mail_to']; 
    $mail_from = $row['mail_from']; 
    $mail_subject = $row['mail_subject']; 
    $mail_text = $row['mail_text']; 
    $mail_week = $row['mail_week']; 
    $mail_day = $row['mail_day']; 
    $mail_hour = $row['mail_hour']; 
    $mail_min = $row['mail_min']; 
    $fname = $row['fname']; 
    $lname = $row['lname']; 
    $reply_email = $row['email']; 
      
                            }
$con->next_result();

    if (is_numeric($mail_from))
      {
          $from = $fname." ".$lname;
      }
      else 
      {
          $from = $mail_from;
        }

      $reply_from = $from;
      $subject=$mail_subject;
      $message=$mail_text;
      $mail_time=$mail_week.":".$mail_day.":".$mail_hour.":".$mail_min;
              

?>              
              
              <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                  <input onkeydown="return false;" readonly type="text" class="form-control" value="To: <?php echo $reply_from; ?>" style="background-color:white;color:black;">
                </div>
              <div class="form-group">
                <input type="text" class="form-control" value="RE: <?php echo $subject; ?>" style="background-color:white;color:black;">

              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border">
              <!-- /.mailbox-controls -->
              <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 200px" name="mail_message">
<br><br>
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
<br>
On <?php echo ($mail_time).', '.$reply_from; ?> wrote:
<br>
<br>
<?php echo ($message);  ?>
<?php echo htmlspecialchars($message);  ?>
</textarea>

              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file" name="attachment">
                </div>
                <p class="help-block">Max. 32MB</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
                <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
            <!-- /.box-footer -->
                <input type="hidden" name="mail_code" value="r">
                <input type="hidden" name="mailid" value="<?php echo $mail_id; ?>">
                <input type="hidden" name="mail_from" value="<?php echo $mail_from; ?>">
                <input type="hidden" name="mail_subject" value="RE: <?php echo $mail_subject; ?>">
              </div>
            </div>
    </div>
  </form>              <!-- /.mailbox-read-message -->
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
!>

<?php
}
              
              
              
              ?>

      <!-- /.box-footer -->
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
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
</body>
</html>
