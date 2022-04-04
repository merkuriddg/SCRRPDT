<?php
require_once('../includes/config.php');
include('logged_in.php');
$mail_to=$_GET['id'];

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
 
      <h1>
        Mail: Compose

<form action="" method="POST" enctype="multipart/form-data" id="myForm">
    <input type="hidden" name="action" value="submit">

<input class="form-control" list="mailsto"  id="mailto" placeholder="To:">
<datalist id="mailsto">

         <?php

//Get_Member_info
//run the store proc
  $result = mysqli_query($con, 
  "CALL get_members_to_email()")
      or 
      die("Query fail: " . mysqli_error());
    //loop the result set
  while ($row = mysqli_fetch_array($result)){   
//    $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
    $mail_to_memberid = $row['memberID']; 
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
$mail_to=($member_lname.', ' . $member_fname . ' - '. strtolower(substr($member_fname,0,1).$member_lname)."@arrayetea.com".$member_position);
    ?>
                  <option data-value="<?php echo ($mail_to_memberid); ?>">
                      <?php echo $mail_to;?>
                    </option>
        
          <?php
}
              
              
              else
              {
$mail_to=($member_lname.', ' . $member_fname . ' - '. $email);                  
          ?>
                  <option data-value="<?php echo ($mail_to_memberid); ?>">
                          <?php echo $mail_to; ?>
                        </option>
                  
                  <?php
}


                    $total += $row['amount'];
                    $no++;
                }

                    $con->next_result();
                    
}
                          ?>                  
                  
                  </datalist>

                <input class="form-control" placeholder="Subject:" name="mail_subject">
                    <textarea id="compose-textarea" class="form-control" style="height: 200px" name="mail_message">

                        
<?php 

    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';                        
?>                      
                    </textarea>

    <input type="hidden" name="mailto" id="mailto-hidden">
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
    
    <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
    
          </form>
    <script type="text/javascript">
    window.onload=function(){
                    document.querySelector('input[list]').addEventListener('input', function(e) {
        var input = e.target,
            list = input.getAttribute('list'),
            options = document.querySelectorAll('#' + list + ' option'),
            hiddenInput = document.getElementById(input.id + '-hidden'),
            inputValue = input.value;

        hiddenInput.value = inputValue;

        for(var i = 0; i < options.length; i++) {
            var option = options[i];

            if(option.innerText === inputValue) {
                hiddenInput.value = option.getAttribute('data-value');
                break;
            }
        }
    });

    }
    </script>         
<?php
    $mail_to=$_REQUEST['mailto'];
    $mail_from=$_SESSION['memberID'];
    $mail_subject=$_REQUEST['mail_subject'];
    $mail_message=$_REQUEST['mail_message'];
    $mail_upload=$_REQUEST['mail_upload'];
    $mail_week=$_SESSION['weekid'];
    $mail_day=$_SESSION['dayid'];
    $mail_hour=$_SESSION['hourid'];
    $mail_min=$_SESSION['minid'];
    $mail_code="s";

echo"
        <div class='col-md-9'>
        <div class='box box-primary'>
            <div class='box-header with-border'>";    
    
if  (($mail_to=="")||($mail_subject=="")||($mail_message=="")) {
		echo "<h2 class='text-center'>Your email is missing:</h2><h3 class='text-center'>"; 
    
    if ($mail_to=="")
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
    

            echo "<br><div class='text-center'><a href='mail_compose.php'><button type='submit' class='btn btn-primary btn-xl page-scroll sendpill'><i class='ion-alert-circled'> Retry</i></button></a></div>";
}
    
    else {	
///use this to upload email...
//send_email

        
$mail_message = htmlspecialchars($mail_message);        
$sql_stmt="INSERT INTO mail (mail_to, mail_from, mail_subject, mail_text,mail_upload,mail_week,mail_day,mail_hour,mail_min,mail_code)
VALUES ('$mail_to', '$mail_from', '$mail_subject', '$mail_message','$mail_upload','$mail_week','$mail_day','$mail_hour','$mail_min','$mail_code')";     

        
mysqli_query($con,$sql_stmt) or die(mysqli_error($con));        
        
        
        echo "<h2 class='text-center'>Email Sent!</h2>
        		<p class='text-center'><a href='mail_compose.php'>Send another?</a></p>
        		<br/>";
    
	    }
    }
?>        <!-- /.col -->

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
