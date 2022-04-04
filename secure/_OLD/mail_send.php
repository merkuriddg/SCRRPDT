<?php
require_once('../includes/config.php');
include('logged_in.php');

//var_dump($_POST);
if (isset($_POST['mailto']))
{
    $mailto=$_POST['mailto'];
    echo $mailto;
}
if (isset($_POST['mail_code']))
{ 
$mail_code=$_POST['mail_code'];
} 
if (isset($_POST['mailid'])) 
{
    $mailid=$_POST['mailid'];
}

if ($mail_code=="s") {
    $mail_to=$_POST['mail_to'];
    $mail_to_id=$_POST['mail_to_id'];
    $mail_from=$_SESSION['memberID'];
    
}
if ($mail_code=="f") {
    $mail_to_id=$_POST['mail_to_id'];
    $mail_from=$_SESSION['memberID'];
    echo $mail_to_id;

}
if ($mail_code=="r") {
    $mail_to_id=$_POST['mail_from'];
    $mail_from=$_SESSION['memberID'];
}

if (isset($_POST['mail_subject'])) 
{ 
$mail_subject=$_POST['mail_subject'];
} 

if (isset($_POST['mail_message'])) 
{ 
$mail_message=$_POST['mail_message'];
} 

if (isset($_POST['mail_upload'])) 
{ 
$mail_upload=$_POST['mail_upload'];
} 

$mail_week=$_SESSION['weekid'];
$mail_day=$_SESSION['dayid'];
$mail_hour=$_SESSION['hourid'];
$mail_min=$_SESSION['minid'];

// echo "To: ".$mail_to_id;    
//echo "<br>";    
//echo "To2: ".$mail_to;    
//echo "<br>";    
//echo "From: ".$mail_from;    
//echo "<br>";    
// echo "Subject: ".$mail_subject;    
// echo "<br>";    
// echo "Msg: ".$mail_message;    
// echo "<br>";    

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


    
    
    <?php
// From Contact, Reply  
    if ((($mail_to<>"")&&($mail_to_id==""))||($mail_code=="r"))
    {
        $mail_to_memberid = $mail_to;
        if ($mail_code=="r") {$mail_to_memberid = $mail_to_id;}
    }
// From Compose, Forward  
    else 
    {
    $mail_check=substr($mail_to_id,0,4);

        if ($mail_check<>"") 
        {
        //Get                      
            $sql="SELECT memberID FROM member_info WHERE lname LIKE '".$mail_check."%'";    

            $result = mysqli_query($con, $sql)
              or 
              die("Query1 fail: " . mysqli_error($con));

              while ($row = mysqli_fetch_array($result))
              {   
                $mail_to_memberid = $row[0]; 
              }
        }
    }
?>
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mail

        <small><?php if ($_SESSION['mail_count_unread']<>"0") { echo $_SESSION['mail_count_unread']. "New messages";} ?> </small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
<?php 
            if ($mail_code=="s"){
            ?>
            <a href="mail_compose.php" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-arrow-left"></i> Back to Compose</a>
<?php 
            }
            if ($mail_code=="r"){
            ?>
            <a href="mail_reply.php?id=<?php echo $mailid; ?>" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-arrow-left"></i> Back to Reply</a>
<?php 
            }
            if ($mail_code=="f"){
            ?>
            <a href="mail_forward.php?id=<?php echo $mailid; ?>" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-arrow-left"></i> Back to Forward</a>
<?php 
            }
?>

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
    <input type="hidden" name="action" value="submit">
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
                
