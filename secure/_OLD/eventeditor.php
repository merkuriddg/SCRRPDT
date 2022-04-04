<?php

require_once('../includes/config.php');
include('logged_in.php');
include('sql/cal_count_query.php'); 
include('sql/msg_count_query.php'); 
include('sql/msg_count_total_query.php'); 

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Arr Aye Tea Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- DataTables --> 
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- FavIcon -->
    <link rel="shortcut icon" href="../favicon.ico" />

    <!-- Clock Code -->
    <script src="../js/clock.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="src/_cursor.css">
    <link rel="stylesheet" href="chrome.css">

    </head>
<body class="hold-transition skin-blue sidebar-mini" onload="startTime()">
<!-- Set Date: -->
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Event Editor 
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Event Editor</li>
      </ol>
    </section>

      
      
      
    <!-- Main content -->
    <section class="content">
<?php
        $event_id = $_GET['id'];
//Get_Event_By_ID
  $result = mysqli_query($con, 
  "CALL get_events_by_id('".$event_id."')")
      or 
      die("Query fail: " . mysqli_error($con));
  while ($row = mysqli_fetch_array($result)){   
    $event_id = $row['id']; 
    $event_weekid = $row['weekid']; 
    $event_dayid = $row['dayid']; 
    $event_alarm = $row['alarm']; 
    $event_time= $row['time']; 
    $event_member_position = $row['member_position']; 
    $event_option = $row['option']; 
    $event_choice1 = $row['choice1']; 
    $event_choice2 = $row['choice2']; 
    $event_choice3 = $row['choice3']; 
    $event_choice4 = $row['choice4']; 
    $event_choice5 = $row['choice5']; 
    $event_result1 = $row['result1']; 
    $event_result2 = $row['result2']; 
    $event_result3 = $row['result3']; 
    $event_result4 = $row['result4']; 
    $event_result5 = $row['result5']; 

$con->next_result();
  }
    
?> 
          
 
              
          <!-- EventEditor ?-->
                <form name="eventeditor" id="eventeditor" class="form-horizontal" method="post" action="addevent.php">

                <div class="form-group">
                    <label for="inputWeek" class="col-sm-2 control-label">Week/Day/Alarm</label>
                    <div class="col-sm-2">
                      <input type="name" class="form-control" name="inputweekid" id="inputweekid" placeholder="Week" value="<?php echo($event_weekid);?>">
                    </div>
                    <div class="col-sm-2">
                      <input type="name" class="form-control" name="inputdayid" id="inputdayid" placeholder="Day" value="<?php echo($event_dayid);?>">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="inputalarm" id="inputalarm" placeholder="Alarm" value="<?php echo($event_alarm);?>">
                    </div>
                  </div>

                <div class="form-group">
                    <label for="inputMemberPosition" class="col-sm-2 control-label">MemberPosition</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="inputmemberposition" id="inputmemberposition" placeholder="C_O" value="<?php echo($event_member_position);?>">
                    </div>
                </div>
                    
                <div class="form-group">
                    <label for="inputTime" class="col-sm-2 control-label">Time</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="inputtime" id="inputtime" placeholder="Time" value="<?php echo($event_time);?>">
                    </div>
                    <label for="inputOption" class="col-sm-2 control-label">Option</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="inputoption" id="inputoption" placeholder="Option" value="<?php echo($event_option);?>">
                    </div>
                </div>
                    


                <div class="form-group">
                    <label for="inputchoice1" class="col-sm-2 control-label">Choice1</label>
                    <div class="col-sm-3">
                          <input class="form-control" name="inputchoice1" id="inputchoice1" placeholder="Choice1" value="<?php echo($event_choice1);?>">
                      </div>

                    <label for="inputresult1" class="col-sm-2 control-label">Result1</label>
                    <div class="col-sm-3">
                          <input class="form-control" name="inputresult1" id="inputresult1" placeholder="Result1" value="<?php echo($event_result1);?>">
                      </div>
                </div>

                <div class="form-group">
                    <label for="inputchoice2" class="col-sm-2 control-label">Choice2</label>
                    <div class="col-sm-3">
                          <input class="form-control" name="inputchoice2" id="inputchoice2" placeholder="Choice2" value="<?php echo($event_choice2);?>">
                      </div>
                    <label for="inputresult2" class="col-sm-2 control-label">Result2</label>
                    <div class="col-sm-3">
                          <input class="form-control" name="inputresult2" id="inputresult2" placeholder="Result2" value="<?php echo($event_result2);?>">
                      </div>
                </div>

                <div class="form-group">
                    <label for="inputchoice3" class="col-sm-2 control-label">Choice3</label>
                    <div class="col-sm-3">
                          <input class="form-control" name="inputchoice3" id="inputchoice3" placeholder="Choice3" value="<?php echo($event_choice3);?>">
                      </div>
                    <label for="inputresult3" class="col-sm-2 control-label">Result3</label>
                    <div class="col-sm-3">
                          <input class="form-control" name="inputresult3" id="inputresult3" placeholder="Result3" value="<?php echo($event_result3);?>">
                      </div>
                </div>

                <div class="form-group">
                    <label for="inputchoice4" class="col-sm-2 control-label">Choice4</label>
                    <div class="col-sm-3">
                          <input class="form-control" name="inputchoice4" id="inputchoice4" placeholder="Choice4" value="<?php echo($event_choice4);?>">
                      </div>
                    <label for="inputresult4" class="col-sm-2 control-label">Result4</label>
                    <div class="col-sm-3">
                          <input class="form-control" name="inputresult4" id="inputresult4" placeholder="Result4" value="<?php echo($event_result4);?>">
                      </div>
                </div>

                <div class="form-group">
                    <label for="inputchoice5" class="col-sm-2 control-label">Choice5</label>
                    <div class="col-sm-3">
                          <input class="form-control" name="inputchoice5" id="inputchoice5" placeholder="Choice5" value="<?php echo($event_choice5);?>">
                      </div>
                    <label for="inputresult5" class="col-sm-2 control-label">Result5</label>
                    <div class="col-sm-3">
                          <input class="form-control" name="inputresult5" id="inputresult5" placeholder="Result5" value="<?php echo($event_result5);?>">
                      </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input name="terms" id="terms" type="checkbox"> Is everything correct???
                        </label>
                      </div>
                    </div>
                </div>
                    <script>
                        // assign function to onsubmit property of form
                        document.getElementById('eventeditor').onsubmit = function() {
                            // get reference to required checkbox
                            var terms = this.elements['terms'];

                            if ( !terms.checked ) { // if it's not checked
                                // display error info (generally not an alert these days)
                                alert( 'If it all looks good, then check the box!!!' );
                                return false; // don't submit
                            }
                            return true; // submit
                        };                    
                    
                    </script>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                </div>
                </form>
      </section> 
      
                  </div>
              <!-- /.tab-pane -->
              
    
<!-- main-footer -->
<?php include('main_footer.php'); ?>

<!-- Control Sidebar -->
<?php include('right_nav.php'); ?>
<!-- /.control-sidebar -->
  
<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

<!-- ./wrapper -->
</div>

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- jQuery Knob -->
<script src="../bower_components/jquery-knob/js/jquery.knob.js"></script>
<!-- page script -->
<script type="application/javascript"> 
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
    </script>
<!-- page script -->
<script>
  $(function () {
    $('#tracker_datatable').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
        'order': [[ 0, 'desc' ]],
        'info'        : true,
      'autoWidth'   : true,
          'lengthMenu': [[5,10, 25, 50, -1], [5,10, 25, 50, 'All']]
    })
  })
</script>
</body>
</html>
