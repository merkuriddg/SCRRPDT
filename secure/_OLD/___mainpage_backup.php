<?php
require_once('../includes/config.php');
include('logged_in.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
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

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/<?php echo $_SESSION['member_img']; ?>" class="img-circle" alt="Image of <?php echo $_SESSION['member_name']; ?>">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['member_name']; ?></p>
            <a href="#"><i fa-circle-o></i> online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">


        <!-- Left Sidebar: style can be found in sidebar.less-->
        <?php include('left_menu.php'); ?>

        </ul>
  </section>
    <!-- /.sidebar -->
  </aside>

        <iframe id="eventchecker"
        src="eventcheck.php"
        width="0"
        height="0"
        sandbox="allow-modals allow-popups allow-popups-to-escape-sandbox allow-top-navigation allow-scripts">
        </iframe>
    
      <!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->
        <?php include('modal.php'); ?>
      <!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->
      
        
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) 
    <section class="content-header">
      <h1>
        Dashboard 
      </h1>
    </section>
-->

<!-- CHECK FOR FIRST LOGIN -->
      <?php include('check_first_login.php'); ?>

    <!-- Main content -->
    <section class="content">

    <!-- Stat boxes -->
    <!-- DEMO CSO FOR CEO -->
    <?php if ($_SESSION[member_position] == "CEO") {$_SESSION[member_position] = "CSO"; } ?>        
    <div class="row">
        <?php if ($_SESSION[member_position] == "CFO") { ?>        
        <!-- CFO Left col -->          
          <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
          </div>
          </section>

        <?php } ?>

<script type="text/javascript">
function openEvent(evt, eventName) {
// Declare all variables
var i, tabcontent, tablinks;

// Get all elements with class="tabcontent" and hide them
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
tabcontent[i].style.display = "none";
}

// Get all elements with class="tablinks" and remove the class "active"
tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tablinks.length; i++) {
tablinks[i].className = tablinks[i].className.replace(" active", "");
}

// Show the current tab, and add an "active" class to the link that opened the tab
document.getElementById(eventName).style.display = "block";
evt.currentTarget.className += " active";
}                                                
</script>           

<style>
.td-title {
font-size:10px;
text-align: left;
font-weight: bold;
text-decoration: underline;
color:black;
}
.td-left {
font-size:10px;
text-align: left;
color:black;
}
.td-center {
font-size:12px;
text-align: center;
color:blue;
}
.tabcontent {
display: none;
display:

}    
</style>  


<section class="content">
    <div class="row">
            <div class="col-lg-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#dashboard" data-toggle="tab">Dashboard</a>
                        </li>
                        <li><a href="#offenses" data-toggle="tab">Offenses</a>
                        </li>
                        <li><a href="#logs" data-toggle="tab">Log Activity</a>
                        </li>
                        <li><a href="#network" data-toggle="tab">Network Activity</a>
                        </li>
                        <li><a href="#assets" data-toggle="tab">Assets</a>
                        </li>
                        <li><a href="#reports" data-toggle="tab">Reports</a>
                        </li>
                        <li><a href="#risks" data-toggle="tab">Risks</a>
                        </li>
                        <li><a href="#users" data-toggle="tab">User Analytics</a>
                        </li>
                        <li><a href="#vulns" data-toggle="tab">Vulnerabilities</a>
                        </li>
                        <li><a href="#customize" data-toggle="tab">Customize</a>
                        </li>

                    </ul>
<!-- ############################################################################################################################ -->
<!-- ############################################################################################################################ -->
                <div class="tab-content">
