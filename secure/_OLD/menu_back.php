<div class="sidenav">
<?php include('get_member_info.php'); ?>
    <section class="sidebar">
      <div class="logo">
        <img src="../dist/img/mtx_black.png" height="30px" alt="MaTrEx, Inc.">
    </div>
      <div class="user-panel">
            <div class="user">
                <p><?php echo $_SESSION['member_name']; ?></p>
            </div>
      </div>
            <ul class="sidebar-menu" data-widget="tree">
            <li><a href="dashboard.php">&nbsp;<i class="fa fa-tasks"></i>Dashboard</a></li>
            <li class="treeview">
                <a href="#"><span class="menu">&nbsp;<i class="fa fa-building"></i> Our Business</span>
                    <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="dashboard.php?id=nm">- New </a></li>
                    <li><a href="dashboard.php?id=em">- Edit</a></li>
                    <li><a href="dashboard.php?id=vm">- View</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span class="menu">&nbsp;<i class="fa fa-clock-o"></i> Current Profiles</span>
                    <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="newcurrent.php">- New </a></li>
                    <li><a href="editcurrent.php">- Edit</a></li>
                    <li><a href="viewcurrent.php">- View</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span class="menu">&nbsp;<i class="fa fa-bullseye"></i> Target Profiles</span>
                    <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="newtarget.php">- New </a></li>
                    <li><a href="edittarget.php">- Edit</a></li>
                    <li><a href="viewtarget.php">- View</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span class="menu">&nbsp;<i class="fa fa-map"></i> Roadmap</span>
                    <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="newroadmap.php">- New </a></li>
                    <li><a href="editroadmap.php">- Edit</a></li>
                    <li><a href="viewroadmap.php">- View</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span class="menu">&nbsp;<i class="fa fa-book"></i> Support</span>
                    <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="newsupport.php">- New </a></li>
                    <li><a href="editsupport.php">- Edit</a></li>
                    <li><a href="viewsupport.php">- View</a></li>
                </ul>
            </li>            <li class="treeview">
                <a href="#"><span class="menu">&nbsp;<i class="fa fa-users"></i> Members</span>
                    <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="newmember.php">- New </a></li>
                    <li><a href="editmember.php">- Edit</a></li>
                    <li><a href="viewmember.php">- View</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span class="menu">&nbsp;<i class="fa fa-shield"></i> NIST CSF v1.1</span>
                    <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="nist.php?id=ID">- ID: Identify</a></li>
                    <li><a href="nist.php?id=PR">- PR: Protect</a></li>
                    <li><a href="nist.php?id=DE">- DE: Detect</a></li>
                    <li><a href="nist.php?id=RS">- RS: Respond</a></li>
                    <li><a href="nist.php?id=RE">- RE: Recover</a></li>
                    <li><a href="nist.php">- View All</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span class="menu">&nbsp;<i class="fa fa-gear"></i> Settings</span>
                    <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin.php">- Admin</a></li>
                    <li><a href="alerts.php">- Alerts</a></li>
                    <li><a href="calendar.php">- Calendar</a></li>
                    <li><a href="interface.php">- Interface</a></li>
                    <li><a href="security.php">- Security</a></li>
                    <li><a href="users.php">- Users</a></li>
                </ul>
            </li>
<hr>
        </ul>


    </section>
    <!-- /.sidebar -->
</div>