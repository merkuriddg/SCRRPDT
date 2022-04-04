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


<script type="text/javascript">

    function validateForm() {
        var m = document.forms["impact"]["MissionID"].value;
        var d = document.forms["impact"]["DeptID"].value;
        var low = document.forms["impact"]["low"].value;
        var med = document.forms["impact"]["med"].value;
        var high = document.forms["impact"]["high"].value;


        if($("input[name='checkboxes[]']:checked").length > 0)) {
        alert("At least 1 checkbox checked!");
    }


        if (m == "") {
            alert("Select at least one Mission!");
            return false;
        }
        if (d == "") {
            alert("Select at least one Dept!");
            return false;
        }
        if (low <> "1" AND  med == "" AND high == "") {
            alert("Select at least one Impact Level!");
            return false;
        }
    }
</script>

<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <div class="box-header">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <span><i class="fa fa-user-injured"></i> <b><?php echo $companyname; ?>'s Impact Builder -</b> <em>This is What Might Happen If We Don't Meet our Targets</em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="box-header">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="panel-sm panel-default">
                                    <div class="panel-heading" style="background-color:lightgray">
                                        <div class="row">
                                            <div class="col-xs-3 text-center">
                                                <span><i class="fa fa-thermometer-empty fa-4x"></i><br><b>Low Impact </b> </span><br>
                                            </div>
                                            <div class="col-xs-9 text-left">
                                                <em>The potential impact is LOW if the loss of integrity, availability, or confidentiality could be expected to have a <u>limited</u> adverse effect on
                                                    operations, products, assets, brand image, finances, personnel, the general public, or the environment.</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="panel-sm panel-default">
                                    <div class="panel-heading" style="background-color:darkgray">
                                        <div class="row">
                                            <div class="col-xs-3 text-center">
                                                <span><i class="fa fa-thermometer-half fa-4x"></i><br><b>Moderate Impact </b> </span><br>
                                            </div>
                                            <div class="col-xs-9 text-left">
                                                <em>The potential impact is MODERATE if the loss of integrity, availability, or confidentiality could be expected to have a <u>serious </u> adverse effect on
                                                    operations, products, assets, brand image, finances, personnel, the general public, or the environment.</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="panel-sm panel-default">
                                    <div class="panel-heading" style="background-color:dimgray">
                                        <div class="row">
                                            <div class="col-xs-3 text-center">
                                                <span><i class="fa fa-thermometer-full fa-4x"></i><br><b>High Impact </b> </span><br>
                                            </div>
                                            <div class="col-xs-9 text-left" style="color:silver;">
                                                <em>The potential impact is HIGH if the loss of integrity, availability, or confidentiality could be expected to have a <u>severe or catastrophic</u> adverse effect on
                                                    operations, products, assets, brand image, finances, personnel, the general public, or the environment.</em>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        <form method="POST" action="buildimpact.php" id="imapct" name="impact" onsubmit="return validateForm()">
            <div class="row">
                <div class="col-lg-3">
                    <p class="nist-title">Select Missions
                        <select id="MissionID" name="MissionID" size="<?php echo (count($missions[1])-1); ?> " style="width:100%;">
                            <?php
                            foreach ($missions as $v) {
                                ?>
                                <option value="<?php echo $v['mission_no']; ?>" data-id="<?php echo $v['mission']; ?>" title="<?php echo $v['mission_no'].": ".$v['mission']; ?>">
                                    <?php echo $v['mission_no'].": ".$v['mission']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </p>
                    <p class="nist-title">Select <?php echo $orgname; ?>
                        <select name="DeptID" size="<?php echo $deptsize; ?> " style="width:100%;">
                            <?php
                            foreach ($depts as $v) {
                                ?>
                                <option value="<?php echo $v['deptID']; ?>" title="<?php echo $v['deptID'].": ".$v['deptname']; ?>">
                                    <?php echo $v['deptID'].": ".$v['deptname']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </p>
                </div>
                <div class="col-lg-6">

                    <p class="nist-title">Select SubCategories</p>
                    <!-- ################################################################################################################################################ -->
                    <!-- IDENTIFY################################################################################################################################################ -->
                    <!-- ################################################################################################################################################ -->
                    <div class="box box-default collapsed-box">
                        <div class="box-header">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"> Identify</button>
                        </div>
                        <div class="box-body">

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Asset Management</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="6" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'ID' AND categorycode = 'AM' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];


                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Business Environment</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="5" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'ID' AND categorycode = 'BE' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Governance</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="4" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'ID' AND categorycode = 'GV' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Risk Assessment</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="6" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'ID' AND categorycode = 'RA' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- ################################################################################################################################################ -->
                    <!-- PROTECT################################################################################################################################################ -->
                    <!-- ################################################################################################################################################ -->
                    <div class="box box-default collapsed-box">
                        <div class="box-header">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"> Protect</button>
                        </div>
                        <div class="box-body">

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Identity Management, Authentication and Access Control</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="5" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'PR' AND categorycode = 'AC' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Awareness and Training</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="8" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'PR' AND categorycode = 'AT' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];


                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Data Security</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="5" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'PR' AND categorycode = 'DS' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="Tooltip">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Information Protection Processes and Procedures</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="5" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'PR' AND categorycode = 'IP' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="Tooltip">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Maintenance</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="5" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'PR' AND categorycode = 'MA' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="Tooltip">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Protective Technology</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="5" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'PR' AND categorycode = 'PT' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="Tooltip">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- ################################################################################################################################################ -->
                    <!-- DETECT################################################################################################################################################ -->
                    <!-- ################################################################################################################################################ -->
                    <div class="box box-default collapsed-box">
                        <div class="box-header">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"> Detect</button>
                        </div>
                        <div class="box-body">

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Anomalies and Events</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="5" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'DE' AND categorycode = 'AE' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Security Continuous Monitoring</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="8" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'DE' AND categorycode = 'CM' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Detection Processes</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="5" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'DE' AND categorycode = 'DP' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ################################################################################################################################################ -->
                    <!-- RESPOND################################################################################################################################################ -->
                    <!-- ################################################################################################################################################ -->
                    <div class="box box-default collapsed-box">
                        <div class="box-header">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"> Respond
                            </button>
                        </div>
                        <div class="box-body">

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Response Planning</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="2" style="width:100%;">
                                        <option value=""></option>
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'RS' AND categorycode = 'RP' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Communications</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="5" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'RS' AND categorycode = 'CO' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Analysis</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="4" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'RS' AND categorycode = 'AN' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Mitigation</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="3" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'RS' AND categorycode = 'MI' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Improvements</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="2" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'RS' AND categorycode = 'IM' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- ################################################################################################################################################ -->
                    <!-- RECOVER################################################################################################################################################ -->
                    <!-- ################################################################################################################################################ -->
                    <div class="box box-default collapsed-box">
                        <div class="box-header">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"> Recover</button>
                        </div>
                        <div class="box-body">
                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Recovery Planning</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="2" style="width:100%;">
                                        <option value=""></option>
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'RC' AND categorycode = 'RP' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Improvements</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="2" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'RC' AND categorycode = 'IM' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="box box-default collapsed-box box-solid margin " style="width:96%;">
                                <div class="box-header">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"> Communications</button>
                                </div>
                                <div class="box-body">
                                    <select name="SubCategoryID[]" size="3" style="width:100%;">
                                        <?php
                                        $result = mysqli_query($con,
                                            "select * from NIST_CSF WHERE functioncode = 'RC' AND categorycode = 'CO' ")
                                        or die("Query fail: " . mysqli_error($con));
                                        while ($row = mysqli_fetch_array($result)){
                                            $csf_id = $row['id'];
                                            $csf_function = $row['function'];
                                            $csf_functiontext = $row['functiontext'];
                                            $csf_functioncode = $row['functioncode'];
                                            $csf_category = $row['category'];
                                            $csf_categorytext = $row['categorytext'];
                                            $csf_categorycode = $row['categorycode'];
                                            $csf_subcategory = $row['subcategory'];
                                            $csf_number = $row['number'];

                                            echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory .'">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                        }
                                        $con->next_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- ################################################################################################################################################ -->
                <!-- ################################################################################################################################################ -->
                <!-- ################################################################################################################################################ -->


                <div class="col-lg-3">

                    <!--
                    - Business Requirements - Hi, Med, Lo
                    - Risk Tolerance  - Hi, Med, Lo
                    - Organization Resources - Hi, Med, Lo
                     -->
                    <p class="nist-title">Select SubCategories</p>
                    <div class="box box-default ">
                        <div class="box-header" style="color:black;">
                            <input type="checkbox" id="low" name="checkboxes[]" value="low"> <i class="fa fa-thermometer-empty"></i> Low Impact<br>
                            <input type="checkbox" id="med" name="checkboxes[]" value="med"> <i class="fa fa-thermometer-half"></i> Moderate Impact<br>
                            <input type="checkbox" id="high" name="checkboxes[]" value="high"> <i class="fa fa-thermometer-full"></i> High Impact<br>
                            <textarea rows="10" id="ImpactStmt" name="ImpactStmt"></textarea>
                        </div>
                    </div>


                    <script type="text/javascript">
                        document.getElementById("ImpactStmt").onfocus = function() {
                            document.getElementById("ImpactStmt").style.background = "silver";
                        }
                        document.getElementById("ImpactStmt").onfocusout = function() {
                            document.getElementById("ImpactStmt").style.background = "transparent";
                        }
                    </script>




                    <script type="text/javascript">
                        document.getElementById("MissionID").onchange = function() {
                            document.getElementById("submitbtn").innerHTML = "Submit Impact for "+$(this).find(':selected').data('id');
                            document.getElementById("submitbtn").style.display = "block";
                        };
                    </script>

                    <p class="nist-title">Date <input size="50" name="ShowDate" type="text" value="<?php echo date("l, jS \of F, Y"); ?>" disabled style="background:transparent;border:0px;">
                        <input type="hidden" name="ImpactStartDate" value="<?php echo date("Y-m-d"); ?>">
                    </p>

                    <p>
                        <button id="submitbtn" type="submit" class="btn-info btn-sm" style="display:none;">Submit</button>
                    </p>
                </div>
            </div>
        </form>

    <div class="row"><br><hr>
        <div class="box box-default collapsed-box box-solid margin " style="width:98%;">
            <div class="box-header">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-sticky-note"></i> Notes</button>
            </div>
            <div class="box-body">
            <p class="text-left margin">
                These are our current profile assessments.<br><br>
                An organizations leadership will align the 98 SubCategories of the NIST CSF to each Mission they listed in Our Business.<br><br>
                They will then assess each of those SubCategories with some level of maturity for each department or program within their organization as listed in Our Business.
            </p>
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
