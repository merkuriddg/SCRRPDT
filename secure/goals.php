<?php
require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');
$g=array_key_exists('g', $_REQUEST) ? $_REQUEST['g'] : null;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<?php include('head.php'); ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        #goal_list { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #goal_list li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
        #goal_list li span { position: absolute; margin-left: -1.3em; }
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#goal_list" ).sortable();
            $( "#goal_list" ).disableSelection();
        } );
    </script>
</head>

<body>
<?php include('tabcontent.php'); ?>
<?php include('menu.php'); ?>

<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <div class="box-header">
                <div class="panel panel-success ">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                                <span><i class="fa fa-building"></i> <b><?php echo $companyname; ?>'s Goals -</b> <em>The Outcomes We Want to Achieve</em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /############################################################################################################################ -->

    <form method="POST" action="updategoals.php">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                <span class="nist-title">Our Goals  <?php if ($g==1) {echo " - Updated!";}?></span>

                    <?php
/*                    $goal_count=0;
                    $sql="SELECT * FROM NIST_goals WHERE coID = " .$coID . " ORDER BY goal_no";
                    $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
                    while($row_goal = mysqli_fetch_array($result)){
                        $goal_info[] = $row_goal;
                    $goal_count++;
                    }

                    foreach($goal_info as $goals){
                        echo "<br />";
                        echo "Goal: <input type='' value='".$goals['goal_no']."' size='2'><input type='' value='".$goals['goal']."' size='100'>";
                    }
                    /*
                            https://coder1.com/articles/jquery-sortables-php-and-mysql
                     */
//handle POST
if ($_POST) {  // use $i to increment the weight
    $i=0;  // loop through post array in the order it was submitted
    foreach ($_POST['goal'] as $goal_id) {
    //
        //    update the row
        $sql="UPDATE NIST_goals SET goal_no=". $i . " WHERE id='". mysqli_real_escape_string($goal_id)."'";
        $result = mysqli_query($con,$sql);
    //    increment weight to make the next fruit heavier
        $i++;
        }
    }?>

                <script type="text/javascript">
                    // when the entire document has loaded, run the code inside this function
                    $(document).ready(function(){
                        // Wow! .. One line of code to make the unordered list drag/sortable!
                    $('#goal_list').sortable();});
                </script>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                    <ul id="goal_list">
                        <?php
                          $result = mysqli_query($con,"SELECT id, goal_no, goal FROM NIST_goals ORDER BY goal_no");
                          while ($row = mysqli_fetch_assoc($result)) {
                              echo '<li  class="ui-state-default"><input type="hidden" name="goals[]" value="'. $row['id'] .'" /><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>'. $row['goal_no'] .':'. $row['goal'] .'</li>';
                          }
                       ?>

                    </ul>
                    <input type="submit" name="reorder" value="Re-Order Goals" />
                </form>



               <select id="goal" size="<?php echo $goal_count; ?> " style="width:100%;">
             <?php
                 foreach($goal_info as $goals){
                        ?>
                        <option value="<?php echo $goals['goal']; ?>" data-id="<?php echo $goals['id']; ?>">
                            <?php echo $goals['id'].": ".$goals['goal_no'].": ".$goals['goal']; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <input id="goal_count" type="hidden" name="goal_count" value="<?php echo $goalsize; ?>">
                <input id="goal_id" type="hidden" name="goal_id" value="<?php echo $goals['id']; ?>">
                <input id="goal_code" type="hidden" name="goal_code" value="add">
                <input id="goalinput" type="text" name="goalinput" value="" placeholder="Add a New Goal" style="display:block;width:100%" onfocus="myMInputFunction()">
                <div class="row">
                    <div class="col-lg-4 col-md-4 text-left">
                    <button id="goalbtn" type="submit" class="btn-info btn-sm text-left">Add New Goal</button>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center ">
                    <button id="goaledit" type="submit" class="btn-default btn-sm text-center" style="display:none;">Edit</button>
                    </div>
                    <div class="col-lg-4 col-md-4  text-right">
                    <button id="goaldelete" type="submit" class="btn-danger btn-sm text-right" style="display:none;" onclick="myDeleteFunction()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script type="text/javascript">
    document.getElementById("goal").onchange = function() {
        document.getElementById("goaledit").style.display='block';
        document.getElementById("goaldelete").style.display='block';
        document.getElementById("goaledit").innerHTML = "Edit "+this.value;
        document.getElementById("goaldelete").innerHTML = "Delete "+this.value;
        document.getElementById("goal_code").value= "edit";
        document.getElementById("goalinput").value= this.value;
        document.getElementById("goal_id").value = $(this).find(':selected').data('id');
    };
    function myDeleteFunction() {
        document.getElementById("goal_code").value= "delete";
    }
    function myFunction() {
        document.getElementById("goalbtn").innerHTML = "Add New";
        document.getElementById("goalinput").style.display='block';
        document.getElementById("goaledit").style.display='none';
        document.getElementById("goal_code").value= "add";
    }
    function myMInputFunction() {
        document.getElementById("goalinput").style.background = "yellow";
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
