<?php
require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<div lang="en">
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
                                <span><i class="fa fa-shield-alt"></i> <b>NIST CSF v1.1</b>: <em></em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="box collapsed-box box-solid">
                    <div class="box-header with-border"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Identify</button></div>
                    <?php
                    $result = mysqli_query($con, "select * from NIST_CSF WHERE functioncode = 'ID' ORDER BY id") or die("Query fail: " . mysqli_error($con));
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

                        if ($temp_functioncode != $csf_functioncode) {
                            echo '<div class="box-body">';
                        }

                        if ($temp_categorycode != $csf_categorycode) {
                            echo '<span class=nist-title"><br>' . $csf_category . '</span>';

                            if ($temp_subcategory != $csf_subcategory) {
                                echo '<span class="nist-desc"><br>' . $csf_categorytext . '</span>';
                            }
                        }

                        echo '<br><a class="nist-link" href="crosswalk.php?'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'</a> ';
                        echo '<span class="nist-left">' . $csf_subcategory . '</span>';

                        $temp_subcategory = $csf_subcategory;
                        $temp_categorycode = $csf_categorycode;
                        $temp_functioncode = $csf_functioncode;
                    }
                    $con->next_result();
    //                echo '<div class="pagebreak"> </div>';
                    ?>
                    </div>
                </div>
            </div>


            <div class="panel-body">
                <div class="box collapsed-box box-solid">
                    <div class="box-header with-border"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Protect</button></div>
                    <?php
                    $result = mysqli_query($con, "select * from NIST_CSF WHERE functioncode = 'PR' ORDER BY id") or die("Query fail: " . mysqli_error($con));
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

                        if ($temp_functioncode != $csf_functioncode) {
                            echo '<div class="box-body">';
                        }

                        if ($temp_categorycode != $csf_categorycode) {
                            echo '<span class=nist-title"><br>' . $csf_category . '</span>';

                            if ($temp_subcategory != $csf_subcategory) {
                                echo '<span class="nist-desc"><br>' . $csf_categorytext . '</span>';
                            }
                        }

                        echo '<br><a class="nist-link" href="crosswalk.php?'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'</a> ';
                        echo '<span class="nist-left">' . $csf_subcategory . '</span>';

                        $temp_subcategory = $csf_subcategory;
                        $temp_categorycode = $csf_categorycode;
                        $temp_functioncode = $csf_functioncode;
                    }
                    $con->next_result();
        //            echo '<div class="pagebreak"> </div>';
                    ?>
                </div>
            </div>
    </div>
            <div class="panel-body">
                <div class="box collapsed-box box-solid">
                    <div class="box-header with-border"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Detect</button></div>
                    <?php
                    $result = mysqli_query($con, "select * from NIST_CSF WHERE functioncode = 'DE' ORDER BY id") or die("Query fail: " . mysqli_error($con));
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

                        if ($temp_functioncode != $csf_functioncode) {
                            echo '<div class="box-body">';
                        }

                        if ($temp_categorycode != $csf_categorycode) {
                            echo '<span class=nist-title"><br>' . $csf_category . '</span>';

                            if ($temp_subcategory != $csf_subcategory) {
                                echo '<span class="nist-desc"><br>' . $csf_categorytext . '</span>';
                            }
                        }

                        echo '<br><a class="nist-link" href="crosswalk.php?'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'</a> ';
                        echo '<span class="nist-left">' . $csf_subcategory . '</span>';

                        $temp_subcategory = $csf_subcategory;
                        $temp_categorycode = $csf_categorycode;
                        $temp_functioncode = $csf_functioncode;
                    }
                    $con->next_result();
        //            echo '<div class="pagebreak"> </div>';
                    ?>
                </div>
            </div>
</div>

            <div class="panel-body">
                <div class="box collapsed-box box-solid">
                    <div class="box-header with-border"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Respond</button></div>
                    <?php
                    $result = mysqli_query($con, "select * from NIST_CSF WHERE functioncode = 'RS' ORDER BY id") or die("Query fail: " . mysqli_error($con));
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

                        if ($temp_functioncode != $csf_functioncode) {

                            echo '<div class="box-body">';
        //                            echo '<span class="nist-title">' . $csf_function . '</span>';
                        }

                        if ($temp_categorycode != $csf_categorycode) {
                            echo '<span class=nist-title"><br>' . $csf_category . '</span>';

                            if ($temp_subcategory != $csf_subcategory) {
                                echo '<span class="nist-desc"><br>' . $csf_categorytext . '</span>';
                            }
                        }

                        echo '<br><a class="nist-link" href="crosswalk.php?'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'</a> ';
                        echo '<span class="nist-left">' . $csf_subcategory . '</span>';


                        $temp_subcategory = $csf_subcategory;
                        $temp_categorycode = $csf_categorycode;
                        $temp_functioncode = $csf_functioncode;

                    }
                    $con->next_result();
                    //                    echo '<div class="pagebreak"> </div>';
                    ?>
                </div>
            </div>
</div>

            <div class="panel-body">
                <div class="box collapsed-box box-solid">
                    <div class="box-header with-border"><button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> Recover</button></div>
                    <?php
                    $result = mysqli_query($con, "select * from NIST_CSF WHERE functioncode = 'RC' ORDER BY id") or die("Query fail: " . mysqli_error($con));
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

                        if ($temp_functioncode != $csf_functioncode) {

                            echo '<div class="box-body">';
                        }

                        if ($temp_categorycode != $csf_categorycode) {
                            echo '<span class=nist-title"><br>' . $csf_category . '</span>';

                            if ($temp_subcategory != $csf_subcategory) {
                                echo '<span class="nist-desc"><br>' . $csf_categorytext . '</span>';
                            }
                        }

                        echo '<br><a class="nist-link" href="crosswalk.php?'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'">'.$csf_functioncode.'.'.$csf_categorycode.'-'.$csf_number.'</a> ';
                        echo '<span class="nist-left">' . $csf_subcategory . '</span>';

                        $temp_subcategory = $csf_subcategory;
                        $temp_categorycode = $csf_categorycode;
                        $temp_functioncode = $csf_functioncode;
                    }
                    $con->next_result();
        //            echo '<div class="pagebreak"> </div>';
                    ?>
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