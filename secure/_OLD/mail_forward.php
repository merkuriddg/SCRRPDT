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
                <li class="active"><a href="mail.php"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right" data-toggle="tooltip" title="Mail Total"><?php echo $_SESSION['mail_inbox']; ?></span></a></li>
                  <li><a href="mail_inbox_unread.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope"></i> Unread
                  <span class="label label-primary pull-right" data-toggle="tooltip" title="Unread"><?php echo $_SESSION['mail_unread']; ?></span></a></li>
                  <li><a href="mail_inbox_read.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope-open-o"></i> Read
                  <span class="label label-primary pull-right" data-toggle="tooltip" title="Read"><?php echo $_SESSION['mail_read']; ?></span></a></li>
                  <li><a href="mail_sent.php"><i class="fa fa-arrow-circle-right"></i> Sent
                  <span class="label label-primary pull-right" data-toggle="tooltip" title="Sent"><?php echo $_SESSION['mail_sent']; ?></span></a></li>
                <li><a href="mail_trash.php"><i class="fa fa-trash-o"></i> Trash
                  <span class="label label-primary pull-right" data-toggle="tooltip" title="Trashed"><?php echo $_SESSION['mail_trash']; ?></span></a></li>
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
              <h3 class="box-title"><i class="fa fa-share"></i> Forward </h3>

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
    $mail_from = $row['mail_from']; 
    $mail_subject = $row['mail_subject']; 
    $mail_text = $row['mail_text']; 
    $mail_week = $row['mail_week']; 
    $mail_day = $row['mail_day']; 
    $mail_hour = $row['mail_hour']; 
    $mail_min = $row['mail_min']; 
    $fname = $row['fname']; 
    $lname = $row['lname']; 
    $fwd_email = $row['email']; 
      
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

      $fwd_from = $from;
      $subject=$mail_subject;
      $message=$mail_text;
      $mail_time=$mail_week.":".$mail_day.":".$mail_hour.":".$mail_min;
              

?>              
              
              <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
<script>
$(document).ready(function() {
  $("#email_search").click(function() {
    console.log($('#options option').filter(function() {
      return $('#mail_to_id').val() == this.value;
    }).data("id"));
  });
});</script>

  <input list="options" type="text" class="form-control" style="border-radius:0px;height: 46px;" name="mail_to_id" id="mail_to_id" placeholder="To:">
  <datalist id="options">
      
         <?php
 //ELSE

//Get_Member_info
//run the store proc
  $result = mysqli_query($con, 
  "CALL get_members_to_email()")
      or 
      die("Query fail: " . mysqli_error());
    //loop the result set
  while ($row = mysqli_fetch_array($result)){   
//    $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
    $mailtoid = $row['memberID']; 
    $member_fname = $row['fname']; 
    $member_lname = $row['lname']; 
    $member_position = $row['member_position']; 
      if ($member_position<>"")
          {$member_position = " - ".$row['member_position'];}
        else
          {$member_position = "";}
    $email = $row['email']; 


      $no 	= 1;
    $total 	= 0;

          
if ($email == '') {
$mail_to_name=($member_lname.', ' . $member_fname . ' - '. strtolower(substr($member_fname,0,1).$member_lname)."@arrayetea.com".$member_position);
    ?>
                  <!-- option data-value="<-php echo ($mailtoid); ?>" -->
              <option label="<?php echo $mail_to_name; ?>" data-id="<?php echo $mailtoid; ?>">
                      <?php echo $mail_to_name;?>
                    </option>

          <?php
}
              
              
              else
              {
$mail_to_name=($member_lname.', ' . $member_fname . ' - '. $email);                  
          ?>
                  <!-- option data-value="<-php echo ($mailtoid); ?>" -->
              <option label="<?php echo $mail_to_name; ?>" data-id="<?php echo $mailtoid; ?>">
                          <?php echo $mail_to_name; ?>
                        </option>
                  
                  <?php
}

                }

                    $con->next_result();
                    

                          ?>                  
                  
                  </datalist>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" value="FWD: <?php echo $subject; ?>" style="background-color:white;color:black;" name="mail_subject">

              </div>

                
                <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border">
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
<textarea id="compose-textarea" class="form-control" style="height: 200px" name="mail_message">
<br><br>
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
<br>
On <?php echo ($mail_time).', '.$fwd_from; ?> wrote:
<br>
<br>
<?php echo ($message); ?>
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
                  <input type="hidden" name="mailto" id="mailto" value="<?php echo $mailto; ?>">
                <input type="hidden" name="mail_code" value="f">
                <input type="hidden" name="mailid" value="<?php echo $mail_id; ?>">
  </form>              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
<!-- 
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
