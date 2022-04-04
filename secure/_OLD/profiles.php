<?php
require_once('../includes/config.php');
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
<?php include('check_first_login.php'); ?>
<?php include('menu.php'); ?>

<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <div class="box-header">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-lg-6">
                        <span><i class="fa fa-clock"></i> <b>Current Profiles -</b> <em> This is Where We Are</em></span>
                    </div>
                    <div class="col-lg-6">
                        <span><i class="fa fa-bullseye"></i> <b>Target Profiles -</b> <em> This is Where We We Are Going</em></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- ################################################################################################################################################ -->
                <!-- Departmental Listings################################################################################################################################################ -->
                <!-- ################################################################################################################################################ -->
                <div class="box box-default collapsed-box">
                    <div class="box-header">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> <?php echo $orgname; ?></button>
                    </div>
                    <div class="box-body">

                        <?php
                        foreach ($depts as $v) {
                            ?>

                        <div class="box box-default collapsed-box box-solid margin ">
                            <div class="box-header with-border">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> <?php echo $v['deptID'].": ".$v['deptname']; ?></button>
                            </div>
                            <div class="box-body">
                                <table width="100%" border="1">
                                    <tr>
                                        <th class="td-nist-title" width="60%">NIST Objective</th>
                                        <th class="td-nist-title" width="20%">Something Here</th>
                                        <th class="td-nist-title-center" width="10%">Start Date</th>
                                        <th class="td-nist-title-center" width="5%">NIST Tier</th>
                                        <th class="td-nist-title-center" width="5%">MIL</th>
                                    </tr>
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

                                        echo '<tr><td class="nist-left" width="60%">';
                                        echo $csf_functioncode . '.' . $csf_categorycode . '-' . $csf_number . ': '. $csf_subcategory .'</td>';
                                        echo '    <td class="nist-left" width=20%>notes here</td>';
                                        echo '    <td class="nist-left nist-center" width="10%">' . date('m-d-Y') . '</td>';
                                        echo '    <td class="nist-left nist-center" width="5%">1</td>';
                                        echo '    <td class="nist-left nist-center" width="5%">0</td></tr>';
                                    }
                                    $con->next_result();
                                    ?>
                                </table>
                            </div>
                        </div>

<?php }?>

                    </div>
                </div>


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