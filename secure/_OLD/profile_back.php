<?php
require_once('../includes/config.php');
include('logged_in.php');
?>

<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

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
        Profile 
      </h1>
    </section>

      

<!-- CHECK FOR FIRST PROFILE -->
      <?php include('check_first_profile.php'); ?>

      
      
      
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="../dist/img/<?php echo $_SESSION['member_img']; ?>" alt="UPLOAD IMAGE AT PROFILE">

              <h3 class="profile-username text-center"><?php echo ($_SESSION['member_name']); ?></h3>

              <p class="text-muted text-center"><?php echo ($_SESSION['member_position']); ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b><i class="fa fa-envelope margin-r-5"></i> Email</b> <a class="pull-right"> <?php echo ($_SESSION['member_email']); ?></a>
                </li>
                  <li class="list-group-item">
                  <b><i class="fa fa-phone margin-r-5"></i> Phone</b> 
                      <a class="pull-right" href="tel:<?php echo ($_SESSION['member_phone']); ?>">
                      <?php echo ($_SESSION['member_phone']); ?></a>
                </li>
                <li class="list-group-item">
                  <b><i class="fa fa-commenting-o margin-r-5"></i> Profile</b> <a class="pull-right"> <?php echo ($_SESSION['member_other']); ?></a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                <?php echo ($_SESSION['member_education']); ?> 
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"><?php echo ($_SESSION['member_location']); ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                  <?php echo($_SESSION['member_skills']);?>
                </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p><?php echo ($_SESSION['member_notes']); ?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
          
          <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#todo" data-toggle="tab">To Do</a></li>
              <li><a href="#hr" data-toggle="tab">HR</a></li>
              <li><a href="#budget" data-toggle="tab">Budget</a></li>
              <li><a href="#evals" data-toggle="tab">Evaluation</a></li>
              <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#tracker" data-toggle="tab">Tracker</a></li>
              <li><a href="#userinfo" data-toggle="tab">User Info</a></li>
              <li><a href="#photo" data-toggle="tab"> Photo</a></li>
            </ul>
              
          <div class="tab-content">

          <!-- Onboarding ?-->
          <div class="active tab-pane" id="todo">
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">To Do List</h3>

            </div>
<script src="src/dashboard.js" type="application/javascript">
                </script>
            <!-- /.box-header -->
<!-- See dist/js/pages/dashboard.js to activate the todoList plugin 
https://github.com/almasaeed2010/AdminLTE/issues/146
http://jqueryui.com/sortable/
http://api.jqueryui.com/sortable/



https://johnny.github.io/jquery-sortable/
http://bytutorial.com/blogs/jquery/jquery-get-selected-checkboxes



-->
<script type="application/javascript">
function showname () {
      var name = document.getElementById('fileSelect'); 
      alert('Selected file name: ' + name.files.item(0).name + '\nSelected file size: ' + name.files.item(0).size + '\nSelected file type: ' + name.files.item(0).type);
    };