<!-- dashboard/############################################################################################################################ -->
                    <div id="dashboard" class="tab-pane active">
                        <div class="box-header">
                            <div class="col-lg-3 col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa  fa-exclamation-circle fa-4x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">+135</div>
                                                <div>Threats</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-exclamation-triangle fa-4x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">+25</div>
                                                <div>Vulerabilities</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa  fa-exclamation fa-4x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">+35%</div>
                                                <div>Risk</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-frown-o fa-4x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">+175 Attacks</div>
                                                <div>Open Incidents</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Security News -->
                            <div class="col-lg-3 col-md-3" style="text-align:center;padding:0em 0;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-bell fa-fw"></i> Security News
                                    </div>
                                    <div class="panel-body latest-news-all">
                                        <div class="list-group text-left">
                                    <?php
                                    $result = mysqli_query($con, 
//                                                "CALL get_news('".$_SESSION['weekid']."', '" .$_SESSION['dayid']."', '%')")
                                    "CALL get_news('1','1','1')")
                                        or 
                                    die("Query fail: " . mysqli_error($con));
                                    while ($row = mysqli_fetch_array($result)){   

                                    $news_id = $row['newsID']; 
                                    $news_type = $row['type']; 
                                    $news_title = $row['news_title']; 
                                    $news_source = $row['news_source']; 
                                    $news_source_url = $row['news_source_url']; 
                                    $news_paragraph = $row['news_paragraph1']; 
                                    $news_img_url = $row['news_img_url']; 
                                    ?>
                                    <a href="newstory.php?story='<?php echo($news_id); ?>'"  class="list-group-item">                                            
                                    <?php 
                                        if ($news_type=="pdf") {
                                            echo "<i class='fa fa-file-pdf-o fa-fw'></i> ";
                                        }
                                        if ($news_type<>"pdf") {
                                            echo "<i class='fa fa-newspaper-o fa-fw'></i> ";
                                        }
                                    ?>
                                    <?php echo($news_title); ?></a>
                                    <!--?php echo($news_paragraph); ?--> 
                                    <?php
                                          }
                                                            $con->next_result();
                                          ?>
                                            <a href="news.php" class="btn btn-default btn-block">View All News</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- /Security News -->
                            <!-- #################################################### -->
                            <!-- Vulnerabililty Count -->
                            <div class="col-lg-6 col-md-6" style="text-align:center;padding:0em 0;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-bell fa-fw"></i> My Latest Tasks
                                    </div>
                                    <div class="panel-body">
                                        <div class="list-group text-left">
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-folder fa-fw"></i>Case: 98723645
                                                <span class="pull-right text-muted small"><em>1 minutes ago</em></span>
                                        </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-folder fa-fw"></i>Case: 09832457
                                                <span class="pull-right text-muted small"><em>2 minutes ago</em></span>
                                            </a>
                                            <a href="#" class="btn btn-default btn-block">View All My Tasks</a>
                                        </div>
                                    </div>
                                    
                                    <div class="panel-heading">
                                        <i class="fa fa-bell fa-fw"></i> Most Severe Incidents
                                    </div>
                                    <div class="panel-body">
                                        <div class="list-group text-left">
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-exclamation fa-fw"></i>Case: 98723645
                                                <span class="pull-right text-muted small"><em>4 minutes ago</em></span>
                                        </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-exclamation fa-fw"></i> Case: 9823457
                                                <span class="pull-right text-muted small"><em>3 minutes ago</em></span>
                                            </a>
                                            <a href="#" class="btn btn-default btn-block">View All Severe Incidents</a>
                                        </div>
                                    </div>
                                    
                                    <div class="panel-heading">
                                        <i class="fa fa-bell fa-fw"></i> Most Recent Incidents
                                    </div>
                                    <div class="panel-body">
                                        <div class="list-group text-left">
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-clock-o fa-fw"></i>Case: 983497623
                                                <span class="pull-right text-muted small"><em>4 minutes ago</em></span>
                                        </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-clock-o fa-fw"></i>Case: 234872364
                                                <span class="pull-right text-muted small"><em>4 minutes ago</em></span>
                                            </a>
                                            <a href="#" class="btn btn-default btn-block">View All Recent Advisories</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /Vulnerabililty Count -->
                            <!-- #################################################### -->
                            <!-- Security Advisories -->
                            <div class="col-lg-3 col-md-3" style="text-align:center;padding:0em 0;">
                                <!-- Security Advisories -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-bell fa-fw"></i> Security Advisories
                                    </div>
                                    <div class="panel-body">
                                        <div class="list-group text-left">
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-comment fa-fw"></i> New Comment
                                                <!-- span class="pull-right text-muted small"><em>4 minutes ago</em>
                                                </span-->
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                                <!-- span class="pull-right text-muted small"><em>4 minutes ago</em>
                                                </span-->
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                                <!-- span class="pull-right text-muted small"><em>4 minutes ago</em>
                                                </span-->
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-tasks fa-fw"></i> New Task
                                                <!-- span class="pull-right text-muted small"><em>4 minutes ago</em>
                                                </span-->
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                                <!-- span class="pull-right text-muted small"><em>4 minutes ago</em>
                                                </span-->
                                            </a>
                                        </div>
                                        <a href="#" class="btn btn-default btn-block">View All Advisories</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Security Advisories -->
                            <!-- #################################################### -->                            

                            
                        </div>
                    r</div>
