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
                        <span><i class="fa fa-clock"></i> <b><?php echo $companyname; ?>'s Target Profiles -</b> <em> This is Where We Want to Go</em></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php echo($companyname.' '. $orgname); ?>

                <div class="box box-default">
                    <div class="box-body">
                        <?php foreach ($depts as $v) { ?>
                        <div class="box box-default collapsed-box box-solid margin " style="width:98%;">
                            <div class="box-header">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><?php echo $v['deptID'].": ".$v['deptname']; ?></button>
                            </div>
                            <div class="box-body">
                                <table width="100%" border="1">
                                    <tr>
                                        <th class="td-nist-title" width="5%">Profile</th>
                                        <th class="td-nist-title" width="20%">Mission ID</th>
                                        <th class="td-nist-title" width="60%">NIST Objective</th>
                                        <th class="td-nist-title-center" width="5%">Start</th>
                                        <th class="td-nist-title-center" width="5%">End</th>
                                        <th class="td-nist-title-center" width="5%">Member</th>
                                        <th class="td-nist-title-center" width="5%">MIL</th>
                                        <th class="td-nist-title-center" width="5%">Edit</th>
                                    </tr>
                                    <?php
                                    $Functions = array("ID", "PR", "DE", "RC", "RS");
                                    foreach ($Functions as $rowValue1) {

                                    $sql="SELECT NIST_profiles.id, ProfileName, MissionID, FunctionID, CategoryID, SubCatID, ProfileStartDate, MIL, NIST_CSF.functiontext,NIST_CSF.categorytext, NIST_CSF.subcategory, NIST_missions.mission
                                    FROM NIST_profiles
                                    JOIN NIST_missions on NIST_missions.coID = NIST_profiles.coID 
                                    JOIN NIST_CSF on NIST_profiles.FunctionID = NIST_CSF.functioncode
                                    AND  NIST_profiles.CategoryID = NIST_CSF.categorycode
                                    WHERE (NIST_profiles.coID = '".$_SESSION['coID']."')
                                    AND (NIST_profiles.Profile = 'Target')
                                    AND (NIST_profiles.FunctionID = '".$rowValue1."')
                                    AND (NIST_profiles.DeptID = '".$v['deptID']."')
                                    GROUP BY NIST_profiles.id";

                                        $result = mysqli_query($con,$sql)
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)) {
                                            $id = $row['id'];
                                            $coID = $row['coID'];
                                            $MemberID = $row['MemberID'];
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
                                            $MIL = $row['MIL'];
                                            $ProfileStartDate = $row['ProfileStartDate'];
                                            echo  PHP_EOL;
                                            echo '<tr>'. PHP_EOL;
                                            echo '<td class="nist-left" width=10%>' . $ProfileName . '</td>'. PHP_EOL;
                                            echo '<td class="nist-left" width=20%>' . $MissionID . ': ' .$Mission. '</td>'. PHP_EOL;
                                            echo '<td class="nist-left" width="60%">' . $FunctionID . '.' . $CategoryID . '-' . $SubCatID . ': ' . $subcategory. '</td>'. PHP_EOL;
                                            echo '<td class="nist-left nist-center" width="5%">' . $ProfileStartDate . '</td>'. PHP_EOL;
                                            echo '<td class="nist-left nist-center" width="5%">' . $ProposedEndDate . '</td>'. PHP_EOL;
                                            echo '<td class="nist-left nist-center" width="5%"><select size="1">';

                                            for ($row = 0; $row < 4; $row++) {
                                                echo "<option value=".$users[$col][1].">";
                                                echo $users[$row][0];
                                                echo "</option>";
                                            };

                                            echo '</select></td>'. PHP_EOL;



                                            echo '<td class="nist-left nist-center" width="5%"><select size="1">';

                                            for ($i = 0; $i <= 6;$i++)
                                            {
                                                echo "<option";
                                                if ($MIL == $i) { echo " selected>".$MIL;
                                                }
                                                else
                                                echo ">" . $i . "</option>";
                                            }
                                            echo '</select></td>'. PHP_EOL;

                                            echo '<td class="nist-left nist-center" width="5%">';
                                            echo '<a href="editprofileitem.php?id='.$id.'&pt=t&f='.$FunctionID.'&c='.$CategoryID.'&s='.$SubCatID.'&mid='.$MissionID.'" class="nist-link"><i class="fa fa-edit"></i></a>';
                                            echo '</td>'. PHP_EOL;
                                            echo '</tr>'. PHP_EOL;

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
                <div class="row"><br><hr>
                    <div class="box box-default collapsed-box box-solid margin " style="width:98%;">
                        <div class="box-header">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-sticky-note"></i> Notes</button>
                        </div>
                        <div class="box-body">
                <p class="text-left margin">
                    These are our target profile assessments.<br><br>
                    An organizations leadership will align the 98 SubCategories of the NIST CSF to each Mission they listed in Our Business.<br><br>
                    They will then assess each of those SubCategories with some level of maturity for each department or program within their organization as listed in Our Business.

                </p>
            </div>
        </div>
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