</script>

                
    <form action="update_checklist.php" method="post">
            <div class="box-body">
            <ul class="todo-list">
                <li>
                  <input type="checkbox" value="">
                  <span class="text">Read this Checklist</span>
                </li>
                <li>
                  <input type="checkbox" value="">
                  <span class="text">Complete User Info</span>
                </li>
                <li>
                  <input type="checkbox" value="">
                  <span class="text">Complete HR Forms</span>
                </li>
                <li>
                  <input type="checkbox" value="">
                  <span class="text">Review & Approve Your Compensation</span>
                </li>
                <li>
                  <input type="checkbox" value="">
                  <span class="text">Review & Prepare Your Performance Evaluations</span>
                </li>
                <li>
                  <input type="checkbox" value="">
                  <span class="text">Make Sure Everything is Correct in Your Profile</span>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
            </div>
              </form>
              
          </div>
      </div>
              <!-- /.tab-pane -->                           
              
              <!-- HR Information-->
              <div class="tab-pane" id="hr">
                <div class="box-header">
                  <i class="ion ion-person-stalker"></i>
                  <h3 class="box-title">HR Forms</h3>
                </div>
                  <a href="https://www.irs.gov/pub/irs-pdf/fw4.pdf" target="_blank">IRS W-4</a><br>
                  <a href="https://www.tax.ny.gov/pdf/current_forms/it/it2104_fill_in.pdf" target="_blank">NYS State Tax Forms IT-2104</a><br>
              </div>
              <!-- /.tab-pane -->

              
          <!-- Compensation ?-->
              <div class="tab-pane" id="budget">
                <div class="box-header">
                  <i class="ion ion-cash"></i>
                  <h3 class="box-title">Budget Numbers and Compensation Information</h3>
                </div>
                  This is  the individual Budget Numbers and a Statement of Compensation<br>
                  Varies per employee... 
              </div>
              <!-- /.tab-pane -->
              
              
          <!-- Performance ?-->
              <div class="tab-pane" id="evals">
                  <div class="box-header">
                  <i class="ion ion-thumbsup"></i>
                  <h3 class="box-title">Personal Evaluations</h3>
                  </div>

                  This will be a 360 eval form per week...<br>
                  For each other employee
              </div>
              <!-- /.tab-pane -->
                            
          <!-- Tracker ?-->
              <div class="tab-pane" id="tracker">
                  <div class="box-header">
                  <i class="ion ion-map"></i>
                  <h3 class="box-title">Tracker</h3>
                  </div>
              <table id="tracker_datatable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="50%">Date/Time</th>
                        <th width="50%">Page</th>
                    </tr>
                </thead>
                <tbody>
                    <style>
                    td, p img {vertical-align: baseline;}
                    td, p img {vertical-align: text-bottom;}
                    </style>
              <?php 
$dashboard_count=0;              
$calendar_count=0;              
$contacts_count=0;              
$mail_count=0;              
$fullview_count=0;              
$logger_count=0;              
$library_count=0;              
$folders_count=0;              
$cuppa_count=0;              
$profile_count=0;              
$randr_count=0;              
              
                    
                    //Get_Tracker
                      $result = mysqli_query($con, 
                      "CALL get_tracker('.$_SESSION[memberID].')")
                          or 
                          die("Query fail: " . mysqli_error());
                      while ($row = mysqli_fetch_array($result)){   
                        $dtg = $row['currentdatetime']; 
                        $pageID = $row['pageID']; 


                    switch ($pageID) {
                        case 0:
                            $pagecode = "Dashboard";
                            $dashboard_count++;
                            break;
                        case "1":
                            $pagecode = "Calendar";
                            $calendar_count++;
                            break;
                        case "2":
                            $pagecode = "Contacts";
                            $contacts_count++;
                            break;
                        case "3":
                            $pagecode = "Mail";
                            $mail_count++;
                            break;
                        case "4":
                            $pagecode = "FullView";
                            $fullview_count++;
                            break;
                        case "5":
                            $pagecode = "Logger";
                            $logger_count++;
                            break;
                        case "6":
                            $pagecode = "Library";
                            $library_count++;
                            break;
                        case "7":
                            $pagecode = "Folders";
                            $folders_count++;
                            break;
                        case "8":
                            $pagecode = "Cuppa";
                            $cuppa_count++;
                            break;
                        case "9":
                            $pagecode = "Profile";
                            $profile_count++;
                            break;
                        case "10":
                            $pagecode = "R&R";
                            $randr_count++;
                            break;
                    }


                    echo '<tr>
                            <td align="left" width="50%" valign="left">
                            ' . $dtg .'
                            </td>
                            <td align="left" width="50%" valign="middle">
                            ' . $pagecode.'
                            </td></tr>';
                }

                    $con->next_result();
                    
                    ?>
                </tbody>
              </table>
<hr>
                  
                  
<?php
$total = 0;
$total = $dashboard_count + $calendar_count + $contacts_count + $mail_count + $fullview_count + $logger_count + $library_count + $folders_count + $cuppa_count + $profile_count + $randr_count;

$circle1 = ($dashboard_count / $total) * 100;
$circle2 = ($calendar_count / $total) * 100;
$circle3 = ($contacts_count / $total) * 100;
$circle4 = ($mail_count / $total) * 100;
$circle5 = ($fullview_count / $total) * 100;
$circle6 = ($logger_count / $total) * 100;
$circle7 = ($library_count / $total) * 100;
$circle8 = ($folders_count / $total) * 100;
$circle9 = ($cuppa_count / $total) * 100;
$circle10 = ($profile_count / $total) * 100;
$circle11 = ($randr_count / $total) * 100;  
             
