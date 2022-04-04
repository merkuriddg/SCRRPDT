<?php
include('cal_counts.php');
include('mail_counts.php');
?>

<!-- Sidebar -->

    <li>
        <a href="dashboard.php">
            <i class="fa fa-dashboard fa-fw"></i><span>Dashboard</span>
        </a>
    </li>
    <li>
        <a href="stock.php">
            <i class="fa  fa-line-chart fa-fw"></i> <span>Stock</span>
        </a>
    </li>
    <li>
        <a href="calendar.php">
            <i class="fa fa-calendar fa-fw"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-blue" data-toggle="tooltip" title="New">
                <?php echo ($_SESSION['cal_count']); ?>
                </small>
            </span>
          </a>
    </li>
    <li>
        <a href="contacts.php">
            <i class="fa fa-group fa-fw"></i>
            <span>Contacts</span>
        </a>
    </li>
    <li>
      <a href="mail.php">
        <i class="fa fa-envelope fa-fw"></i> <span>Mail</span>
        <span class="pull-right-container">
            <small class="label pull-right bg-yellow" data-toggle="tooltip" title="Total">
                <?php echo ($_SESSION['mail_inbox']); ?>
            </small>
            <small class="label pull-right bg-blue" data-toggle="tooltip" title="Unread">
                <?php echo ($_SESSION['mail_unread']); ?>
            </small>
        </span>
      </a>
    </li>
    <li>
        <a href="resolve.php">
            <i class="fa fa-list-alt fa-fw"></i> <span>Resolve</span>
        </a>
    </li>
    <li>
        <a href="cybrary.php">
            <i class="fa fa-book fa-fw"></i> <span>Library</span>
        </a>
    </li>
    <li>
        <a href="folder.php">
            <i class="fa fa-folder fa-fw"></i> <span>Folders</span>
        </a>
    </li>
    <li>
        <a href="cuppa.php">
            <i class="fa fa-coffee fa-fw"></i> <span>Cuppa</span>
        </a>
    </li>
    <li>
        <a href="profile.php">
            <i class="fa fa-user fa-fw"></i> <span>Profile</span>
        </a>
    </li>
    <li>
        <a href="randr.php">
            <i class="fa fa-edit fa-fw"></i> <span>R&R</span>
        </a>
    </li>
<?php 
if ($_SESSION['member_level'] == "99")
    { 
    echo '<li>';
    echo '<a href="controlpanel.php?weekid='.$_SESSION["game_week"].'&dayid='.$_SESSION["game_day"].'">';
    echo '<i class="fa fa-check fa-fw"></i> <span>Control Panel</span>';
    echo '</a></li>';
    echo '<li>';
    echo '<a href="session_vars.php';
    echo '<i class="fa fa-check fa-fw"></i> <span>Session Vars</span>';
    echo '</a></li>';
 } ?>
<li>
                                &nbsp;
                        </li>

                        <li>
                                &nbsp;
                        </li>

        <!-- /#sidebar-wrapper -->

