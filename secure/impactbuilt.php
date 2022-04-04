<?php
$UID = $_REQUEST['md5'];
$DTG = $_REQUEST['dtg'];

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

<?php

if($con === false){die("ERROR: Could not connect. " . mysqli_connect_error());}

/** @var TYPE_NAME $SubCatID */

            $sql="SELECT *,NIST_missions.mission FROM NIST_impacts 
                  JOIN NIST_missions on  NIST_impacts.coID = NIST_missions.coID 
                  WHERE TransactionID = '".$UID."'";
            $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));

            while ($row = mysqli_fetch_array($result)){
                $MissionID= $row['MissionID'];
                $Mission = $row['mission'];

            $con->next_result();

}


        ?>


<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <div class="box-header">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <span><i class="fa fa-clock"></i> <b> Completed Impact for -  </b> <em><?php echo $MissionID.": " . $Mission; ?> </em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <?php echo $_SESSION['companyname'].' '. $_SESSION['orgname']; ?>

        <div class="box box-default">
            <div class="box-body">
                <?php foreach ($depts as $v) { ?>
                    <div class="box box-default box-solid margin " style="width:98%;">
                        <div class="box-header">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><?php echo $v['deptID'].": ".$v['deptname']; ?></button>
                        </div>
                        <div class="box-body">
                            <table width="100%" border="1">
                                <tr>
                                    <th class="td-nist-title" width="10%">Profile</th>
                                    <th class="td-nist-title" width="10%">Mission ID</th>
                                    <th class="td-nist-title" width="40%">NIST Objective</th>
                                    <th class="td-nist-title" width="39%">Impact Statement</th>
                                    <th class="td-nist-title" width="1%">Edit</th>
                                </tr>
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
                        AND (NIST_impacts.TransactionID = '".$UID."')
                        GROUP BY NIST_impacts.id";

                                    $result = mysqli_query($con,$sql)
                                    or die("Query fail: " . mysqli_error($con));
                                    while ($row = mysqli_fetch_array($result)) {
                                        $id = $row['id'];
                                        $coID = $row['coID'];
                                        $MemberID = $row['MemberID'];
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
                                        echo '                                    <tr>'. PHP_EOL;
                                        echo '<td class="nist-left" width=10% valign="top">' . $ProfileName . '</td>'. PHP_EOL;
                                        echo '<td class="nist-left" width=10% valign="top">' . $MissionID . ': ' .$Mission. '</td>'. PHP_EOL;
                                        echo '<td class="nist-left" width="40%" valign="top">' . $FunctionID . '.' . $CategoryID . '-' . $SubCatID . ': ' . $subcategory. '</td>'. PHP_EOL;

                                        if ($rowValue2 == "Low") {echo "<td class='nist-left' style='background-color:greenyellow' width='40%' valign='top'><b>" . $rowValue2. " Impact:</b><br>".$ImpactStmt . '</td>'. PHP_EOL;}
                                        if ($rowValue2 == "Med") {echo "<td class='nist-left' style='background-color:yellow' width='40%' valign='top'><b>" . $rowValue2. " Impact:</b><br>".$ImpactStmt . '</td>'. PHP_EOL;}
                                        if ($rowValue2 == "High") {echo "<td class='nist-left' style='background-color:orangered' width='40%' valign='top'><b>" . $rowValue2. " Impact:</b><br>".$ImpactStmt . '</td>'. PHP_EOL;}

                                        echo '<td class="text-center"><a href="editImpact.php" class="nist-link"><i class="fa fa-check-square"></i>&nbsp;</a></td>'. PHP_EOL;
                                        echo '                                    </tr>'. PHP_EOL;

                                    }
                                    }
                                    $con->next_result();
                                }
                                ?>
                                <script type="text/javascript">
                                    document.getElementById("coname").onfocus = function() {
                                        document.getElementById("conamebtn").innerHTML = "Change "+this.value;
                                        document.getElementById("coname").style.background = "yellow";
                                    }
                                    document.getElementById("coname").onfocusout = function() {
                                        document.getElementById("conamebtn").innerHTML = "Change "+this.value;
                                        document.getElementById("coname").style.background = "transparent";
                                    }
                                </script>
                            </table>
                        </div>
                    </div>

                <?php }?>

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