?>
                  <table>
                  <tr><td align="left" width="50%" valign="left">
                      Dashboard</td><td align="left" width="50%" valign="left">
                    <?php echo $dashboard_count . " out of " . $total . " = " . $circle1 ."%" ?>   
                  </td></tr>
                  <tr><td align="left" width="50%" valign="left">
                      Calendar</td><td align="left" width="50%" valign="left">
                    <?php echo $calendar_count . " out of " . $total . " = " . $circle2 ."%" ?>   
                  </td></tr>
                  <tr><td align="left" width="50%" valign="left">
                      Contacts</td><td align="left" width="50%" valign="left">
                    <?php echo $contacts_count . " out of " . $total . " = " . $circle3 ."%" ?>   
                  </td></tr>
                  <tr><td align="left" width="50%" valign="left">
                      Mail</td><td align="left" width="50%" valign="left">
                    <?php echo $mail_count . " out of " . $total . " = " . $circle4 ."%" ?>   
                  </td></tr>
                  <tr><td align="left" width="50%" valign="left">
                      FullView</td><td align="left" width="50%" valign="left">
                    <?php echo $fullview_count . " out of " . $total . " = " . $circle5 ."%" ?>   
                  </td></tr>
                  <tr><td align="left" width="50%" valign="left">
                      Logger</td><td align="left" width="50%" valign="left">
                    <?php echo $logger_count . " out of " . $total . " = " . $circle6 ."%" ?>   
                  </td></tr>
                  <tr><td align="left" width="50%" valign="left">
                      Library</td><td align="left" width="50%" valign="left">
                    <?php echo $library_count . " out of " . $total . " = " . $circle7 ."%" ?>   
                  </td></tr>
                  <tr><td align="left" width="50%" valign="left">
                      Folders</td><td align="left" width="50%" valign="left">
                    <?php echo $folders_count . " out of " . $total . " = " . $circle8 ."%" ?>   
                  </td></tr>
                  <tr><td align="left" width="50%" valign="left">
                      Cuppa</td><td align="left" width="50%" valign="left">
                    <?php echo $cuppa_count . " out of " . $total . " = " . $circle9 ."%" ?>   
                  </td></tr>
                  <tr><td align="left" width="50%" valign="left">
                      Profile</td><td align="left" width="50%" valign="left">
                    <?php echo $profile_count . " out of " . $total . " = " . $circle10 ."%" ?>   
                  </td></tr>
                  <tr><td align="left" width="50%" valign="left">
                      R & R</td><td align="left" width="50%" valign="left">
                    <?php echo $randr_count . " out of " . $total . " = " . $circle11 ."%" ?>   
                  </td></tr>
                  </table>    
                  
              
              
              </div>
              <!-- /.tab-pane -->
              
              

          <!-- Timeline ?-->
              <div class="tab-pane" id="timeline">
                  <div class="box-header">
                  <i class="ion ion-clock"></i>
                  <h3 class="box-title">Timeline</h3>
                  </div>
                  This will be a system that tracks their actions...to be built...
                  
                  <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          Date Here
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-gray"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> Time Here</span>

                      <h3 class="timeline-header"><a href="#">Someone Here</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              
          <!-- UserInfo ?-->
              <div class="tab-pane" id="userinfo">
                  <div class="box-header">
                  <i class="ion ion-person"></i>
                  <h3 class="box-title">Personal Information</h3>
                  </div>
                <form name="updateuser" id="updateuser" class="form-horizontal" method="post" action="update_member.php">

                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-5">
                      <input type="name" class="form-control" name="inputFName" id="inputFName" placeholder="First Name" value="<?php echo($_SESSION['member_fname']);?>">
                    </div>
                    <div class="col-sm-5">
                      <input type="name" class="form-control" name="inputLName" id="inputLName" placeholder="Last Name" value="<?php echo($_SESSION['member_lname']);?>">
                    </div>
                  </div>

                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" value="<?php echo($_SESSION['member_email']);?>">
                    </div>
                </div>
                    
                <div class="form-group">
                    <label for="inputArea_Code" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-3">
                          <input class="form-control" name="inputArea_Code" id="inputArea_Code" placeholder="(555)" value="<?php echo($_SESSION['area_code']);?>">
                      </div>
                    <div class="col-sm-3">
                          <input class="form-control" name="inputPhone_Pre" id="inputPhone_Pre" placeholder="555" value="<?php echo($_SESSION['phone_pre']);?>">
                      </div>
                    <div class="col-sm-4">
                          <input class="form-control" name="inputPhone_Suff" id="inputPhone_Suff" placeholder="1212" value="<?php echo($_SESSION['phone_suff']);?>">
                      </div>
                </div>

                <div class="form-group">
                    <label for="inputOther" class="col-sm-2 control-label">Profile</label>
                    <div class="col-sm-10">
                          <input class="form-control" name="inputOther" id="inputOther" placeholder="Profile" value="<?php echo($_SESSION['member_other']);?>">
                      </div>
                </div>

                <div class="form-group">
                    <label for="inputEducation" class="col-sm-2 control-label">Education</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputEducation" id="inputEducation" placeholder="Education" value="<?php echo($_SESSION['member_education']);?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputExperience" id="inputExperience" placeholder="Experience" value="<?php echo($_SESSION['member_experience']);?>">
                    </div>
                </div>
                    
                <div class="form-group">
                    <label for="inputLocation" class="col-sm-2 control-label">Location</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputLocation" id="inputLocation" placeholder="Location" value="<?php echo($_SESSION['member_location']);?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputSkills" id="inputSkills" placeholder="Skills" value="<?php echo($_SESSION['member_skills']);?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputNotes" class="col-sm-2 control-label">Notes</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputNotes" id="inputNotes" placeholder="Notes" value="<?php echo($_SESSION['member_notes']);?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputBlinkedln" class="col-sm-2 control-label">Blinkedln</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputBlinkedln" id="inputBlinkedln" placeholder="Blinkedln Profile Name" value="<?php echo($_SESSION['member_blinked_name']);?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputInstagram" class="col-sm-2 control-label">Instagram</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputInstagram" id="inputInstagram" placeholder="Instagram Profile Name" value="<?php echo($_SESSION['member_instagram_name']);?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputBlinkedln" class="col-sm-2 control-label">Skwalk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputSkwalk" id="inputSkwalk" placeholder="Skwalk Profile Name" value="<?php echo($_SESSION['member_skwalk_name']);?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputSnapchat" class="col-sm-2 control-label">Snapchat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputSnapchat" id="inputSnapchat" placeholder="Snapchat Profile Name" value="<?php echo($_SESSION['member_snapchat_name']);?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input name="terms" id="terms" type="checkbox"> I agree to the <a href="termsandconditions.php">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                </div>
                    <script>
                        // assign function to onsubmit property of form
                        document.getElementById('updateuser').onsubmit = function() {
                            // get reference to required checkbox
                            var terms = this.elements['terms'];

                            if ( !terms.checked ) { // if it's not checked
                                // display error info (generally not an alert these days)
                                alert( 'Please signify your agreement with our terms and conditions. Maybe you should read them?!?' );
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
              </div>
              <!-- /.tab-pane -->

              
    <!-- userPhoto ?-->
              <div class="tab-pane" id="photo">
                  <div class="box-header">
                  <i class="ion ion-camera"></i>
                  <h3 class="box-title">Personal Photo</h3>
                  </div>
                  
              <form id="upload" action="photo_upload.php" enctype="multipart/form-data" method="post">
				<div class="col-12">
						<h4>Upload your Photo:</h4>
						<hr>
						<div class="form-group">
							<input type="file" name="user_photo" id="user_photo">
                        Current:
                            <img src="../dist/img/<?php echo $_SESSION['member_img']; ?>" class="img-circle" alt="Image of <?php echo $_SESSION['member_name']; ?>" height="100">

                        New:
                            <img id="blah" src="#" alt="Your New Image"  height="100"/>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary"> Upload Photo </button>
						</div>
				</div>
				</form>
                    
                  
                  
<script type="application/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#user_photo").change(function(){
        readURL(this);
    });
  </script>
              
              </div>
              <!-- /.tab-pane -->
              
                  
                  

              
              
              
              
              
              </div>
            <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
      <!-- /.row -->
        </div>
          <!-- /.content-wrapper -->
      </section>
        <!-- /#page-content-wrapper -->
        </div>

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