<?php

    
if  (($mail_to_memberid=="")||($mail_subject=="")||($mail_message=="")) {
		echo "<h2 class='text-center'>Your email is missing:</h2><h3 class='text-center'>"; 
    
    if ($mail_to_memberid=="")
        {
		echo "an email address</br>"; 
    }        
    if ($mail_subject=="")
        {
		echo "a subject</br>"; 
    }        
    if ($mail_message=="")
        {
		echo "a message</br>"; 
    }        

    
            if ($mail_code=="s"){
 echo "<br><div class='text-center'><a href='mail_compose.php'><button type='submit' class='btn btn-primary btn-xl page-scroll sendpill'><i class='ion-alert-circled'> Retry</i></button></a></div>";
            }
            if ($mail_code=="r"){
 echo "<br><div class='text-center'><a href='mail_reply.php?id=".$mailid."'><button type='submit' class='btn btn-primary btn-xl page-scroll sendpill'><i class='ion-alert-circled'> Retry</i></button></a></div>";
            }
            if ($mail_code=="f"){
 echo "<br><div class='text-center'><a href='mail_forward.php?id=".$mailid."'><button type='submit' class='btn btn-primary btn-xl page-scroll sendpill'><i class='ion-alert-circled'> Retry</i></button></a></div>";
            }    
    

}
    else {	
///use this to upload email...
// if not an arrayetea.com address send to actual address:
        
            if (substr($mail_to_id, -14)<>"@arrayetea.com") {
            $sql="SELECT email FROM member_info WHERE memberID = ".$mail_to_memberid;    

            $result = mysqli_query($con, $sql)
              or 
              die("Query2 fail: " . mysqli_error($con));

              while ($row = mysqli_fetch_array($result))
              {   
                $real_mail_address = $row[0]; 
              }

    // REAL  MAILER:
        $emailto = $real_mail_address;
        $toname = '';
        $emailfrom = $mail_from;

//        $mail_message =  htmlspecialchars_decode($mail_message);           
//        $mail_message = mysqli_real_escape_string($con, $mail_message);        
//        $mail_message = filter_var($mail_message, FILTER_SANITIZE_STRING);
                
        $fromname = 'Arr Aye Tea Simulation';
        $subject = $mail_subject;
        $messagebody = $mail_message."\r\n\r\n".$fromname."\r\n".$emailfrom."\r\n";
        $headers = 
            'Return-Path: ' . $emailfrom . "\r\n" . 
            'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
            'X-Priority: 3' . "\r\n" . 
            'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
            'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" . 
            'Content-Transfer-Encoding: 8bit' . "\r\n" . 
            'Content-Type: text/plain; charset=UTF-8' . "\r\n";
        $params = '-f ' . $emailfrom;
        mail($emailto, $subject, $messagebody, $headers, $params);
   
// echo $emailto.": ".$subject.": ".$messagebody.": ".$headers.": ".$params;

     $mail_message;
       
            }
        
        
        
$mail_message = htmlspecialchars($mail_message);     
$mail_message = mysqli_real_escape_string($con, $mail_message);        
                    
// echo $mail_message;

        $sql="INSERT INTO mail (mail_to, mail_from, mail_subject, mail_text,mail_upload,mail_week,mail_day,mail_hour,mail_min,mail_code) VALUES ('$mail_to_memberid', '$mail_from', '$mail_subject', '$mail_message','$mail_upload','$mail_week','$mail_day','$mail_hour','$mail_min','$mail_code')"; 
// echo $sql;
        mysqli_query($con,$sql);        
        mysqli_close($con);        
        

        
    if (isset($_SERVER["HTTP_REFERER"])) {
 if ($mail_code=="s") {    
         header("Location: /secure/mail.php?id=s");
 }
 if ($mail_code=="f") {    
         header("Location: /secure/mail.php?id=f");
 }
 if ($mail_code=="r") {    
         header("Location: /secure/mail.php?id=r");
 }
     }    
        

        

        
        
        
        
        
        
        echo "<h2 class='text-center'>Email Sent!</h2>
        		<p class='text-center'><a href='mail_compose.php'>Send another?</a></p>
        		<br/>";
    
	    }
    

     
?>
                
                <!-- /.col -->
              </div>
            </div>
          </div>
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
