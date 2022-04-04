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

<div>
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
                                <span><i class="fa fa-puzzle-piece"></i> <b><?php echo $companyname; ?>'s Profile Builder -</b> <em>Build Current and Target Profiles</em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<form method="POST" action="buildprofile.php">
        <div class="row">
            <div class="col-lg-2">
                <p class="nist-title">Profile Type
                <select id="Profile" name="Profile" size="2" style="width:100%;">
                    <option value="Current">Current</option>
                    <option value="Target">Target</option>
                </select>
                </p>
                <p class="nist-title">Select Missions
                    <select name="MissionID[]" size="<?php echo (count($missions[1])-1); ?> " style="width:100%;" multiple>
                        <?php
                        foreach ($missions as $v) {
                            ?>
                            <option value="<?php echo $v['mission_no']; ?>" title="<?php echo $v['mission_no'].": ".$v['mission']; ?>">
                                <?php echo $v['mission_no'].": ".$v['mission']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </p>
                <p class="nist-title">Select <?php echo $orgname; ?>
                    <select name="DeptID[]" size="<?php echo $deptsize; ?> " style="width:100%;" multiple>
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
                <p class="nist-title">Select Template
                <select name="TemplateID" size="1" style="width:100%;">
                    <option value="<?php echo $templateID; ?>">Template 1: Not Yet Specified</option>
                    <option value="<?php echo $templateID; ?>">Template 2: Not Yet Specified </option>
                    <option value="<?php echo $templateID; ?>">Template 3: Not Yet Specified </option>
                    <option value="<?php echo $templateID; ?>">Template 4: Not Yet Specified </option>
                    <option value="<?php echo $templateID; ?>">Template 5: Not Yet Specified </option>
                </select>
                </p>
<!--
- Business Requirements - Hi, Med, Lo
- Risk Tolerance  - Hi, Med, Lo
- Organization Resources - Hi, Med, Lo
 -->

                <p class="">- OR -</p>

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
                            <select name="SubCategoryID[]" size="6" multiple style="width:100%;">
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
                            <select name="SubCategoryID[]" size="5" multiple style="width:100%;">
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
                            <select name="SubCategoryID[]" size="4" multiple style="width:100%;">
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
                            <select name="SubCategoryID[]" size="6" multiple style="width:100%;">
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
                            <select name="SubCategoryID[]" size="5" multiple style="width:100%;">
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
                            <select name="SubCategoryID[]" size="8" multiple style="width:100%;">
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
                            <select name="SubCategoryID[]" size="5" multiple style="width:100%;">
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
                            <select name="SubCategoryID[]" size="5" multiple style="width:100%;">
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
                            <select name="SubCategoryID[]" size="5" multiple style="width:100%;">
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
                            <select name="SubCategoryID[]" size="5" multiple style="width:100%;">
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
                                <select name="SubCategoryID[]" size="5" multiple style="width:100%;">
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
                                <select name="SubCategoryID[]" size="8" multiple style="width:100%;">
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
                                <select name="SubCategoryID[]" size="5" multiple style="width:100%;">
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
                                <select name="SubCategoryID[]" size="1" multiple style="width:100%;">
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
                                <select name="SubCategoryID[]" size="5" multiple style="width:100%;">
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
                                <select name="SubCategoryID[]" size="4" multiple style="width:100%;">
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
                                <select name="SubCategoryID[]" size="3" multiple style="width:100%;">
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
                                <select name="SubCategoryID[]" size="2" multiple style="width:100%;">
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
                                <select name="SubCategoryID[]" size="1" multiple style="width:100%;">
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
                                <select name="SubCategoryID[]" size="2" multiple style="width:100%;">
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
                                <select name="SubCategoryID[]" size="3" multiple style="width:100%;">
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


        <div class="col-lg-2">
            <p class="nist-title">Current Level<br>
                <select name="MIL" size="7" style="width:100%;">
                    <option value="0">MIL 0: Incomplete</option>
                    <option value="1">MIL 1: Performed</option>
                    <option value="2">MIL 2: Planned</option>
                    <option value="3">MIL 3: Managed</option>
                    <option value="4">MIL 4: Measured</option>
                    <option value="5">MIL 5: Defined</option>
                    <option value="6">MIL 6: Shared</option>
                </select>
            </p>

            <script type="text/javascript">
                document.getElementById("Profile").onchange = function() {
                    document.getElementById("submitbtn").innerHTML = "Submit "+this.value+" Profile";
                    document.getElementById("submitbtn").style.display = "block";
                };
            </script>

            <p class="nist-title">Profile Name<br>
                <input id="profname" type="text" name="profname" value="" placeholder="" size="25" style="display:block;">
            </p>

            <p class="nist-title">Date <input size="50" name="ShowDate" type="text" value="<?php echo date("l, jS \of F, Y"); ?>" disabled style="background:transparent;border:0px;">
        <input type="hidden" name="ProfileStartDate" value="<?php echo date("Y-m-d"); ?>">
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
</div>
</form>

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
