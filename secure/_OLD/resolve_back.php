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
        <h1>
            Resolve 
        </h1>
      </section>
      
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#quick" data-toggle="tab">Overview</a>
                    </li> 
                    <li><a href="#new" data-toggle="tab">New Incident</a>
                    </li>
                    <li><a href="#list" data-toggle="tab">Current Incidents</a>
                    </li>
                    <li><a href="#artifacts" data-toggle="tab">Artifacts</a>
                    </li>
                    <li><a href="#configure" data-toggle="tab">Configure</a>
                    </li>
                </ul>


                <div class="tab-content">
                    <div id="quick" class="tab-pane active">
                        <div class="col-lg-3 col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-crosshairs fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">26</div>
                                            <div>Open Incidents</div>
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
                                            <i class="fa fa-check-circle-o fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">12</div>
                                            <div>Closed Incidents</div>
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
                                            <i class="fa fa-tasks fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">124</div>
                                            <div>Total Incidents</div>
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
                                            <i class="fa fa-users fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">813</div>
                                            <div>Active Users</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           Incidents Over Time By Type
                                        </div>
                                        <!-- /.panel-heading -->

                                        <div class="row">
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
                            </div>
                        </div>
                                        
                                    


                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Open Incidents By Type
                                        </div>
                                        <div class="panel-body">
                                            <div id="morris-bar-chart"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Open Incidents By User
                                        </div>
                                        <div class="panel-body">
                                            <div class="flot-chart">
                                                <div class="flot-chart-content" id="flot-pie-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
<!-- ################################################################################################################################################ -->
                          <div id="list" class="tab-pane">
                                <div class="box-header">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           Incident List
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
                                                        <tr>
                                                            <th width="20%" class="thead"><a href="#">Check</a></th>
                                                            <th width="40%" class="thead"><a href="#">Date</a></th>
                                                            <th width="40%" class="thead"><a href="#">Name</a></th>
                                                            <th width="20%" class="thead"><a href="#">Count</a></th>
                                                        </tr>
                                                        <?php

                                                        //get_all_incidents
                                                          $result = mysqli_query($con, 
                                                          "CALL get_all_incidents()")
                                                              or 
                                                              die("Query fail: " . mysqli_error($con));
                                                            //loop the result set
                                                          while ($row = mysqli_fetch_array($result)){   
                                                            $inc_id = $row['IncID']; 
                                                            $inc_count = $row['Inc_Count']; 
                                                            $inc_type = $row['Inc_Type']; 
                                                            $inc_week = $row['Inc_Week']; 
                                                            $inc_day = $row['Inc_Day']; 

                                                              $no 	= 1;
                                                            $total 	= 0;

                                                            echo '<tr align="left">';
                                                            echo '<td align="left" width="20%" valign="left" class="data">';
                                                            echo '<input type=checkbox>';
                                                            echo '</td>';
                                                            echo '<td align="left" width="40%" valign="left" class="data">'.$inc_week.'/'. $inc_day.'</td>';
                                                            echo '<td align="left" width="40%" valign="middle" class="data">';
                                                            echo '<a href="incident.php?id='.$inc_id.'">'.$inc_type.'</a>';
                                                            echo '</td>';
                                                            echo '<td align="left" width="40%" valign="left" class="data">'.$inc_count.'</td>';
                                                            echo '</tr>';
                                                                            $total += $row['amount'];
                                                                            $no++;
                                                                        }

                                                                            $con->next_result();

                                                                            ?>
                                                    </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

<!-- ################################################################################################################################################ -->
                  <div id="new" class="tab-pane">
                        <div class="box-header">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                        <button name="subject" type="submit" value="New Incident">New Incident</button>
                                    <div class="pull-right">
                                        <button name="subject" type="submit" value="Update">Update</button>
                                    </div>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">

                                    
                                    

<style>
.td-left {
font-size:12px;
    text-align: left;
    color:black;
}
.td-center {
font-size:12px;
    text-align: center;
   color:blue;
}
.select-style {
    font-size:14px;
    font-weight: bold;
    text-align: left;
    color:blue;
}                                    
</style>
<table width="100%" border="0">
<tr width="100%">
    <td width="50%"><select class="select-style"><option>Engage</option><option>Add New Item to Engage...</option><option>Delete Selected Item...</option><option>Minimize Group</option></select></td>
    <td class="td-center" width="20%"><b><u>Owner</u></b></td>
    <td class="td-center" width="20%"><b><u>Due Date</u></b></td>
    <td class="td-center" width="5%"><b><u>Flag</u></b></td>
    <td class="td-center" width="5%"><b><u>Actions</u></b></td>
</tr>


<tr>
    <td class="td-left"><input type="checkbox"> Notify internal management (preliminary)</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Initial triage</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Interview key individuals</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Determine techniques being used to engage targets</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Determine if illegal activity is involved</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Determine if inappropriate internal involvement</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Identify affected assets </td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Update appropriate personnel/departments</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>

<tr width="100%">
    <td width="50%"><select class="select-style"><option>Detect/Analyze</option><option>Add New Item to Detect/Analyze...</option><option>Delete Selected Item...</option><option>Minimize Group</option></select></td>
    <td class="td-center" width="20%"><b><u>Owner</u></b></td>
    <td class="td-center" width="20%"><b><u>Due Date</u></b></td>
    <td class="td-center" width="5%"><b><u>Flag</u></b></td>
    <td class="td-center" width="5%"><b><u>Actions</u></b></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Select initial containment strategy </td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Collect volatile system data</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Create backup of affected systems</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Disconnect compromised systems</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Analyze intruded systems</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Determine techniques being used to engage targets</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Research current attack intelligence and recent vulnerabilities
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
    <td class="td-left"><input type="checkbox"> Determine techniques being used to engage targets</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>        
    <td class="td-left"><input type="checkbox"> Analyze malware-infected systems</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Analyze network traffic for signs of intrusion</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Analyze application data for signs of intrusion</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Review the output and status of anti-virus software</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Quantify the DoS attack and traffic</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Research OS and application logs</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Research AV vendor database</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Look for signs of network sniffers</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Look for modifications made to system software and configuration files</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Look for tools and data left behind by intruders</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Sandbox malware-infected systems</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox"> Update internal management as appropriate (assessment)</td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>

