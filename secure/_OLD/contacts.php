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
            <div class="box">
            <div class="box-body">
              <table id="contacts" class="table table-bordered table-hover" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th width="33%" style="font-size:10px;">Contact</th>
                        <th width="33%" style="font-size:10px;">Details</th>
                        <th width="33%" style="font-size:10px;">Social</th>
                    </tr>
                </thead>
                <tbody>


<?php

//Get_Member_info
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
                <td valign="middle">
                    <table border="0" align="left" width="100%" valign="middle" class="contact-table">
                        <tr valign="middle">
                            <td align="left" width="20%" valign="middle"><img src="../dist/img/' . $member_img . '" height="50"></td>
                            <td align="left" width="40%" valign="middle" class="contact-table" style="font-size:10px;">' . $member_lname.', ' . $member_fname . '<br>'. $member_position .'<br>
                            <a href="mail_compose.php?id='.$member_id.'">'. $email .'</a><br>'. $full_phone .'
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="font-size:10px;">'.$education.'<br>' . $experience . '<br>' . $location . '<br>' . $skills . '<br>' . $notes . '</td>
                    <td valign="middle"  class="contact-table" style="font-size:10px;">
                    <a href="http://www.blinkedln.com"><i class="icon icon-blinkedln"></i> '.$blinked_name.'</a><br>
                    <a href="http://www.instagram.com/"'.$instagram_name.'"><i class="fa fa-instagram"></i> '.$instagram_name.'</a><br>
                    <a href="http://www.skwalk.com"><i class="icon icon-skwalk"></i> '.$skwalk_name.'</a><br>
                    <a href="http://www.snapchat.com/"'.$snapchat_name.'"><i class="fa fa-snapchat"></i> '.$snapchat_name.'</a><br>
                    </td>
                </tr>';
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





<!-- main-footer -->
<?php include('main_footer.php'); ?>
        </div>

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
      'autoWidth'   : true,
      'dom'         : '<"top"i>rt<"bottom"flp><"clear">'
    })
  })
</script>
</body>
</html>