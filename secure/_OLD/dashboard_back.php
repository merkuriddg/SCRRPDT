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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard 
      </h1>
    </section>

<!-- CHECK FOR FIRST LOGIN -->
      <?php include('check_first_login.php'); ?>

    <!-- Main content -->
    <section class="content">

<!-- Stat boxes -->
<!-- DEMO CSO FOR CEO -->
<?php if ($_SESSION[member_position] == "CEO") {$_SESSION[member_position] = "CSO"; } ?>        
<?php include('stat_boxes/'.$_SESSION[member_position].'_stat_boxes.php'); ?>

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
                        <li><a href="#Vulns" data-toggle="tab">Customize</a>
                        </li>

                    </ul>
<!-- ############################################################################################################################ -->
<!-- ############################################################################################################################ -->

                    <div class="tab-content">
                        <div id="Dashboard" class="tab-pane active">
                        <!-- #################################################### -->
                        <?php if ($_SESSION[member_position] == "CSO") { ?>        

                        <!-- Security News -->
                            <div class="col-lg-3 col-md-3" style="text-align:center;padding:0em 0;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-bell fa-fw"></i> Security News
                                    </div>
                                    <?php
                                    //Get_News
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
                                    <div class="panel-body latest-news-all">
                                        <div class="latest-news-left">
                                        <?php echo($news_id); ?><br>
                                        <?php if ($news_type=="pdf") {
                                          echo "<img src='../dist/news/pdf.jpg' height='50px' alt=''>";
                                          }
                                          ?>
                                        <?php if ($news_type<>"pdf") {
                                          echo "<img src='../dist/news/'.$news_img_url.'.jpg' height='50px' alt=''>";
                                          }
                                          ?>
                                        </div>
                                        <div class="latest-news-right">
                                            <p><a href="newstory.php?story='<?php echo($news_id); ?>'"><?php echo($news_title); ?></a></p>
                                            <?php echo($news_paragraph); ?> 
                                            <div class="news">
                                                <span class="news-right"><?php echo  date('m/d/y'); ?></span> 
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                          }
                                                            $con->next_result();
                                          ?>                  
                                        <a href="News.php">View All</a> 
                                </div>
                            </div>
                            <!-- /News Box -->

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
                </div>
        </div><!-- /.nav-tabs-custom -->
    </div><!-- /.content-row -->
</section><!-- /.content -->            
            
            
    <section class="col-lg-6 connectedSortable">
          <!-- interactive chart -->
              <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs">
              <li class="active"><a href="#current" data-toggle="tab"><i class="fa fa-asterisk"></i> Current Events</a></li>
              <li class=""><a href="#sources" data-toggle="tab"><i class="fa fa-clock-o"></i> Top Event Sources</a></li>
                <li class=""><a href="#threats" data-toggle="tab"><i class="fa fa-area-chart"></i> Top Event Threats</a></li>
            </ul>
          <div class="tab-content no-padding">
              <div class="active tab-pane" id="current">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="ion ion-clipboard"></i>

                  <h4 class="box-title">Current Events</h4>
                  <div class="box-tools pull-right">
                    Real time
                    <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                      <button type="button" class="btn btn-default btn-xs active" data-toggle="on">On</button>
                      <button type="button" class="btn btn-default btn-xs" data-toggle="off">Off</button>
                    </div>
                  </div>
                </div>
                <div class="box-body">
                  <div id="interactive" style="height: 300px;"></div>
                </div>
              </div>
                    </div>

              <div class="tab-pane" id="sources">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="ion ion-clipboard"></i>
                  <h4 class="box-title"> Top Event Sources</h4>

                  <div class="box-tools pull-right">
                    Real time
                    <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                      <button type="button" class="btn btn-default btn-xs active" data-toggle="on">On</button>
                      <button type="button" class="btn btn-default btn-xs" data-toggle="off">Off</button>
                    </div>
                  </div>
                </div>
                <div class="box-body">
                  <div id="interactive" style="height: 300px;"></div>
                </div>
              </div>
                    </div>


              <div class="tab-pane" id="threats">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="ion ion-clipboard"></i>
                  <h4 class="box-title"> Top Event Threats</h4>

                  <div class="box-tools pull-right">
                    Real time
                    <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                      <button type="button" class="btn btn-default btn-xs active" data-toggle="on">On</button>
                      <button type="button" class="btn btn-default btn-xs" data-toggle="off">Off</button>
                    </div>
                  </div>
                </div>
                <div class="box-body">
                  <div id="interactive" style="height: 300px;"></div>
                </div>
              </div>
                    </div>



          </div>
      </div>
    </section>

<?php } ?>        

        <!-- /.Left col -->
        <!-- right col -->
        <section class="col-lg-5 connectedSortable">
<?php
            $_SESSION[hourid]="1";
//            echo "week:".$_SESSION[weekid];
//            echo "day:".$_SESSION[dayid];
//            echo "hour:".$_SESSION[hourid];

            
            
            
            ?>

         </section>
        <!-- right col -->
        </div>
      <!-- /.row (main row) -->
        

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<!-- main-footer -->
<?php include('main_footer.php'); ?>

<!-- Control Sidebar -->
<?php include('right_nav.php'); ?>
<!-- /.control-sidebar -->
  
<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
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

    var donutData = [
      { label: 'Series2', data: 30, color: '#3c8dbc' },
      { label: 'Series3', data: 20, color: '#0073b7' },
      { label: 'Series4', data: 50, color: '#00c0ef' }
    ]
    $.plot('#donut-chart', donutData, {
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
