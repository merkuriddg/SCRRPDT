<?php
require_once('../includes/config.php');
include('logged_in.php');
?>

<!DOCTYPE html>
<html>
<head>
    <?php include('head.php'); ?>    
</head>

<body class="hold-transition skin-blue sidebar-mini" onload="startTime()">
    
    <!-- Set Date: -->
<?php include('set_date.php'); ?>
<?php include('get_member_info.php'); ?>
                                                 
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <?php include('top_logo.php'); ?>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

        
        
      <div class="navbar-custom-menu">
          <!-- Messages: style can be found in dropdown.less-->
        <ul class="nav navbar-nav">

            <!-- top menu: includes all sub menus - style can be found in dropdown.less -->
            <?php include('top_menu.php'); ?>            

          <!-- Logout Button -->
          <li>
            <a href="../login/logout.php"><i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                  <img src="../dist/img/<?php echo $_SESSION['member_img']; ?>" class="img-circle" alt="Image of <?php echo $_SESSION['member_name']; ?>">
                </div>
                <div class="pull-left info">
                    <p><?php echo $_SESSION['member_name']; ?></p>
                    <a href="#"><i fa-circle-o></i> online</a>
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
                  <?php include('left_menu.php'); ?>
            </ul>
        </section>
    </aside> 
        
    <div class="content-wrapper">
        <section class="content-header">
            <h1>FullView </h1>
        </section>
      
    <section class="content">
        <div class="row">
                <div class="col-lg-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Dashboard" data-toggle="tab">Dashboard</a>
                            </li>
                            <li><a href="#Offenses" data-toggle="tab">Offenses</a>
                            </li>
                            <li><a href="#Logs" data-toggle="tab">Log Activity</a>
                            </li>
                            <li><a href="#Network" data-toggle="tab">Network Activity</a>
                            </li>
                            <li><a href="#Assets" data-toggle="tab">Assets</a>
                            </li>
                            <li><a href="#Reports" data-toggle="tab">Reports</a>
                            </li>
                            <li><a href="#Risks" data-toggle="tab">Risks</a>
                            </li>
                            <li><a href="#Users" data-toggle="tab">User Analytics</a>
                            </li>
                            <li><a href="#Vulns" data-toggle="tab">Vulnerabilities</a>
                            </li>

                        </ul>
<!-- ############################################################################################################################ -->
<!-- ############################################################################################################################ -->

                            <div class="tab-content">
                                <div id="Dashboard" class="tab-pane active">
                                <!-- #################################################### -->
                                <!-- Security News -->
                                <div class="col-lg-3 col-md-3" style="text-align:center;padding:0em 0;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-bell fa-fw"></i> Security News
                                    </div>
                                    <div class="panel-body">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-comment fa-fw"></i> New Comment
                                                <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                                </span>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                                <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                                </span>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                                <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                                </span>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-tasks fa-fw"></i> New Task
                                                <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                                </span>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                                <span class="pull-right text-muted small"><em>11:32 AM</em>
                                                </span>
                                            </a>
                                        </div>
                                        <!-- /.list-group -->
                                        <a href="#" class="btn btn-default btn-block">View All News</a>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                </div>
                                <!-- /Security News -->
                                <!-- #################################################### -->
                                <!-- Vulnerabililty Count -->
                                <div class="col-lg-6 col-md-6" style="text-align:center;padding:0em 0;">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <i class="fa fa-bar-chart-o fa-fw"></i> Vulnerability Count
                                            <div class="pull-right">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                        Actions
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li><a href="#">Action</a>
                                                        </li>
                                                        <li><a href="#">Another action</a>
                                                        </li>
                                                        <li><a href="#">Something else here</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="panel-body">

                                    
                                            <div class="col-lg-12 col-md-12">
                                                <div class="col-lg-9 col-md-9">
                                                  <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                                  </div>
                                                <div class="box-body">
                                                  <div id="line-chart" style="height: 300px;"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3"> 
                                                <br>
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
                                                    <tr>
                                                        <th width="30%" class="thead"><a href="#">Code</a></th>
                                                        <th width="70%" class="thead"><a href="#">Type</a></th>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%" class="thead"><a href="#">A</a></td>
                                                        <td width="70%" class="thead"><a href="#">Type A</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%" class="thead"><a href="#">B</a></td>
                                                        <td width="70%" class="thead"><a href="#">Type B</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%" class="thead"><a href="#">C</a></td>
                                                        <td width="70%" class="thead"><a href="#">Type C</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>                                                      
                                </div>
                                <!-- /Vulnerabililty Count -->
                                <!-- #################################################### -->
                                <!-- Security News -->
                                <div class="col-lg-3 col-md-3" style="text-align:center;padding:0em 0;">
                                        <!-- Security Advisories -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <i class="fa fa-bell fa-fw"></i> Security Advisories
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                                        <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                                        <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                                        <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                                        <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                                        <span class="pull-right text-muted small"><em>11:32 AM</em>
                                                        </span>
                                                    </a>
                                                </div>
                                                <!-- /.list-group -->
                                                <a href="#" class="btn btn-default btn-block">View All Advisories</a>
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                        <!-- /.panel --> 
                                        <!-- /Scans in Progress -->
                                    </div>
                                <!-- /Security News -->
                                <!-- #################################################### -->
                                </div>
                        </div><!-- /.tab-content -->
                    </div>
                </div><!-- /.nav-tabs-custom -->
            </div><!-- /.content-row -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
</div>

    
    
   

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#contactTable').DataTable({
            responsive: true
        });
    });
    </script>
    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
<script src="../../bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../../bower_components/Flot/jquery.flot.categories.js"></script>
<!-- Page script -->
<script>
  $(function () {
    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [], cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({ top: item.pageY + 5, left: item.pageX + 5 })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>
</body>

</html>