<tr width="100%">
    <td width="50%"><select class="select-style"><option>Respond/Recover</option><option>Add New Item to Respond/Recover...</option><option>Delete Selected Item...</option><option>Minimize Group</option></select></td>
    <td class="td-center" width="20%"><b><u>Owner</u></b></td>
    <td class="td-center" width="20%"><b><u>Due Date</u></b></td>
    <td class="td-center" width="5%"><b><u>Flag</u></b></td>
    <td class="td-center" width="5%"><b><u>Actions</u></b></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Select initial containment strategy </td>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Contact your ISP    <br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Contact the owners of systems being used to mount the DoS attack    <br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Notify constituents (status update)    <br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Notify external parties as appropriate    <br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Notify computer security organizations and resources    <br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Remove temporary containment measures    <br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Throttle or block DoS traffic    <br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Take steps to limit propogation or execution<br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Report suspicious activity to the FTC<br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Provide end-user remediation guidance<br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Notify public relations department<br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Determine if inappropriate internal involvement    <br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Execute and confirm roll calls using employee desk and office rosters<br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>    
    <td class="td-left"><input type="checkbox">Investigate exposure of PII<br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
<tr>
    <td class="td-left"><input type="checkbox">Escalate to incident<br>
    <td class="td-center"><button name="assign" type="submit" value="Assign User/Role">Assign User/Role</button></td>
    <td class="td-center"><input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">/<input type="text" placeholder="00" size="2">        </td>
    <td class="td-center"><a href="">0 Flags</a></td>
    <td class="td-center"><a href="">&hellip;</a></td>
</tr>
    
                                    </table>
                                
                                </div>
                            </div>
                        </div>
                    </div>

<!-- ################################################################################################################################################ -->
                 <div id="artifacts" class="tab-pane">
                        <div class="box-header">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Artifacts 
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">


                                <table width="50%">
                                <tr width="100%">
                                    <td width="50%" class="td-left">Type</td>
                                    <td width="50%" class="td-center">
                                        <select class="select-style">
                                            <option>DNS</option>
                                            <option>DNS Name</option>
                                            <option>Email</option>
                                            <option>Email Attachment</option>
                                            <option>Email Attachment Name</option>
                                            <option>Email Body</option>
                                            <option>Email Recipient</option>
                                            <option>Email Recipient Name</option>
                                            <option>Email Sender</option>
                                            <option>Email Sender Name</option>
                                            <option>File</option>
                                            <option>File Date</option>
                                            <option>File Name</option>
                                            <option>File Type</option>
                                            <option>IP Address</option>
                                            <option>IP Address: Destination</option>
                                            <option>IP Address: Source</option>
                                            <option>Malware</option>
                                            <option>Malware Name</option>
                                            <option>Malware Variant</option>
                                            <option>Malware MD5 Hash</option>
                                            <option>System IP Address</option>
                                            <option>System Name</option>
                                            <option>System OS</option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            </select>   
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" class="td-left">Value*</td>
                                    <td width="50%" class="td-center"><input type="text" size="75"></td>
                                </tr>
                                <tr>
                                    <td width="50%" class="td-left">Description</td>
                                    <td width="50%" class="td-center"><input type="text" size="75"></td>
                                    </tr>
                                <tr>
                                    <td colspan="2" width="100%" class="td-center">
                                        <button name="subject" type="submit" value="Reset">Reset</button>
                                        <button name="subject" type="submit" value="Submit">Submit</button>                                
                                    </td>
                                </tr>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>

<!-- ################################################################################################################################################ -->
                 <div id="configure" class="tab-pane">
                        <div class="box-header">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Configure 
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">

    
                                    <table width="50%">
                                    <tr width="100%">
                                        <td width="50%" class="td-left">New</td>
                                        <td width="50%" class="td-center">
                                            <select class="select-style">
                                                <option>Artifact Type</option>
                                                <option>Incident Action</option>
                                                <option>Resolve Tab</option>
                                                <option>Role or User</option>
                                                <option></option>
                                            </select>   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" class="td-left">Value*</td>
                                        <td width="50%" class="td-center"><input type="text" size="75"></td>
                                    </tr>
                                    <tr>
                                        <td width="50%" class="td-left">Description</td>
                                        <td width="50%" class="td-center"><input type="text" size="75"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" width="100%" class="td-center">
                                            <button name="subject" type="submit" value="Reset">Reset</button>
                                            <button name="subject" type="submit" value="Submit">Submit</button>                                
                                        </td>
                                    </tr>
                                    </table>                                    
                                </div>
                            </div>
                        </div>
                    </div>

<!-- ################################################################################################################################################ -->


                  </div>
                </div>
            <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
            </div>
          <!-- /.content-wrapper -->
      </section>
      <!-- /#page-content-wrapper -->
    </div>
  <!-- /#wrapper -->
</div>

    
    
<!-- main-footer -->
<?php include('main_footer.php'); ?>

<!-- Control Sidebar -->
<?php include('right_nav.php'); ?>
<!-- /.control-sidebar -->
  
<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

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

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    
    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>
    <script src="../data/morris-bar.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

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


    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    
</body>

</html>

