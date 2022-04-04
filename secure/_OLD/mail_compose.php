<?php
require_once('../includes/config.php');
include('logged_in.php');
if (isset($_GET['id'])) 
{ 
$mail_to=$_GET['id'];
}
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
    <input type="hidden" name="action" value="submit">
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-edit"></i> Compose</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">


<?php
//if sent from Contacts then do this
if (isset($mail_to)) 
{
//Get                      
  $result = mysqli_query($con, 
  "CALL get_member_info($mail_to)")
      or 
      die("Query fail: " . mysqli_error($con));
    //loop the result set
  while ($row = mysqli_fetch_array($result)){   
//    $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
    $mail_to_memberid = $row['memberID']; 
    $member_fname = $row['fname']; 
    $member_lname = $row['lname']; 
    $email = $row['email']; 
      
  }

if ($email == '') {
    ?>
                  <input onkeydown="return false;" readonly type="text" class="form-control" list="to" value="To: <?php echo ($member_lname.', ' . $member_fname . ' - '. strtolower(substr($member_fname,0,1).$member_lname)."@arrayetea.com");?>" style="background-color:white;color:black;">
                  <input type="hidden" name="mail_to" value="<?php echo ($mail_to_memberid); ?>">


    <?php
}
              
              
              else
              {
          ?>
                  <input onkeydown="return false;" readonly type="text" class="form-control" list="to" value="To: <?php echo ($member_lname.', ' . $member_fname . ' - '. $email);?>" style="background-color:white;color:black;">
                    <input type="hidden" name="mail_to" value="<?php echo ($mail_to_memberid); ?>">

                  

<?php
}
}
else 
{
?>
<script>
$(document).ready(function() {
  $("#email_search").click(function() {
    console.log($('#options option').filter(function() {
      return $('#mail_to_id').val() == this.value;
    }).data("id"));
  });
});</script>

<script type="text/javascript">
  function toggleField(hideObj,showObj){
      hideObj.disabled=true;
      hideObj.style.display='none';
      showObj.disabled=false;
      showObj.style.display='inline';
      showObj.focus();
  }
</script>

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
                    
}
                          ?>

                  
                </div>
              <div class="form-group">
                <input class="form-control" placeholder="Subject:" name="mail_subject">
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 200px" name="mail_message">

                        
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
                  <input type="hidden" name="mailto" id="mailto" value="<?php echo $mailto; ?>">
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
            <!-- /.box-footer -->

            </div>
          <!-- /. box -->
        </div>
    <input type="hidden" name="mail_code" value="s">
  </form>
   

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
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
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
