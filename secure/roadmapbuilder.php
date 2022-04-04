<?php
require_once('../../../includes/config.php');
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
            <div class="box-header">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <span><i class="fa fa-road"></i> <b><?php echo $companyname; ?>'s Roadmap Builder -</b> <em>This is How We Are Going To Get There</em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-default box-solid margin">
                    <div class="box-header with-border">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-users"></i> People:</button>
                    </div>
                    <div class="box-body">
                        <table class="box-body"  width="95%" align="center" border="1" cellpadding="0" cellspacing="0">
                            <?php foreach ($depts as $v) { ?>
                            <?php
                            $sqlC="SELECT count(*) 
                                    FROM NIST_impacts 
                                    WHERE NIST_impacts.coID = ".$coID."
                                    AND NIST_impacts.DeptID = ".$v['deptID'];
                            $result = mysqli_query($con,$sqlC)
                            or die("Query fail: " . mysqli_error($con));
                            while ($row = mysqli_fetch_array($result)) {
                            $ImpactCount = $row[0];
                            if ($ImpactCount>= 1) {
                            ?>
                            <div class="box box-default box-solid margin " style="width:98%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><?php echo $v['deptID'].": ".$v['deptname']; ?></button>
                                </div>
                                <div class="box-body">
                                    <tr width="95%">
                                        <th class="td-nist-title" width="5%">Profile</th>
                                        <th class="td-nist-title" width="10%">Mission</th>
                                        <th class="td-nist-title" width="30%">NIST Objective</th>
                                        <th class="td-nist-title" width="40%">Roadmap Control</th>
                                        <th class="td-nist-title text-center" width="10%">Priority</th>
                                    </tr>
                                    <?php
                                    }
                                    };
                                    ?>
                                    <?php
                                    $Functions = array("ID", "PR", "DE", "RC", "RS");
                                    $Range = array("Low", "Med", "High");
                                    foreach ($Functions as $rowValue1) {

                                        foreach ($Range as $rowValue2) {

                                            $sql="SELECT NIST_impacts.id, NIST_profiles.Profile, NIST_profiles.ProfileName, ImpactStmt, NIST_impacts.MissionID, NIST_impacts.FunctionID, NIST_impacts.CategoryID, NIST_impacts.SubCatID, ImpactStartDate, NIST_CSF.functiontext,NIST_CSF.categorytext, NIST_CSF.subcategory AS subcat, NIST_missions.mission, Low, Med, High
                                                        FROM NIST_impacts
                                                        JOIN NIST_missions on NIST_missions.coID = NIST_impacts.coID
                                                        JOIN NIST_profiles on NIST_profiles .coID = NIST_missions.coID
                                                        JOIN NIST_CSF on NIST_impacts.FunctionID = NIST_CSF.functioncode
                                                                    AND  NIST_impacts.CategoryID = NIST_CSF.categorycode
                                                        WHERE (NIST_impacts.coID  = '".$_SESSION['coID']."')
                                                        AND (NIST_impacts.".$rowValue2." = '1')
                                                        AND (NIST_impacts.FunctionID = '".$rowValue1."')
                                                        AND (NIST_impacts.DeptID  = '".$v['deptID']."')
                                                        GROUP BY NIST_impacts.id";


                                            $result = mysqli_query($con,$sql)
                                            or die("Query fail: " . mysqli_error($con));
                                            while ($row = mysqli_fetch_array($result)) {
                                                $id = $row['id'];
                                                $ImpactStmt = $row['ImpactStmt'];
                                                $Profile = $row['Profile'];
                                                $ProfileName = $row['ProfileName'];
                                                $MissionID = $row['MissionID'];
                                                $Mission = $row['mission'];
                                                $DeptID = $row['DeptID'];
                                                $TemplateID = $row['TemplateID'];
                                                $FunctionID = $row['FunctionID'];
                                                $CategoryID = $row['CategoryID'];
                                                $SubCatID = $row['SubCatID'];
                                                $subcategory = $row['subcat'];
                                                $ProfileStartDate = $row['ProfileStartDate'];
                                                echo  PHP_EOL;
                                                echo '<tr>'. PHP_EOL;
                                                echo '<td class="nist-left" valign="top">' . $ProfileName . '</td>'. PHP_EOL;
                                                echo '<td class="nist-left" valign="top">' . $MissionID . ': ' .$Mission. '</td>'. PHP_EOL;
                                                echo '<td class="nist-left" valign="top">' . $FunctionID . '.' . $CategoryID . '-' . $SubCatID . ': ' . $subcategory. '</td>'. PHP_EOL;

                                                echo '<td class="nist-left" valign="top"><textarea rows="5" style="width:95%;background-color:transparent;border:0 solid transparent;"></textarea></td>'. PHP_EOL;

                                                echo'<td class="text-center" valign="top">
                                                                    <select id="" name="PeopleControlStatus" size="3">
                                                                        <option>Now</option>
                                                                        <option>Next</option>
                                                                        <option>Later</option>
                                                                    </select><br>
                                                                    <button type="submit" class="btn-info btn-sm">Update</button>
                                                                    ';
                                                echo '</td>'. PHP_EOL;
                                                echo '                                    </tr>'. PHP_EOL;
                                            }
                                        }
                                        $con->next_result();
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="box box-default collapsed-box box-solid margin">
                    <div class="box-header with-border">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-tasks"></i> Processes:</button>
                    </div>
                    <div class="box-body">
                        <table class="box-body"  width="95%" align="center" border="1" cellpadding="0" cellspacing="0">
                            <?php foreach ($depts as $v) { ?>
                                <?php
                                $sqlC="SELECT count(*) 
                                    FROM NIST_impacts 
                                    WHERE NIST_impacts.coID = ".$coID."
                                    AND NIST_impacts.DeptID = ".$v['deptID'];
                                $result = mysqli_query($con,$sqlC)
                                or die("Query fail: " . mysqli_error($con));
                                while ($row = mysqli_fetch_array($result)) {
                                    $ImpactCount = $row[0];
                                    if ($ImpactCount>= 1) {
                                        ?>
                                        <div class="box box-default box-solid margin " style="width:98%;">
                                        <div class="box-header">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><?php echo $v['deptID'].": ".$v['deptname']; ?></button>
                                        </div>
                                        <div class="box-body">
                                        <tr width="95%">
                                            <th class="td-nist-title" width="5%">Profile</th>
                                            <th class="td-nist-title" width="10%">Mission</th>
                                            <th class="td-nist-title" width="30%">NIST Objective</th>
                                            <th class="td-nist-title" width="40%">Roadmap Control</th>
                                            <th class="td-nist-title text-center" width="10%">Priority</th>
                                        </tr>
                                        <?php
                                    }
                                };
                                ?>
                                <?php
                                $Functions = array("ID", "PR", "DE", "RC", "RS");
                                $Range = array("Low", "Med", "High");
                                foreach ($Functions as $rowValue1) {

                                    foreach ($Range as $rowValue2) {

                                        $sql="SELECT NIST_impacts.id, NIST_profiles.Profile, NIST_profiles.ProfileName, ImpactStmt, NIST_impacts.MissionID, NIST_impacts.FunctionID, NIST_impacts.CategoryID, NIST_impacts.SubCatID, ImpactStartDate, NIST_CSF.functiontext,NIST_CSF.categorytext, NIST_CSF.subcategory, NIST_missions.mission, Low, Med, High
                                                        FROM NIST_impacts
                                                        JOIN NIST_missions on NIST_missions.coID = NIST_impacts.coID
                                                        JOIN NIST_profiles on NIST_profiles .coID = NIST_missions.coID
                                                        JOIN NIST_CSF on NIST_impacts.FunctionID = NIST_CSF.functioncode
                                                                    AND  NIST_impacts.CategoryID = NIST_CSF.categorycode
                                                        WHERE (NIST_impacts.coID  = '".$_SESSION['coID']."')
                                                        AND (NIST_impacts.".$rowValue2." = '1')
                                                        AND (NIST_impacts.FunctionID = '".$rowValue1."')
                                                        AND (NIST_impacts.DeptID  = '".$v['deptID']."')
                                                        GROUP BY NIST_impacts.id";

                                        $result = mysqli_query($con,$sql)
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)) {
                                            $id = $row['id'];
                                            $ImpactStmt = $row['ImpactStmt'];
                                            $Profile = $row['Profile'];
                                            $ProfileName = $row['ProfileName'];
                                            $MissionID = $row['MissionID'];
                                            $Mission = $row['mission'];
                                            $DeptID = $row['DeptID'];
                                            $TemplateID = $row['TemplateID'];
                                            $FunctionID = $row['FunctionID'];
                                            $CategoryID = $row['CategoryID'];
                                            $SubCatID = $row['SubCatID'];
                                            $subcategory = $row['subcategory'];
                                            $ProfileStartDate = $row['ProfileStartDate'];
                                            echo  PHP_EOL;
                                            echo '<tr>'. PHP_EOL;
                                            echo '<td class="nist-left" valign="top">' . $ProfileName . '</td>'. PHP_EOL;
                                            echo '<td class="nist-left" valign="top">' . $MissionID . ': ' .$Mission. '</td>'. PHP_EOL;
                                            echo '<td class="nist-left" valign="top">' . $FunctionID . '.' . $CategoryID . '-' . $SubCatID . ': ' . $subcategory. '</td>'. PHP_EOL;


                                            echo '<td class="nist-left" valign="top"><textarea rows="5" style="width:95%;background-color:transparent;border:0 solid transparent;"></textarea></td>'. PHP_EOL;

                                            echo'<td class="text-center" valign="top">
                                                                    <select id="" name="PeopleControlStatus" size="3">
                                                                        <option>Now</option>
                                                                        <option>Next</option>
                                                                        <option>Later</option>
                                                                    </select><br>
                                                                    <button type="submit" class="btn-info btn-sm">Update</button>
                                                                    ';
                                            echo '</td>'. PHP_EOL;
                                            echo '                                    </tr>'. PHP_EOL;
                                        }
                                    }
                                    $con->next_result();
                                }
                                ?>
                                </div>
                                </div>
                            <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="box box-default collapsed-box box-solid margin">
                    <div class="box-header with-border">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-laptop"></i> Technology:</button>
                    </div>
                    <div class="box-body">
                        <table class="box-body"  width="95%" align="center" border="1" cellpadding="0" cellspacing="0">
                            <?php foreach ($depts as $v) { ?>
                                <?php
                                $sqlC="SELECT count(*) 
                                    FROM NIST_impacts 
                                    WHERE NIST_impacts.coID = ".$coID."
                                    AND NIST_impacts.DeptID = ".$v['deptID'];
                                $result = mysqli_query($con,$sqlC)
                                or die("Query fail: " . mysqli_error($con));
                                while ($row = mysqli_fetch_array($result)) {
                                    $ImpactCount = $row[0];
                                    if ($ImpactCount>= 1) {
                                        ?>
                                        <div class="box box-default box-solid margin " style="width:98%;">
                                        <div class="box-header">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><?php echo $v['deptID'].": ".$v['deptname']; ?></button>
                                        </div>
                                        <div class="box-body">
                                        <tr width="95%">
                                            <th class="td-nist-title" width="5%">Profile</th>
                                            <th class="td-nist-title" width="10%">Mission</th>
                                            <th class="td-nist-title" width="30%">NIST Objective</th>
                                            <th class="td-nist-title" width="40%">Roadmap Control</th>
                                            <th class="td-nist-title text-center" width="10%">Priority</th>
                                        </tr>
                                        <?php
                                    }
                                };
                                ?>
                                <?php
                                $Functions = array("ID", "PR", "DE", "RC", "RS");
                                $Range = array("Low", "Med", "High");
                                foreach ($Functions as $rowValue1) {

                                    foreach ($Range as $rowValue2) {

                                        $sql="SELECT NIST_impacts.id, NIST_profiles.Profile, NIST_profiles.ProfileName, ImpactStmt, NIST_impacts.MissionID, NIST_impacts.FunctionID, NIST_impacts.CategoryID, NIST_impacts.SubCatID, ImpactStartDate, NIST_CSF.functiontext,NIST_CSF.categorytext, NIST_CSF.subcategory, NIST_missions.mission, Low, Med, High
                                                        FROM NIST_impacts
                                                        JOIN NIST_missions on NIST_missions.coID = NIST_impacts.coID
                                                        JOIN NIST_profiles on NIST_profiles .coID = NIST_missions.coID
                                                        JOIN NIST_CSF on NIST_impacts.FunctionID = NIST_CSF.functioncode
                                                                    AND  NIST_impacts.CategoryID = NIST_CSF.categorycode
                                                        WHERE (NIST_impacts.coID  = '".$_SESSION['coID']."')
                                                        AND (NIST_impacts.".$rowValue2." = '1')
                                                        AND (NIST_impacts.FunctionID = '".$rowValue1."')
                                                        AND (NIST_impacts.DeptID  = '".$v['deptID']."')
                                                        GROUP BY NIST_impacts.id";

                                        $result = mysqli_query($con,$sql)
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)) {
                                            $id = $row['id'];
                                            $ImpactStmt = $row['ImpactStmt'];
                                            $Profile = $row['Profile'];
                                            $ProfileName = $row['ProfileName'];
                                            $MissionID = $row['MissionID'];
                                            $Mission = $row['mission'];
                                            $DeptID = $row['DeptID'];
                                            $TemplateID = $row['TemplateID'];
                                            $FunctionID = $row['FunctionID'];
                                            $CategoryID = $row['CategoryID'];
                                            $SubCatID = $row['SubCatID'];
                                            $subcategory = $row['subcategory'];
                                            $ProfileStartDate = $row['ProfileStartDate'];
                                            echo  PHP_EOL;
                                            echo '<tr>'. PHP_EOL;
                                            echo '<td class="nist-left" valign="top">' . $ProfileName . '</td>'. PHP_EOL;
                                            echo '<td class="nist-left" valign="top">' . $MissionID . ': ' .$Mission. '</td>'. PHP_EOL;
                                            echo '<td class="nist-left" valign="top">' . $FunctionID . '.' . $CategoryID . '-' . $SubCatID . ': ' . $subcategory. '</td>'. PHP_EOL;

                                            echo '<td class="nist-left" valign="top"><textarea rows="5" style="width:95%;background-color:transparent;border:0 solid transparent;"></textarea></td>'. PHP_EOL;

                                            echo'<td class="text-center" valign="top">
                                                                    <select id="" name="PeopleControlStatus" size="3">
                                                                        <option>Now</option>
                                                                        <option>Next</option>
                                                                        <option>Later</option>
                                                                    </select><br>
                                                                    <button type="submit" class="btn-info btn-sm">Update</button>
                                                                    ';
                                            echo '</td>'. PHP_EOL;
                                            echo '                                    </tr>'. PHP_EOL;
                                        }
                                    }
                                    $con->next_result();
                                }
                                ?>
                                </div>
                                </div>
                            <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="box box-default collapsed-box box-solid margin">
                    <div class="box-header with-border">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-globe"></i> Ecosystem:</button>
                    </div>
                    <div class="box-body">
                    <table class="box-body"  width="95%" align="center" border="1" cellpadding="0" cellspacing="0">
                        <?php foreach ($depts as $v) { ?>
                            <?php
                            $sqlC="SELECT count(*) 
                                FROM NIST_impacts 
                                WHERE NIST_impacts.coID = ".$coID."
                                AND NIST_impacts.DeptID = ".$v['deptID'];
                            $result = mysqli_query($con,$sqlC)
                            or die("Query fail: " . mysqli_error($con));
                            while ($row = mysqli_fetch_array($result)) {
                                $ImpactCount = $row[0];
                                if ($ImpactCount>= 1) {
                                    ?>
                                    <div class="box box-default box-solid margin " style="width:98%;">
                                    <div class="box-header">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><?php echo $v['deptID'].": ".$v['deptname']; ?></button>
                                    </div>
                                    <div class="box-body">
                                    <tr width="95%">
                                        <th class="td-nist-title" width="5%">Profile</th>
                                        <th class="td-nist-title" width="10%">Mission</th>
                                        <th class="td-nist-title" width="30%">NIST Objective</th>
                                        <th class="td-nist-title" width="40%">Roadmap Control</th>
                                        <th class="td-nist-title text-center" width="10%">Priority</th>
                                    </tr>
                                    <?php
                                }
                            };
                            ?>
                            <?php
                            $Functions = array("ID", "PR", "DE", "RC", "RS");
                            $Range = array("Low", "Med", "High");
                            foreach ($Functions as $rowValue1) {

                                foreach ($Range as $rowValue2) {

                                    $sql="SELECT NIST_impacts.id, NIST_profiles.Profile, NIST_profiles.ProfileName, ImpactStmt, NIST_impacts.MissionID, NIST_impacts.FunctionID, NIST_impacts.CategoryID, NIST_impacts.SubCatID, ImpactStartDate, NIST_CSF.functiontext,NIST_CSF.categorytext, NIST_CSF.subcategory, NIST_missions.mission, Low, Med, High
                                                    FROM NIST_impacts
                                                    JOIN NIST_missions on NIST_missions.coID = NIST_impacts.coID
                                                    JOIN NIST_profiles on NIST_profiles .coID = NIST_missions.coID
                                                    JOIN NIST_CSF on NIST_impacts.FunctionID = NIST_CSF.functioncode
                                                                AND  NIST_impacts.CategoryID = NIST_CSF.categorycode
                                                    WHERE (NIST_impacts.coID  = '".$_SESSION['coID']."')
                                                    AND (NIST_impacts.".$rowValue2." = '1')
                                                    AND (NIST_impacts.FunctionID = '".$rowValue1."')
                                                    AND (NIST_impacts.DeptID  = '".$v['deptID']."')
                                                    GROUP BY NIST_impacts.id";

                                    $result = mysqli_query($con,$sql)
                                    or die("Query fail: " . mysqli_error($con));
                                    while ($row = mysqli_fetch_array($result)) {
                                        $id = $row['id'];
                                        $ImpactStmt = $row['ImpactStmt'];
                                        $Profile = $row['Profile'];
                                        $ProfileName = $row['ProfileName'];
                                        $MissionID = $row['MissionID'];
                                        $Mission = $row['mission'];
                                        $DeptID = $row['DeptID'];
                                        $TemplateID = $row['TemplateID'];
                                        $FunctionID = $row['FunctionID'];
                                        $CategoryID = $row['CategoryID'];
                                        $SubCatID = $row['SubCatID'];
                                        $subcategory = $row['subcategory'];
                                        $ProfileStartDate = $row['ProfileStartDate'];
                                        echo  PHP_EOL;
                                        echo '<tr>'. PHP_EOL;
                                        echo '<td class="nist-left" valign="top">' . $ProfileName . '</td>'. PHP_EOL;
                                        echo '<td class="nist-left" valign="top">' . $MissionID . ': ' .$Mission. '</td>'. PHP_EOL;
                                        echo '<td class="nist-left" valign="top">' . $FunctionID . '.' . $CategoryID . '-' . $SubCatID . ': ' . $subcategory. '</td>'. PHP_EOL;

                                        echo '<td class="nist-left" valign="top"><textarea rows="5" style="width:95%;background-color:transparent;border:0 solid transparent;"></textarea></td>'. PHP_EOL;

                                        echo'<td class="text-center" valign="top">
                                                                    <select id="" name="PeopleControlStatus" size="3">
                                                                        <option>Now</option>
                                                                        <option>Next</option>
                                                                        <option>Later</option>
                                                                    </select><br>
                                                                    <button type="submit" class="btn-info btn-sm">Update</button>
                                                                    ';
                                        echo '</td>'. PHP_EOL;
                                        echo '                                    </tr>'. PHP_EOL;
                                    }
                                }
                                $con->next_result();
                            }
                            ?>
                            </div>
                            </div>
                        <?php }?>
                    </table>
                </div>
                </div>
            </div>
        </div>

        <div class="row"><br><hr>
            <div class="box box-default collapsed-box box-solid margin " style="width:98%;">
                <div class="box-header">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-sticky-note"></i> Notes</button>
                </div>
                <div class="box-body">

                        <p class="text-left margin">
                This is the Roadmap Builder<br><br>
                We choose a departments target profile
                We define how we will get there...in terms of:

                a. Business Requirements are our Missions
                    Organizational Missions and Division or Department Goals
                    Legal/Regulatory Requirements
                b. Risk Tolerance (what we are willing to accept)
                    High Medium Low (Frequency vs. Severity)
                    Risk Management Priorities.
                c. Organizational Resources
                    Industry Best Practices,
                    Time, Money, and Enrollment.


                d. What are the controls I can afford
                - People
                - Process
                - Technologies
                - Ecosystem - see ISACA



                In terms of mitigating the risk (in terms of 3 levels)

                And how do I determine the MIL (consider the categories as a level of MIL as a Tier)
                Determined by the PPTE controls…



                An organizations leadership will develop a roadmap for reaching their target profile of the SubCategories of the NIST CSF to each Mission they listed in Our Business.<br><br>
                They will determine the People, Process, and Technology improvements that must occur to reach their desired target profile<br>
                <br>

                Roadmap items should align to each Mission and each NIST CSF SubCategory...<br>
                Priorities should be selected for each based on:<br>
                Likelihood, Impact and Risk Level<br>






            </p>
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
