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
                                <span><i class="fa fa-book"></i> <b>Support -</b> <em>What Is Our Support</em></span>
                            </div>
                        </div>
                    </div>
                    <p class="text-left margin">
                        These are the organizations supporting documents.<br><br>
                        Ideally, a dropbox...

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