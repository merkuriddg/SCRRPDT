<?php
require_once('../includes/config.php');
include('logged_in.php');
include('session_vars.php');

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<?php include('head.php'); ?>
</head>


<body>

<?php include('tabcontent.php'); ?>
<?php include('get_member_info.php'); ?>
<?php include('menu.php'); ?>


    <div class="main">
    <div class="row">
        <div class="col-lg-12">
                <!-- /############################################################################################################################ -->
                        <div class="box-header">
                            <div class="panel panel-success ">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span><i class="fa fa-building"></i> <b><?php echo $companyname; ?>'s Dashboard -</b> <em>This defines Who We Are</em></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 xs-1">&nbsp;</div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 xs-3">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 xs-3">
                                                            <i class="fa fa-briefcase fa-4x icon-orange"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right ">
                                                            <div class="dashboard-huge"><?php echo $_SESSION['missioncount']; ?></div>
                                                            <div class="dashboard-huge-sub"><a href="dashboard.php">Missions</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 xs-3">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 xs-3">
                                                            <i class="fa fa-clock fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div class="dashboard-huge"><?php echo $_SESSION['currentprofilecount']; ?></div>
                                                            <div class="dashboard-huge-sub"><a href="currentprofiles.php">Current Profiles</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 xs-3">
                                            <div class="panel panel-success ">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 xs-3">
                                                            <i class="fa fa-bullseye fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div class="dashboard-huge"><?php echo $_SESSION['targetprofilecount']; ?></div>
                                                            <div class="dashboard-huge-sub"><a href="targetprofiles.php">Target Profiles</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 xs-1">&nbsp;</div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3">&nbsp;</div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 xs-3">
                                                            <i class="fa fa-thermometer-half fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div class="dashboard-huge">5</div>
                                                            <div class="dashboard-huge-sub"><a href="roadmaps.php">Impacts</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 xs-3">
                                                            <i class="fa fa-road fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div class="dashboard-huge">8</div>
                                                            <div class="dashboard-huge-sub"><a href="roadmaps.php">Roadmaps</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="nist-title">Our Missions:
                                            <select size="<?php echo (count($missions[1])-1); ?> " style="width:100%;border:0px;" disabled>
                                                <?php
                                                foreach ($missions as $v) {
                                                    ?>
                                                    <option value="<?php echo $v['mission_no']; ?>">
                                                        <?php echo $v['mission_no'].": ".$v['mission']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="nist-title">
                                            Our <?php echo $orgname; ?>:
                                            <select size="<?php echo $deptsize; ?> " style="width:100%;border:0px;"  disabled>
                                                <?php
                                                foreach ($depts as $v) {
                                                    ?>
                                                    <option value="<?php echo $v['deptID']; ?>">
                                                        <?php echo $v['deptID'].": ".$v['deptname']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">

                                    <p class="nist-title">Members:</br>
                                            <select size="8" style="width:100%;border:0px;" disabled>
                                                <option value="<?php echo $memberID; ?>">Member 1 </option>
                                                <option value="<?php echo $memberID; ?>">Member 2 </option>
                                                <option value="<?php echo $memberID; ?>">Member 3 </option>
                                                <option value="<?php echo $memberID; ?>">Member 4 </option>
                                                <option value="<?php echo $memberID; ?>">Member 5 </option>
                                                <option value="<?php echo $memberID; ?>">Member 6 </option>
                                            </select>
                                        </p>
                                    </div>
                                </div>

                        <div class="row"><br><hr>
                                            <div class="box box-default collapsed-box box-solid margin " style="width:98%;">
                                                <div class="box-header">
                                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-sticky-note"></i> Notes</button>
                                                </div>
                                                <div class="box-body">

                                        <p class="text-left margin">
                                            These are our Missions, or Why Our Business Exists, in terms of.</br>
                                            - Business Requirements,</br>
                                            - Risk Tolerance,</br>
                                            - Organization Resources</br>
                                            These Missions define which Sub-Categories of the NIST CSF we will use to evaluate our Current and Target Profiles.</br>
                                            Additionally, the organization will define the different departments here for their organization.<br><br>
                                            These can be changed in <a href="settings.php">Settings</a>.</p>
                                    </div>
                                </div>
                            </div>
    </div>
<!--
Where am I asking your:
                    - Business Requirements,
                    - Risk Tolerance,
                    - Organization Resources

                    Is there a Profile Template for me?
                    - Business Requirements - High,  Med, Low
                    - Risk Tolerance - High,  Med, Low
                    - Organization Resources - High,  Med, Low

Can I define these...for organizations
What is the Primary, Secondary and Tertiary lists of the SubCategories for these Templates


Also should we consider
- Process Level,
- Policy Level,
- Documentation Level, and
- Automation Level as tools to define a Maturity

or any of these....

- Exposure,
- Resources (Time Money Enrollment)
- People, Processes Technologies, Ecosystem


-->

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
