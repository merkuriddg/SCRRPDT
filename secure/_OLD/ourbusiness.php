
<div id="ourbusiness" class="tab-pane ">
    <div class="box-header">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-lg-12">
                        <div><i class="fa fa-building"></i> <b>We are <?php echo $companyname; ?> -</b> <em>This defines Who We Are</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <p class="nist-title">Our Missions:
                    <select size="<?php echo (count($missions[1])-1); ?> " style="width:100%;">
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
            <div class="col-lg-6">
            <p class="nist-title">
                Our <?php echo $orgname; ?>:
                <?php
                $dept_count = count($dept_array);
                $dept=implode(",",$dept_array);
                $dept = explode(',', $dept);
                echo "  <select size=\"$dept_count\" style=\"width:100%;\">".PHP_EOL;

                for ($x = 0; $x < $dept_count; $x++) {
                  echo '<option value="'.$dept[$x].'">'.$dept[$x].'</option>'.PHP_EOL;
                }
                echo "</select>".PHP_EOL;
                ?>
            </p>

            <p class="nist-title">Members:</br>
                <select size="5" style="width:100%;">
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
        <div class="row">
            <div class="col-lg-12"><hr>
                <p class="text-left margin">
                    These are our Missions, or Why Our Business Exists, in terms of.</br>
                    - Business Requirements,</br>
                    - Risk Tolerance,</br>
                    - Organization Resources</br>
                    These Missions define which Sub-Categories of the NIST CSF we will use to evaluate our Current and Target Profiles.</br>
                    Additionally, the organization will define the different departments here for their organization.<br><br>
                    These can be changed in <a href="#settings">Settings</a>.</p>
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
-->