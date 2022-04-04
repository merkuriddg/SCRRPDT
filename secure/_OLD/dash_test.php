<?php
require_once('../includes/config.php');
include('logged_in.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<?php include('head.php'); ?>
</head>

<body>
<?php include('tabcontent.php'); ?>
<?php include('get_member_info.php'); ?>
<?php include('check_first_login.php'); ?>
<?php include('menu.php'); ?>


<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#dashboard" data-toggle="tab">Dashboard</a></li>
                    <li><a href="#ourbusiness" data-toggle="tab">Our Business</a></li>
                    <li><a href="#profilebuilder" data-toggle="tab">Profile Builder</a></li>
                    <li><a href="#current" data-toggle="tab">Current Profiles</a></li>
                    <li><a href="#target" data-toggle="tab">Target Profiles</a></li>
                    <li><a href="#roadmaps" data-toggle="tab">Roadmaps</a></li>
                    <li><a href="#nisttab" data-toggle="tab">NIST CSF</a></li>
                    <li><a href="#support" data-toggle="tab">Support</a></li>
                    <li><a href="#members" data-toggle="tab">Members</a></li>
                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>




<!--
<php
$tb = isset($_GET['tab']) ? $_GET['tab'] : '';
switch($tb) { //switch is just like a bunch of if()s
    default: //default case
        include('include/attachments_overview.php'); //include page.html
        break;  //break, witch means stop
    case 'insurance': // page2, if changePage has the value of page2
        include('include/upload_insurance/upload_files.php'); //include page2.html
        break;  //break, witch means stop
    case 'policy': // page2, if changePage has the value of page2
        include('include/upload_policy/upload_files.php'); //include page2.html
        break; //stop it
} //end the switch
?>


-->
<!-- ############################################################################################################################ -->
<!-- ############################################################################################################################ -->
                <div class="tab-content">
                    <!-- dashboard/############################################################################################################################ -->
                    <!-- /############################################################################################################################ -->
                    <div id="dashboard" class="tab-pane active">
                        <div class="box-header">
                        <div class="col-lg-3 col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">5</div>
                                            <div>Missions</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-clock-o fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">12</div>
                                            <div>Current Profiles</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-bullseye fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">14</div>
                                            <div>Current Targets</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-map fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">13</div>
                                            <div>Roadmaps</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- ourbusiness/############################################################################################################################ -->
                    <!-- /############################################################################################################################ -->
                    <?php include "ourbusiness.php" ?>
                    <!-- /############################################################################################################################ -->
                    <!-- profilebuilder/############################################################################################################################ -->
                    <?php include "profilebuilder.php" ?>
                    <!-- /############################################################################################################################ -->
                    <!-- current/############################################################################################################################ -->
                    <?php include "currentprofiles.php" ?>
                    <!-- /############################################################################################################################ -->
                    <!-- target/############################################################################################################################ -->
                    <?php include "targetprofiles.php" ?>
                    <!-- /############################################################################################################################ -->
                    <!-- roadmap/############################################################################################################################ -->
                    <?php include "roadmaps.php" ?>
                    <!-- /############################################################################################################################ -->
                    <!-- roadmap/############################################################################################################################ -->
                    <?php include "nisttab.php" ?>
                    <!-- /############################################################################################################################ -->
                    <!-- support/############################################################################################################################ -->
                    <?php include "support.php" ?>
                    <!-- /############################################################################################################################ -->
                    <!-- members/############################################################################################################################ -->
                    <?php include "members.php" ?>

                    <!-- /############################################################################################################################ -->
                    <!-- settings/############################################################################################################################ -->
                    <?php include "settings.php" ?>
                    <!-- /############################################################################################################################ -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- main-footer -->
<?php include('main_footer.php'); ?>
<!-- ./wrapper -->
<script type="text/javascript">
   $(document).ready(function () {
      $('head').append('<link href="/chrome.css" rel="stylesheet" />');
   });
</script>    
<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>

</body>
</html>
