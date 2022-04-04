<?php
require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');
//$g=$_REQUEST['g'];
//$o=$_REQUEST['o'];
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
            <div class="box-header">
                <div class="panel panel-success ">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                                <span><i class="fa fa-building"></i> <b><?php echo $companyname; ?>'s Objectives -</b> <em>Specific Actions Required to Complete Goal</em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /############################################################################################################################ -->

    <form method="POST" action="updatetasks.php">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                <?php if (!isset ($o )) {?>
                    <span class="nist-title">Select a Objective</span>

                    <select onchange="if (this.value) window.location.href=this.value">
                    <option value="" selected>Select...</option>
                    <?php
                    $sql="SELECT * FROM NIST_objectives WHERE coID = " .$coID . " ORDER BY goal_no";
                    $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
                    while ($row = mysqli_fetch_array($result)) {
                        $goal_no = $row['objective_no'];
                        $goal = $row['objective'];
                        $goal_id = $row['goal_id'];
                        $goal_no = $row['goal_no'];
                        $goal = $row['goal'];
                        if ($objective_no <> "") {
                            ?>
                            <option value="objectives.php?g=<?php echo $objective_no; ?>"><?php echo $objective_no.". ".$objective; ?></option>
                        <?php }}
                    ?>

                </select>
                <?php } else
                { ?>
                    <span class="nist-title">Objectives:</span>
                <?php
                $sql="SELECT * FROM NIST_goals WHERE coID = " .$coID . " AND  goal_no= " .$g;
                $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
                while ($row = mysqli_fetch_array($result)) {
                    $goal_no = $row['goal_no'];
                    $goal = $row['goal'];
                }
                echo $goal_no.". ".$goal;

                } ?>
<br>
<!-- Once goal is selected, bring in the Objectives here... -->

            <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                <span class="nist-title">Our Tasks  <?php if ($m==1) {echo " - Updated!";}?></span>
                <select id="objective" size="<?php echo $tasksize; ?> " style="width:100%;">
                    <?php
                    foreach ($tasks as $v) {
                        ?>
                        <option value="<?php echo $v['task']; ?>" data-id="<?php echo $v['task_no']; ?>">
                            <?php echo $v['task_no'].": ".$v['task']; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <input id="task_count" type="hidden" name="task_count" value="<?php echo $taskize; ?>">
                <input id="task_id" type="hidden" name="task_id" value="">
                <input id="task_code" type="hidden" name="task_code" value="add">
                <input id="taskinput" type="text" name="taskinput" value="" placeholder="Add a New Task" style="display:block;width:100%" onfocus="myMInputFunction()">
                <div class="row">
                    <div class="col-lg-4 col-md-4 text-left">
                    <button id="taskbtn" type="submit" class="btn-info btn-sm text-left">Add New Task</button>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center ">
                    <button id="taskedit" type="submit" class="btn-default btn-sm text-center" style="display:none;">Edit</button>
                    </div>
                    <div class="col-lg-4 col-md-4  text-right">
                    <button id="taskdelete" type="submit" class="btn-danger btn-sm text-right" style="display:none;"  onclick="myDeleteFunction()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script type="text/javascript">
    document.getElementById("objective").onchange = function() {
        document.getElementById("objectiveedit").style.display='block';
        document.getElementById("objectivedelete").style.display='block';
        document.getElementById("objectiveedit").innerHTML = "Edit "+this.value;
        document.getElementById("objectivedelete").innerHTML = "Delete "+this.value;
        document.getElementById("objective_code").value= "edit";
        document.getElementById("objectiveinput").value= this.value;
        document.getElementById("objective_id").value = $(this).find(':selected').data('id');
    };
    function myDeleteFunction() {
        document.getElementById("objective_code").value= "delete";
    }
    function myFunction() {
        document.getElementById("objectivebtn").innerHTML = "Add New";
        document.getElementById("objectiveinput").style.display='block';
        document.getElementById("objectiveedit").style.display='none';
        document.getElementById("objective_code").value= "add";
    }
    function myMInputFunction() {
        document.getElementById("objectiveinput").style.background = "yellow";
    }
</script>


    <div class="row"><br><hr>
        <div class="box box-default collapsed-box box-solid margin " style="width:98%;">
            <div class="box-header">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-sticky-note"></i> Notes</button>
            </div>
            <div class="box-body">
                <p class="text-left margin">
                    These are our Goals, or the outcomes that we want to achieve, in terms of:</br>
                    - Business Requirements,</br>
                    - Risk Tolerance,</br>
                    - Organization Resources</br>
                    These Goals are defined by Objectives, that essentially break each goal down into smaller steps,
                    and identifies the specific actions or tasks that must be completed in order to achieve that goal.</br>
                    Additionally, the tasks will be assigned Sub-Categories of the NIST CSF to create our Current and Target Profiles.<br><br>
                </p>
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
