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
                        <span><i class="fa fa-users"></i> <b>Members -</b> <em>These are the people who will help us get there</em></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <p class="nist-title"><?php echo $orgname; ?>:</br>
                <select size="<?php echo $deptsize; ?> " style="width:100%;">
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
        <div class="col-lg-3">
            <p class="nist-title">Members:</br>
                <select size="<?php echo $membersize; ?> " style="width:100%;">
                    <?php
                    foreach ($members as $v) {
                        ?>
                        <option value="<?php echo $v['memberID']; ?>">
                            <?php echo $v['lname'].", ".$v['fname']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </p>
        </div>
        <div class="col-lg-3">
            <p class="nist-title">Role:</br>
                <select size="5" style="width:100%;">
                    <option value="">Role 1 </option>
                    <option value="">Role 2 </option>
                    <option value="">Role 3 </option>
                    <option value="">Role 4 </option>
                    <option value="">Role 5 </option>
                </select>
            </p>
        </div>
        <div class="col-lg-3">
            <form method="" action="">
                <button type="submit" class="btn-default btn-sm">Set Member</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <hr>
            <p class="text-left margin">
            This is where the users can assign members and roles to the profiles and roadmaps.<br><br>
            Ideally, an organization will specify these roles across the various departments in terms of</br>
            - Executive,</br>
            - Business/Process, and </br>
            - Implementation/Operation.

            </p>
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