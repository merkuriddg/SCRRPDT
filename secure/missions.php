<?php
require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');
$m=$_REQUEST['m']
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
                                        <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                                            <span><i class="fa fa-building"></i> <b><?php echo $companyname; ?>'s Missions -</b> <em>Why Our Business Exists</em></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                                            <form method="POST" action="updatemissions.php">
                                                <span class="nist-title">Our Missions  <?php if ($m==1) {echo " - Updated!";}?></span>
                                                <select id="mission" size="<?php echo $missionsize; ?> " style="width:100%;">
                                                    <?php
                                                    foreach ($missions as $v) {
                                                        ?>
                                                        <option value="<?php echo $v['mission']; ?>" data-id="<?php echo $v['mission_no']; ?>">
                                                            <?php echo $v['mission_no'].": ".$v['mission']; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                                <input id="mission_count" type="hidden" name="mission_count" value="<?php echo $missionsize; ?>">
                                                <input id="mission_id" type="hidden" name="mission_id" value="">
                                                <input id="mission_code" type="hidden" name="mission_code" value="add">
                                                <input id="missioninput" type="text" name="missioninput" value="" placeholder="Add a New Mission" style="display:block;width:100%" onfocus="myMInputFunction()">
                                                <div class="row">
                                                <div class="col-lg-4 col-md-4 ">
                                                <button id="missionbtn" type="submit" class="btn-info btn-sm text-left">Add New Mission</button>
                                                </div>
                                                <div class="col-lg-4 col-md-4 ">
                                                <button id="missionedit" type="submit" class="btn-default btn-sm text-center" style="display:none;">Edit</button>
                                                </div>
                                                <div class="col-lg-4 col-md-4 ">
                                                <button id="missiondelete" type="submit" class="btn-danger btn-sm text-right" style="display:none;"  onclick="myDeleteFunction()">Delete</button>
                                                </div>
                                                </div>
                                            </form>

                                            <script type="text/javascript">
                                                document.getElementById("mission").onchange = function() {
                                                    document.getElementById("missionedit").style.display='block';
                                                    document.getElementById("missiondelete").style.display='block';
                                                    document.getElementById("missionedit").innerHTML = "Edit "+this.value;
                                                    document.getElementById("missiondelete").innerHTML = "Delete "+this.value;
                                                    document.getElementById("mission_code").value= "edit";
                                                    document.getElementById("missioninput").value= this.value;
                                                    document.getElementById("mission_id").value = $(this).find(':selected').data('id');
                                                };
                                                function myDeleteFunction() {
                                                    document.getElementById("mission_code").value= "delete";
                                                }
                                                function myFunction() {
                                                    document.getElementById("missionbtn").innerHTML = "Add New";
                                                    document.getElementById("missioninput").style.display='block';
                                                    document.getElementById("missionedit").style.display='none';
                                                    document.getElementById("mission_code").value= "add";
                                                }
                                                function myMInputFunction() {
                                                    document.getElementById("missioninput").style.background = "yellow";
                                                }
                                            </script>



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
                </p>
            </div>
            <div class="col-lg-6">
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
