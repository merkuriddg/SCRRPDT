<div id="profilebuilder" class="tab-pane ">
    <div class="box-header">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-lg-12">
                        <span><i class="fa fa-puzzle-piece"></i> <b>Profile Builder -</b> <em>Build Current and Target Profiles</em></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <p class="nist-title">Profile Type:
                <select name="milID" size="2" style="width:100%;">
                    <option value="current">Current</option>
                    <option value="target">Target</option>
                </select>
                </p>
                <p class="nist-title">Select Missions:
                    <select size="<?php echo (count($missions[1])-1); ?> " style="width:100%;" multiple>
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
                <p class="nist-title">Select Departments:
                    <select size="<?php echo $deptsize; ?> " style="width:100%;" multiple>
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
                <p class="nist-title">Select Template:
                <select name="DeptID" size="5" style="width:100%;" multiple>
                    <option value="<?php echo $templateID; ?>">Template 1: </option>
                    <option value="<?php echo $templateID; ?>">Template 2: </option>
                    <option value="<?php echo $templateID; ?>">Template 3: </option>
                    <option value="<?php echo $templateID; ?>">Template 4: </option>
                    <option value="<?php echo $templateID; ?>">Template 5: </option>
                </select>
                </p>
<!--
- Business Requirements - Hi, Med, Lo
- Risk Tolerance  - Hi, Med, Lo
- Organization Resources - Hi, Med, Lo
 -->

                <p class="">- OR -</p>

                <p class="nist-title">Select SubCategories:</p>
                <!-- ################################################################################################################################################ -->
                <!-- IDENTIFY################################################################################################################################################ -->
                <!-- ################################################################################################################################################ -->
                <div class="box box-default collapsed-box">
                    <div class="box-header">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Identify</button>
                    </div>
                    <div class="box-body">

                        <div class="box box-default collapsed-box box-solid margin ">
                            <div class="box-header with-border">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Asset Management</button>
                            </div>
                        <div class="box-body">
                            <select name="SubCategoryID" size="6" multiple style="width:100%;">
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


                                    echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                }
                                $con->next_result();
                                ?>
                            </select>
                        </div>
                    </div>


                    <div class="box box-default collapsed-box box-solid margin">
                        <div class="box-header with-border">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Business Environment</button>
                        </div>
                        <div class="box-body">
                            <select name="SubCategoryID" size="5" multiple style="width:100%;">
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

                                    echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                }
                                $con->next_result();
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="box box-default collapsed-box box-solid margin">
                        <div class="box-header with-border">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Governance</button>
                        </div>
                        <div class="box-body">
                            <select name="SubCategoryID" size="4" multiple style="width:100%;">
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

                                    echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                }
                                $con->next_result();
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="box box-default collapsed-box box-solid margin">
                        <div class="box-header with-border">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Risk Assessment</button>
                        </div>
                        <div class="box-body">
                            <select name="SubCategoryID" size="6" multiple style="width:100%;">
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

                                    echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
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
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Protect</button>
                    </div>
                    <div class="box-body">

                    <div class="box box-default collapsed-box box-solid margin">
                        <div class="box-header with-border">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Identity Management, Authentication and Access Control</button>
                        </div>
                        <div class="box-body">
                            <select name="SC_DE_AE" size="5" multiple style="width:100%;">
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

                                    echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                }
                                $con->next_result();
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="box box-default collapsed-box box-solid margin">
                        <div class="box-header with-border">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Awareness and Training</button>
                        </div>
                        <div class="box-body">
                            <select name="SC_DE_CM" size="8" multiple style="width:100%;">
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


                                    echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                }
                                $con->next_result();
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="box box-default collapsed-box box-solid margin">
                        <div class="box-header with-border">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Data Security</button>
                        </div>
                        <div class="box-body">
                            <select name="SC_DE_DP" size="5" multiple style="width:100%;">
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

                    <div class="box box-default collapsed-box box-solid margin">
                        <div class="box-header with-border">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Information Protection Processes and Procedures</button>
                        </div>
                        <div class="box-body">
                            <select name="SC_DE_DP" size="5" multiple style="width:100%;">
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

                    <div class="box box-default collapsed-box box-solid margin">
                        <div class="box-header with-border">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Maintenance</button>
                        </div>
                        <div class="box-body">
                            <select name="SC_DE_DP" size="5" multiple style="width:100%;">
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

                    <div class="box box-default collapsed-box box-solid margin">
                        <div class="box-header with-border">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Protective Technology</button>
                        </div>
                        <div class="box-body">
                            <select name="SC_DE_DP" size="5" multiple style="width:100%;">
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
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Detect</button>
                    </div>
                    <div class="box-body">

                        <div class="box box-default collapsed-box box-solid margin">
                            <div class="box-header with-border">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Anomalies and Events</button>
                            </div>
                            <div class="box-body">
                                <select name="SC_DE_AE" size="5" multiple style="width:100%;">
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

                                        echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                    }
                                    $con->next_result();
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="box box-default collapsed-box box-solid margin">
                            <div class="box-header with-border">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Security Continuous Monitoring</button>
                            </div>
                            <div class="box-body">
                                <select name="SC_DE_CM" size="8" multiple style="width:100%;">
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

                                        echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                    }
                                    $con->next_result();
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="box box-default collapsed-box box-solid margin">
                            <div class="box-header with-border">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Detection Processes</button>
                            </div>
                            <div class="box-body">
                                <select name="SC_DE_DP" size="5" multiple style="width:100%;">
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
                <!-- RESPOND################################################################################################################################################ -->
                <!-- ################################################################################################################################################ -->
                <div class="box box-default collapsed-box">
                    <div class="box-header">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Respond
                        </button>
                    </div>
                    <div class="box-body">

                        <div class="box box-default collapsed-box box-solid margin">
                            <div class="box-header with-border">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Response Planning</button>
                            </div>
                            <div class="box-body">
                                <select name="SC_RS_RP" size="1" multiple style="width:100%;">
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

                                        echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                    }
                                    $con->next_result();
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="box box-default collapsed-box box-solid margin">
                            <div class="box-header with-border">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Communications</button>
                            </div>
                            <div class="box-body">
                                <select name="SC_RS_CO" size="5" multiple style="width:100%;">
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

                                        echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                    }
                                    $con->next_result();
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="box box-default collapsed-box box-solid margin">
                            <div class="box-header with-border">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Analysis</button>
                            </div>
                            <div class="box-body">
                                <select name="SC_RS_AN" size="4" multiple style="width:100%;">
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

                                        echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="Tooltip">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                    }
                                    $con->next_result();
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="box box-default collapsed-box box-solid margin">
                            <div class="box-header with-border">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Mitigation</button>
                            </div>
                            <div class="box-body">
                                <select name="SC_RS_MI" size="3" multiple style="width:100%;">
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

                                        echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="Tooltip">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                    }
                                    $con->next_result();
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="box box-default collapsed-box box-solid margin">
                            <div class="box-header with-border">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Improvements</button>
                            </div>
                            <div class="box-body">
                                <select name="SC_RS_IM" size="2" multiple style="width:100%;">
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
                <!-- RECOVER################################################################################################################################################ -->
                <!-- ################################################################################################################################################ -->
                <div class="box box-default collapsed-box">
                    <div class="box-header">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Recover</button>
                    </div>
                    <div class="box-body">

                        <div class="box box-default collapsed-box box-solid margin">
                            <div class="box-header with-border">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Recovery Planning</button>
                            </div>
                            <div class="box-body">
                                <select name="SC_RC_RP" size="1" multiple style="width:100%;">
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

                                        echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                    }
                                    $con->next_result();
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="box box-default collapsed-box box-solid margin">
                            <div class="box-header with-border">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Improvements</button>
                            </div>
                            <div class="box-body">
                                <select name="SC_RC_IM" size="2" multiple style="width:100%;">
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

                                        echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
                                    }
                                    $con->next_result();
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="box box-default collapsed-box box-solid margin">
                            <div class="box-header with-border">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Communications</button>
                            </div>
                            <div class="box-body">
                                <select name="SC_RC_CO" size="3" multiple style="width:100%;">
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

                                        echo '<option value="'.$csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . '" title="Tooltip">' .$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number .': '. $csf_subcategory . '</option>';
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
            <p class="nist-title">Current Level:</br>
            <select name="milID" size="7" style="width:100%;">
                <option value="<?php echo $mil0; ?>">MIL 0: Incomplete</option>
                <option value="<?php echo $mil1; ?>">MIL 1: Performed</option>
                <option value="<?php echo $mil2; ?>">MIL 2: Planned</option>
                <option value="<?php echo $mil3; ?>">MIL 3: Managed</option>
                <option value="<?php echo $mil4; ?>">MIL 4: Measured</option>
                <option value="<?php echo $mil5; ?>">MIL 5: Defined</option>
                <option value="<?php echo $mil6; ?>">MIL 6: Shared</option>
            </select>
            </p>
            <p class="nist-title">


                <script type="text/javascript">
                    $( function() {
                        $( "#datepicker" ).datepicker();
                    } );
                </script>
                </head>
            <body>

            Date: <div id="datepicker"></div>

            <br>
                <br>
            <button type="submit" class="btn-default btn-sm">Submit Profile</button>
            </p>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <p class="text-left margin">
                    These are our current profile assessments.<br><br>
                    An organizations leadership will align the 98 SubCategories of the NIST CSF to each Mission they listed in Our Business.<br><br>
                    They will then assess each of those SubCategories with some level of maturity for each department or program within their organization as listed in Our Business.
                </p>
            </div>
        </div>
    </div>
</div>