<!-- offenses/############################################################################################################################ -->
     <?php include "dashboard_offenses.php"; ?>
<!-- logs/############################################################################################################################ -->
     <?php include "dashboard_logactivity.php"; ?>
<!-- network/############################################################################################################################ -->
     <!--php include "dashboard_netactivity.php"; ?>
<!-- assets/############################################################################################################################ -->
     <?php include "dashboard_assets.php"; ?>
<!-- reports/############################################################################################################################ -->
     <?php include "dashboard_reports.php"; ?>
<!-- risks/############################################################################################################################ -->
     <?php include "dashboard_risks.php"; ?>
<!-- users/############################################################################################################################ -->
     <?php include "dashboard_users.php"; ?>
<!-- vulns/############################################################################################################################ -->
     <?php include "dashboard_vulns.php"; ?>
<!-- ############################################################################################################################ -->
     <?php include "dashboard_custom.php"; ?>
<!-- ############################################################################################################################ -->
            </div>

        </div>
    </div>
</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
      </section>
      
<!-- main-footer -->
<?php include('main_footer.php'); ?>

<!-- Control Sidebar -->
<?php include('right_nav.php'); ?>
<!-- /.control-sidebar -->
  
<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
    </div>
    </div>
<!-- ./wrapper -->
<script type="text/javascript">
   $(document).ready(function () {
      $('head').append('<link href="/chrome.css" rel="stylesheet" />');
   });
</script>    
<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- FLOT CHARTS -->
<script src="../bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../bower_components/Flot/jquery.flot.categories.js"></script>
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- jQuery Knob -->
<script src="../../bower_components/jquery-knob/js/jquery.knob.js"></script>
<!-- Sparkline -->
<script src="../../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    
    
<!-- Page script -->
<script type="application/javascript">
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data = [], totalPoints = 100

    function getRandomData() {

      if (data.length > 0)
        data = data.slice(1)

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [getRandomData()], {
      grid  : {
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#3c8dbc'
      },
      lines : {
        fill : true, //Converts the line chart to area chart
        color: '#3c8dbc'
      },
      yaxis : {
        min : 0,
        max : 100,
        show: true
      },
      xaxis : {
        show: true
      }
    })
    

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on')
        setTimeout(update, updateInterval)
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */
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

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
    $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#00c0ef'
      },
      lines : {
        fill: true //Converts the line chart to area chart
      },
      yaxis : {
        show: false
      },
      xaxis : {
        show: false
      }
    })

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData1 = [
      { label: 'A', data: 30, color: '#3c8dbc' },
      { label: 'B', data: 20, color: '#0073b7' },
      { label: 'C', data: 50, color: '#00c0ef' }
    ]
    $.plot('#donut-chart1', donutData1, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */
      
      

    /*
     * DONUT CHART
     * -----------
     */

    var donutData2 = [
      { label: 'A', data: 30, color: '#3c8dbc' },
      { label: 'B', data: 20, color: '#0073b7' },
      { label: 'C', data: 50, color: '#00c0ef' }
    ]
    $.plot('#donut-chart2', donutData2, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */      

  })

    /*
     * DONUT CHART
     * -----------
     */

    var donutData3 = [
      { label: 'A', data: 30, color: '#3c8dbc' },
      { label: 'B', data: 20, color: '#0073b7' },
      { label: 'C', data: 50, color: '#00c0ef' }
    ]
    $.plot('#donut-chart3', donutData3, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */
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

<!-- page script -->
<script>
  $(function () {
    /* jQueryKnob */

    $(".knob").knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv)  // Angle
              , sa = this.startAngle          // Previous start angle
              , sat = this.startAngle         // Start angle
              , ea                            // Previous end angle
              , eat = sat + a                 // End angle
              , r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    $(".sparkline").each(function () {
      var $this = $(this);
      $this.sparkline('html', $this.data());
    });

    /* SPARKLINE DOCUMENTATION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
    drawDocSparklines();
    drawMouseSpeedDemo();

  });
  function drawDocSparklines() {

    // Bar + line composite charts
    $('#compositebar').sparkline('html', {type: 'bar', barColor: '#aaf'});
    $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {composite: true, fillColor: false, lineColor: 'red'});


    // Line charts taking their values from the tag
    $('.sparkline-1').sparkline();

    // Larger line charts for the docs
    $('.largeline').sparkline('html',
        {type: 'line', height: '2.5em', width: '4em'});

    // Customized line chart
    $('#linecustom').sparkline('html',
        {
          height: '1.5em', width: '8em', lineColor: '#f00', fillColor: '#ffa',
          minSpotColor: false, maxSpotColor: false, spotColor: '#77f', spotRadius: 3
        });

    // Bar charts using inline values
    $('.sparkbar').sparkline('html', {type: 'bar'});

    $('.barformat').sparkline([1, 3, 5, 3, 8], {
      type: 'bar',
      tooltipFormat: '{{value:levels}} - {{value}}',
      tooltipValueLookups: {
        levels: $.range_map({':2': 'Low', '3:6': 'Medium', '7:': 'High'})
      }
    });

    // Tri-state charts using inline values
    $('.sparktristate').sparkline('html', {type: 'tristate'});
    $('.sparktristatecols').sparkline('html',
        {type: 'tristate', colorMap: {'-2': '#fa7', '2': '#44f'}});

    // Composite line charts, the second using values supplied via javascript
    $('#compositeline').sparkline('html', {fillColor: false, changeRangeMin: 0, chartRangeMax: 10});
    $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {composite: true, fillColor: false, lineColor: 'red', changeRangeMin: 0, chartRangeMax: 10});

    // Line charts with normal range marker
    $('#normalline').sparkline('html',
        {fillColor: false, normalRangeMin: -1, normalRangeMax: 8});
    $('#normalExample').sparkline('html',
        {fillColor: false, normalRangeMin: 80, normalRangeMax: 95, normalRangeColor: '#4f4'});

    // Discrete charts
    $('.discrete1').sparkline('html',
        {type: 'discrete', lineColor: 'blue', xwidth: 18});
    $('#discrete2').sparkline('html',
        {type: 'discrete', lineColor: 'blue', thresholdColor: 'red', thresholdValue: 4});

    // Bullet charts
    $('.sparkbullet').sparkline('html', {type: 'bullet'});

    // Pie charts
    $('.sparkpie').sparkline('html', {type: 'pie', height: '1.0em'});

    // Box plots
    $('.sparkboxplot').sparkline('html', {type: 'box'});
    $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
        {type: 'box', raw: true, showOutliers: true, target: 6});

    // Box plot with specific field order
    $('.boxfieldorder').sparkline('html', {
      type: 'box',
      tooltipFormatFieldlist: ['med', 'lq', 'uq'],
      tooltipFormatFieldlistKey: 'field'
    });

    // click event demo sparkline
    $('.clickdemo').sparkline();
    $('.clickdemo').bind('sparklineClick', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      alert("Clicked on x=" + region.x + " y=" + region.y);
    });

    // mouseover event demo sparkline
    $('.mouseoverdemo').sparkline();
    $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      $('.mouseoverregion').text("x=" + region.x + " y=" + region.y);
    }).bind('mouseleave', function () {
      $('.mouseoverregion').text('');
    });
  }

  /**
   ** Draw the little mouse speed animated graph
   ** This just attaches a handler to the mousemove event to see
   ** (roughly) how far the mouse has moved
   ** and then updates the display a couple of times a second via
   ** setTimeout()
   **/
  function drawMouseSpeedDemo() {
    var mrefreshinterval = 500; // update display every 500ms
    var lastmousex = -1;
    var lastmousey = -1;
    var lastmousetime;
    var mousetravel = 0;
    var mpoints = [];
    var mpoints_max = 30;
    $('html').mousemove(function (e) {
      var mousex = e.pageX;
      var mousey = e.pageY;
      if (lastmousex > -1) {
        mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey));
      }
      lastmousex = mousex;
      lastmousey = mousey;
    });
    var mdraw = function () {
      var md = new Date();
      var timenow = md.getTime();
      if (lastmousetime && lastmousetime != timenow) {
        var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
        mpoints.push(pps);
        if (mpoints.length > mpoints_max)
          mpoints.splice(0, 1);
        mousetravel = 0;
        $('#mousespeed').sparkline(mpoints, {width: mpoints.length * 2, tooltipSuffix: ' pixels per second'});
      }
      lastmousetime = timenow;
      setTimeout(mdraw, mrefreshinterval);
    };
    // We could use setInterval instead, but I prefer to do it this way
    setTimeout(mdraw, mrefreshinterval);
  }
</script>
<script>
  $(function () {
    $('#vulns_table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
      'lengthMenu'  : [[5, 10, 15, -1], [5, 10, 15, "All"]]
    })
  })
</script>
    </body>
</html>
